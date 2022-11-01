<!DOCTYPE html>
<html>
<head><title>Проект</title> <!-- Подключение стилей -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/questions.css">
	<!-- Чтобы адекватно отображался русский язык -->
	<meta charset="utf-8" content="text/html" /> 
</head>
<body><!--Navbar-->
	<link rel="stylesheet" href="css/navbar.css">
	<link rel="stylesheet" href="css/tabs.css">
	<div id="navbar">
		<button class="tablink" onclick="openPage('home', this, 'white')" id="defaultOpen">Главная</button>
		<button class="tablink" onclick="openPage('referat', this, 'white')">Смотреть реферат</button>
		<button class="tablink" onclick="openPage('test', this, 'white')">Tecт</button>
	</div>
	
	<!--основная часть-->
	<link rel="stylesheet" href="css/tabs.css">
	<div id="home" class="tabcontent">
		<h1>Проект</h1>
		<div id="nav"><h3>Содержание:</h3><ol>
			<li><a href="#Введение">Введение</a></li>
			<li><a href="#HTML">HTML</a></li>
		</ol></div>
		<p>ТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекстТекст</p>
		<section id="HTML">
			<h1>Введение в HTML</h1>
			<p>Чтобы сразу же ввести в курс дела нетерпеливых читателей, предложим им возможность создания веб-страницы без последовательного изучения правил HTML. По крайней мере, вы сумеете убедиться, что создание веб-страниц достаточно простая штука.</p>
			<p style="color: Gray"><b><i>Пример кода:</i></b></p>
			<code>  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta content="text/html; charset=utf-8"&gt;
    &lt;title&gt;Первая страница&lt;/head&gt;
  &lt;/head&gt;
  &lt;body&gt;
  
    &lt;h1&gt;Заголовок&lt;/h1&gt;
    &lt;p&gt;Основной текст&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;</code>
			<p>Чтобы посмотреть результат примера в действии, проделайте следующие шаги.</p>
			<ol>
				<li>В Windows откройте программу Блокнот (Пуск > Выполнить > набрать «notepad» или Пуск > Программы > Стандартные > Блокнот).</li>
				<li>Наберите или скопируйте код в Блокноте (рис. 1.1).</li>
				<img src="images/img1.png">
				<li> Сохраните готовый документ (Файл > Сохранить как...) под именем c:\www\example11.html, при этом обязательно поставьте в диалоговом окне сохранения тип файла: Все файлы и кодировку UTF-8 (рис. 1.2). Обратите внимание, что расширение у файла должно быть именно html.</li>
				<img src="images/img2.png">
				<li>Запустите браузер Internet Explorer (Пуск > Выполнить > набрать «iexplore» или Пуск > Программы > Internet Explorer).</li>
				<li>В браузере выберите пункт меню Файл > Открыть и укажите путь к вашему файлу.</li>
				<li>Если все сделано правильно, то в браузере вы увидите результат, как показано на рис. 1.3.</li>
				<img src="images/img3.png">
			</ol>
			
		</section>
		<section id="info">
			<a href="https://github.com/Eg0r00f/Eg0r00f">Станица на Github</a>
		</section>
	</div>
	<div id="referat" class="tabcontent">
		<a href="../referat.docx" download class="dowload"><i class="fa fa-download" style="margin-left: 2px"></i>&nbspСКАЧАТЬ</a>
		<hr /><!--Подключение файла с Рефератом-->
		<?php include("../referat.html") ?>
		<hr />
	</div>
	<div id="test" class="tabcontent"> <!-- ТЕСТ  -->
		<div class="tabv">
			<button class="tablinksv" onclick="opentab(event, '1')" id="One">1</button>
			<button class="tablinksv" onclick="opentab(event, '2')">2</button>
			<button class="tablinksv" onclick="opentab(event, '3')">3</button>
		</div>
		
		<div id="1" class="VTab">
			<p>Является ли HTML язком программирования?</p>
			<form>
				<input type="radio" name="qwestion1" value="yes" />Да<br />
				<input type="radio" name="qwestion1" value="no" />Нет
			</form>
			<button id="q1">Ответить</button>
			
		</div>
		<div id="2" class="VTab">
			<p>Что нужно для разроботки сайтов?</p>
			<form>
				<input type="radio" name="qwestion2" value="text" />Текстовый редактор<br />
				<input type="radio" name="qwestion2" value="prog" />специализированные программы, мощный пк, и т.п.<br />
				<input type="radio" name="qwestion2" value="helpme" />Памагите!
			</form>
		</div>
		<div id="Answq1" class="modal">
			<div class="madal-content">
				<span class="close">&times;</span>
				<script></script>
				<p>Ответ</p>
			</div>
		</div>
		<script src="js/modal.js"></script>
		<script src="js/VerticalTab.js"></script>
	</div>		<!-- Подключение скриптов -->
	<script src="js/navbar.js"></script>
	<script src="js/tabs.js"></script>
	
</body>
</html>