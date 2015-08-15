<!DOCTYPE html>
<html>
	<head>
		<title>Базовые битриксовые компоненты</title>
		<meta charset="utf-8">

		<meta name="description" content="ББК ускоряет разработку, предоставляя, при этом, дополнительные, не присущие ни одному штатному компоненту «1С-Битрикса», возможности."> 
		<meta name="keywords" content="ББК, Битрикс, компоненты, 1С-Битрикс"> 
		<meta property="og:title" content="Базовые битриксовые компоненты" />
		<meta property="og:image" content="http://samokhvalov.info/bbc/social_image.gif" />
		<meta property="og:description" content="ББК ускоряет разработку, предоставляя, при этом, дополнительные, не присущие ни одному штатному компоненту «1С-Битрикса», возможности." />

		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="likely/jquery.js"></script>
		<script src="likely/likely.js"></script>
		<link rel="stylesheet" href="likely/likely.css">
		<link href="rainbow/themes/espresso-libre.css" rel="stylesheet" type="text/css" media="screen">

		<style>
			body, input, button, textarea, select {
				margin: 0;
				padding: 0 10% 0 10%;
			  	font-family: Georgia, "Times New Roman", Times, serif;
			  	font-size: 20px;
			  	line-height: 28px;
			}
			pre, tt, code, pre *, tt *, code * {
	  			font-family: Menlo, Consolas, "Courier New", monospace;
	  			padding-top: 0;
			}
			a {
				color: rgb(44, 149, 187);
			}
			a:hover {
				color: #333;
			}
			a:visited {
				color: rgb(152, 38, 165);
			}
			menu {
				height: 20px;
				margin-top: 10px;
				font-size: 16px;
			}
			menu li {
				float: left;
				margin-right: 40px;
				list-style-type: none;
			}
			menu li:last-child {
				float: right;
			}
			footer {
				margin: 70px 0 20px;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 11px;
			}

			.text h1 {
				background: url('top_cover.gif') center no-repeat #297E9D;
				height: 370px;
				margin: 0 -12% 10px -13%;
				padding-top: 20px;
				text-align: center;
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 90px;
				line-height: 110px;
				color: #fff;
			}
			.text h1 sup {
				cursor: help;
				color: orange;
				font-size: 18px;
			}

			.text h2 {
				margin-top: 140px;
				text-align: center;
				font-size: 50px;
			}
			.text h2 a {
				text-decoration: none;
				color: #000;
			}

			.text h3 {
				margin-top: 70px;
				font-size: 22px;
			}
			.text h3 a {
				text-decoration: none;
				color: #000;
			}

			.text .github {
				background: url('github_icon_default.png') center no-repeat;
				height: 100px;
				margin-top: 40px;
				font-weight: bold;
			}
			.text .github:hover {
				background: url('github_icon_hover.png') center no-repeat;
			}

			.text .likely {
				width: 100%;
				margin-top: 30px;
				text-align: center;
			}

			.intro {
				margin-bottom: 60px;
			}
			.intro h3 {
				margin-top: 24px;
			}
			.intro td {
				vertical-align: top;
			}
			.intro td:nth-child(1) {
				width: 80%;
				padding: 10px 30px 0 0;
			}
			.intro td:nth-child(2) {
				min-width: 190px;
				padding-top: 40px;
				text-align: center;
			}
			.intro ul {
				padding-left: 20px;
			}
			.intro li {
				margin-bottom: 10px;
			}
			.intro .requirements span {
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 11px;
			}
			.intro .requirements span.name {
				cursor: help;
				border-radius: 3px 0 0 3px;
				background: #8892BF;
				padding: 3px;
			}
			.intro .requirements span.bitrix {
				background: #E83A56;
				color: #fff;
			}
			.intro .requirements span.version {
				cursor: help;
				border-radius: 0 3px 3px 0;
				background: rgb(97, 163, 53);
				margin: 0 10px 0 -3px;
				padding: 3px;
				color: #fff;
			}

			.methods_docs {
				font-size: 16px;
				line-height: 22px;
			}
			.methods_docs thead {
				font-weight: bold;
			}
			.methods_docs td {
				padding: 5px;
			}
			.methods_docs thead tr {
				background: #2D5695;
				color: #eee;
			}
			.methods_docs tbody tr:nth-child(2n) {
				background: #ECF9FF;
			}		
			.methods_docs tbody td:nth-child(1) {
				font-weight: bold;
			}

			.methods_docs.first_center tbody td:nth-child(1) {
				text-align: center;
			}
			.methods_docs.first_center tbody td:nth-child(1) {
				font-weight: normal;
			}
			.methods_docs.first_center tbody td:nth-child(2) {
				font-weight: bold;
			}
		</style>
	</head>
	<body>

		<menu>
			<li><a href="#docs">«Документация»</a></li>
			<li><a href="https://github.com/niksamokhvalov/Bitrix-basis-components">Скачать</a></li>
			<li><a href="mailto:nik@samokhvalov.info?subject=ББК">Написать создателю</a></li>
		</menu>
		
		<div class="text">
			<h1>Базовые<br>битриксовые<br>компоненты<sup title="Бета-версия">β</sup></h1>

			<table class="intro">
				<tr>
					<td colspan="2">
						<p>Сборка базовых битриксовых компонетов (ББК) ускоряет разработку, предоставляя, при этом, дополнительные, не присущие ни одному штатному компоненту «1С-Битрикса», возможности.</p>
						<p>Используя ББК, вы сконцентрируетесь на основной логике компонента. Проверку и привидение параметров, установку заголовков, тегов, постраничной навигации, обработку аякс-запросов, перехват ошибок — обо всём этом и многом другом позаботится ББК.</p>
					</td>
				</tr>
				<tr>
					<td>
						<h3>✌ ББК — это…</h3>
						<ul>
							<li>Оперативное уведомление администратора о  «схваченных исключениях»</li>
							<li>Работа с аяксом без лишней головной боли (в обход «битриксовой» технологии)</li>
							<li>Установка СЕО-заголовков и ОГ-тегов для соцсетей</li>
							<li>Наследование параметров компонентов с возможностью модификации</li>
							<li>Генерация строки постраничной навигации, глобальные фильтры, модификаторы выборок</li>
							<li>Подключение модулей, проверка и привидение входящих параметров</li>
							<li>Кеширование, хелперы и многое другое</li>
						</ul>
					</td>
					<td>
						<a href="https://github.com/niksamokhvalov/Bitrix-basis-components"><div class="github"></div></a>
						<p class="requirements">
							<span title="ПХП не ниже версии 5.4.0">
								<span class="name">PHP</span> <span class="version">5.4.0</span>
							</span>
							<span title="Битрикс не ниже версии 15.0.2">
								<span class="name bitrix">1С-Битрикс</span> <span class="version">15.0.2</span>
							</span>
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<h3>❂ Планы на будущее</h3>
						<ul>
							<li>Работа компонентов с инфоблоками через символьные коды</li>
							<li>Улучшения системы логирования ошибок</li>
							<li>Документация</li>
						</ul>
					</td>
				</tr>
			</table>

			<h3><a href="#concept" name="concept">Концепция</a></h3>
			<p>Сборка ББК представлена двумя основополагающими абстрактными компонентами basis и basis.router. Вместе с ними так же поставляются компоненты-примеры.</p>
			<p>ББК основывается на использовании типажей и подавляющая часть методов размещена в них. При добавлении сборки на сайт рекомендуется вынести компоненты в отдельную зону, например — basis.</p>
			<p>Базовые компоненты предоставляют дочерним классам три основные точки входа, методы, которые можно переопределить для создания индивидуальной логики компонента:</p>
			<ol>
				<li>executeProlog() — выполняется в начале работы компонента, после подключения модулей, установки параметров и заголовков. Результаты метода не кешируются.</li>
				<li>executeMain() — основная логика компонента, все ключевые операции производятся в этом методе. Если в параметрах компонента передан ключ CACHE_TYPE не равный «N», результаты метода буду закешированы.</li>
				<li>executeEpilog() — выполняется после подключения шаблона компонента. Результаты не кешируются.</li>
			</ol>

			<div class="likely">
				<div class="twitter" data-via="ilyabirman">Твитнуть</div>
				<div class="facebook">Поделиться</div>
				<div class="gplus">Плюсануть</div>
				<div class="vkontakte">Поделиться</div>
				<div class="pinterest" data-media="i/pinnable.png">Запинить</div>
			</div>

			<h2><a href="#docs" name="docs">«Документация»</a></h2>

			<h3><a href="#arch" name="arch">Архитектура</a></h3>
			<p>Ключевой метод всех компонентов:</p>
<pre><code data-language="php">
public function executeComponent()
{
   try {
      $this->executeBasis();
   }
   catch (\Exception $e)
   {
      $this->catchException($e);
   }
}
</code></pre>
			<p>Переназначение метода executeComponent() допускается только с целью добавления учёта дополнительных исключений. Во избежание нарушения целостности и несоблюдения архитектуры ББК запрещено производить какие-либо иные модификации логики этого метода.</p>
			<p>Как видно из примера выше, в начале работы компонента вызывается метод executeBasis() — основа ББК — выполняющий последовательность действий по обеспечению работы компонента.</p>
			<p>Рассмотрим структуру базового компонента в порядке его выполнения.</p>

			<table class="methods_docs">
				<thead>
					<tr>
						<td>Метод</td>
						<td>Комментарий</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>onPrepareComponent()</td>
						<td>Приведение параметров компонента.</td>
					</tr>
					<tr>
						<td>executeComponent()</td>
						<td>Основной метод компонента, реализующий инициализацию ББК и перехват исключений.</td>
					</tr>
					<tr>
						<td>includeModules()</td>
						<td>Подключение модулей, указанных в свойстве needModules класса компонента.</td>
					</tr>
					<tr>
						<td><small>Автоматическая проверка и приведение параметров, перечисленных в свойстве $checkParams класса компонента.</small></td>
						<td></td>
					</tr>
					<tr>
						<td>checkParams()</td>
						<td>Предназначен для собственных проверок параметров компонента. Метод-болванка.</td>
					</tr>
					<tr>
						<td><small>Сброс буфера вывода и установка необходимых заголовков, если к компоненту обращается аякс-запрос.</small></td>
						<td></td>
					</tr>
					<tr>
						<td><small>Выполнение прологов типажей.</small></td>
						<td></td>
					</tr>
					<tr>
						<td>executeProlog()</td>
						<td>Пролог компонента.</td>
					</tr>
					<tr>
						<td>executeMain()</td>
						<td>Основная логика компонента. Кешируется.</td>
					</tr>
					<tr>
						<td>returnDatas()</td>
						<td>Подключение шаблона компонента. По-умолчанию шаблон так же кешируется. Для отключения кеширования в классе компонента необходимо присвоить свойству cacheTemplate значенение false.</td>
					</tr>
					<tr>
						<td><small>Выполнение эпилогов типажей.</small></td>
						<td></td>
					</tr>
					<tr>
						<td>executeEpilog()</td>
						<td>Эпилог компонента.</td>
					</tr>
					<tr>
						<td><small>Остановка выполнения страницы, если к компоненту обращается аякс-запрос.</small></td>
						<td></td>
					</tr>
				</tbody>
			</table>


			<h3><a href="#common" name="common">Типаж Common</a></h3>
			<p>Ручное подключение типажа Common не требуется, т. к. он подключается автоматически по всех компонентах ББК. Common обеспечивает обработку аякс-запросов, исключений, рассылает уведомления, осуществляет кеширование результатов, подключает модули, проверяет и приводит входящие параметры и делает многое другое.</p>
			<p>Наиболее часто используемые методы перечислены в таблице ниже.</p>

			<table class="methods_docs first_center">
				<thead>
					<tr>
						<td>Авт.</td>
						<td>Метод</td>
						<td>Комментарий</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>+</td>
						<td>includeModules()</td>
						<td>Подключает модули, переданные в свойстве needModules класса компонента.</td>
					</tr>
					<tr>
						<td></td>
						<td>startCache()</td>
						<td>Начинает кеширование результатов работы компонента.</td>
					</tr>
					<tr>
						<td></td>
						<td>writeCache()</td>
						<td>Завершает кеширование.</td>
					</tr>
					<tr>
						<td></td>
						<td>abortCache()</td>
						<td>Останавливает и отменяет кеширование.</td>
					</tr>
					<tr>
						<td></td>
						<td>addCacheAdditionalId()</td>
						<td>Добавление дополнительного идентификатора кеша.</td>
					</tr>
					<tr>
						<td>+</td>
						<td>returnDatas()</td>
						<td>Вывод результатов работы компонента. По-умолчанию — подключение шаблона компонента.</td>
					</tr>
					<tr>
						<td></td>
						<td>return404()</td>
						<td>Установка ХТТП-статуса 404 и константы ERROR_404 в значение Y.</td>
					</tr>
					<tr>
						<td>+</td>
						<td>catchException()</td>
						<td>Перехватчик исключения. Вызывается в блоке catch {} метода executeComponent().</td>
					</tr>
					<tr>
						<td>+</td>
						<td>sendNotifyException()</td>
						<td>Отправка уведомления на почту администратора о выброшенном исключении.</td>
					</tr>
					<tr>
						<td>+</td>
						<td>showExceptionUser()</td>
						<td>Отображении сообщения об ошибке при выброшенном исключении простому пользователю.</td>
					</tr>
					<tr>
						<td>+</td>
						<td>showExceptionAdmin()</td>
						<td>Отображении сообщения об ошибке при выброшенном исключении администратору сайта.</td>
					</tr>
					<tr>
						<td></td>
						<td>isAjax()</td>
						<td>Проверка, является ли текущее обращение к компоненту аякс-запросом.</td>
					</tr>
					<tr>
						<td></td>
						<td>registerCacheTag()</td>
						<td>Регистрация тега кеша.</td>
					</tr>
				</tbody>
			</table>


			<h3><a href="#elements" name="elements">Типаж Elements</a></h3>
			<p>Elements предоставляет функционал, наиболее часто используемый в компонентах, работающих с инфоблоками: обработка и подготовка параметров для выборки элементов инфоблока, генерация строки постраничной навигации и интерфейса «Эрмитажа», работа с глобальным фильтром. А так же СЕО-фичи: установка мета-тегов из настроек инфоблока и опен-граф тегов для соцсетей, генерация короткой ссылки и хлебных крошек.</p>
			<p>Для получения функционала типажа Elements нужно только подключить его:</p>
<pre><code data-language="php">
class Test extends Basis
{
   use Elements;
}
</code></pre>
			<p>Наиболее часто используемые методы перечислены в таблице ниже.</p>

			<table class="methods_docs first_center">
				<thead>
					<tr>
						<td>Авт.</td>
						<td>Метод</td>
						<td>Комментарий</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>+</td>
						<td>setNavStartParams()</td>
						<td>Установка параметров для постраничной навигации.</td>
					</tr>
					<tr>
						<td></td>
						<td>generateNav()</td>
						<td>Генерация строки постраничной навигации.</td>
					</tr>
					<tr>
						<td></td>
						<td>getShortLink()</td>
						<td>Возвращает короткую ссылку для страницы.</td>
					</tr>
					<tr>
						<td></td>
						<td>addGlobalFilters()</td>
						<td>Добавление дополнительных условий в глобальный фильтр.</td>
					</tr>
					<tr>
						<td></td>
						<td>addParamsGrouping()</td>
						<td>Добавление параметров группировки для гет-листа элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>addParamsNavStart()</td>
						<td>Добавление параметров постраничной навигации для гет-листа элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>addParamsSelected()</td>
						<td>Добавление выбираемых полей и свойств гет-листом элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>getParamsSort()</td>
						<td>Получение параметров сортировки для гет-листа элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>getParamsFilters()</td>
						<td>Получение фильтра для гет-листа элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>getParamsGrouping()</td>
						<td>Получение параметров группировки для гет-листа элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>getParamsNavStart()</td>
						<td>Получение параметров сортировки для гет-листа элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>getParamsSelected()</td>
						<td>Получение запрашиваемых полей и свойств для гет-листа элементов.</td>
					</tr>
					<tr>
						<td></td>
						<td>getProcessingMethod()</td>
						<td>Получение названия метода, с помощью которого будет производиться обработка результатов гет-листа.</td>
					</tr>
					<tr>
						<td></td>
						<td>prepareElementsResult()</td>
						<td>Метод-перехватчик для обработки результатов гет-листа элементов инфоблока. Вызывается на каждой итерации цикла. Должен вернуть массив, который будет помещён в свойство arResult класса компонента, либо false для пропуска итерации.</td>
					</tr>
				</tbody>
			</table>


			<br>
			<p><i>Продолжение следует…</i></p>
		</div>

		<footer>
			&copy; Никита Самохвалов &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
			<a href="mailto:nik@samokhvalov.info?subject=ББК">Написать создателю</a>
		</footer>

		<script src="rainbow/js/rainbow.js"></script>
    	<script src="rainbow/js/language/generic.js"></script>
    	<script src="rainbow/js/language/php.js"></script>

    	<!-- Yandex.Metrika counter --><script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter23583223 = new Ya.Metrika({ id:23583223, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/23583223" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
	</body>
</html>