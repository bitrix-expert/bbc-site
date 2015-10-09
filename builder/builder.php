<?php
/**
 * «Что временно — то постоянно.»
 */

$secret = file_get_contents(__DIR__ . '/secret.key');

set_error_handler(function ($severity, $message, $file, $line) {
    throw new \ErrorException($message, 0, $severity, $file, $line);
});

set_exception_handler(function ($e) {
    header('HTTP/1.1 500 Internal Server Error');
    echo htmlSpecialChars($e->getMessage());
    die();
});

$rawPost = null;

if ($secret !== null) {
    if (!isset($_SERVER['HTTP_X_HUB_SIGNATURE'])) {
        throw new \Exception("HTTP header 'X-Hub-Signature' is missing.");
    } elseif (!extension_loaded('hash')) {
        throw new \Exception("Missing 'hash' extension to check the secret code validity.");
    }

    list($algo, $hash) = explode('=', $_SERVER['HTTP_X_HUB_SIGNATURE'], 2) + ['', ''];

    if (!in_array($algo, hash_algos(), true)) {
        throw new \Exception("Hash algorithm '$algo' is not supported.");
    }

    $rawPost = file_get_contents('php://input');

    if ($hash !== hash_hmac($algo, $rawPost, $secret)) {
        throw new \Exception('Hook secret does not match.');
    }
};

if (!isset($_SERVER['CONTENT_TYPE'])) {
    throw new \Exception("Missing HTTP 'Content-Type' header.");
} elseif (!isset($_SERVER['HTTP_X_GITHUB_EVENT'])) {
    throw new \Exception("Missing HTTP 'X-Github-Event' header.");
}

switch ($_SERVER['CONTENT_TYPE']) {
    case 'application/json':
        $json = $rawPost ?: file_get_contents('php://input');
        break;
    case 'application/x-www-form-urlencoded':
        $json = $_POST['payload'];
        break;
    default:
        throw new \Exception("Unsupported content type: $_SERVER[CONTENT_TYPE]");
}

$payload = json_decode($json);

if (json_last_error() !== JSON_ERROR_NONE) {
    throw new ErrorException('Invalid JSON: ' . json_last_error_msg());
}

switch (strtolower($_SERVER['HTTP_X_GITHUB_EVENT'])) {
    case 'push':
        exec('cd ../ && bundle exec middleman build');
    break;

    default:
        header('HTTP/1.0 404 Not Found');
    break;
}
