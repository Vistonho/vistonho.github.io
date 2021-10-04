<?php
session_start();
if (!isset($_SESSION["theme"])){
  $_SESSION["theme"]="dark";
}
?>

<!DOCTYPE>
<head> <!-- -->
	<link rel="stylesheet" href="dark.css"> <!-- Подключаю файл master.css -->
	<link rel="stylesheet" href="slider.css"> <!-- Подключаю файл slider.css -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="<?php echo $_SESSION["theme"]?>.css" id="theme-link">
</head>
<body>

<header>
	<title>My-Giro</title> <!-- Название страницы -->
	<div class="logo"> <!-- Блок с логотипом -->
		<img src="img/Logo2.png" class="logo-img"> <!-- Логотип -->
	</div>
	<div class="telephone"> <!-- Блок с телефонами -->
		<p class="phone">+7 351 111 22 33</p> <!-- Номер -->
		<a href="tel:+73511112233"><img id="pbutton" src="img/трубка.png" alt="Телефон"></a> <!-- Кнопка вызова -->
		<img class="theme-button" id="theme-button" src="img/tema.png" alt="Сменить тему">
	</div>
</header>


<div class="back">
	<a href="#"><img id="back" src="img/ar.png" alt="Назад"></a>
</div>


<!-- блок слайдера -->
<div class="carousel-wrapper">
	<span id="item-1"></span>
	<span id="item-2"></span>
	<span id="item-3"></span>
	<span id="item-4"></span>
	<!-- 1й элемент слайдера -->
	<div class="carousel-item item-1">
		<p>Мы обслуживаем одинаково качественно как своих гарантийных
клиентов, так и сторонние заказы.</p>
		<a class="arrow arrow-prev" href="#item-4"></a>
		<a class="arrow arrow-next" href="#item-2"></a>
	</div>
	<!-- 2й элемент слайдера -->
	<div class="carousel-item item-2">
		<p>Если деталь сломалась — в нашем центре ее не будут ремонтировать,
а сразу заменят на новую.</p>
		<a class="arrow arrow-prev" href="#item-1"></a>
		<a class="arrow arrow-next" href="#item-3"></a>
	</div>
	<!-- 3й элемент слайдера -->
	<div class="carousel-item item-3">
		<p>Мы работаем с крупной сетью сервисных центров, ее филиалы
находятся в 70 городах России.</p>
		<a class="arrow arrow-prev" href="#item-2"></a>
		<a class="arrow arrow-next" href="#item-4"></a>
	</div>
	<!-- 4й элемент слайдера -->
	<div class="carousel-item item-4">
		<p>Гарантия действует в течении 3 лет!</p>
		<a class="arrow arrow-prev" href="#item-3"></a>
		<a class="arrow arrow-next" href="#item-1"></a>
	</div>
</div>


<!--Блок, содержащий особенности-->
<div class="wrapper"> <!-- Блоки с картинками и текстом -->
	<div class="part"> <!-- Электросамокат -->
		<img class="tech-img" src="img/elsam.png" alt="Самокат">
		<div class="text">
			<p> 	Электросамокат - современный вариант простого самоката.
				Для того чтобы на нем кататься, нужно всего один раз оттолкнуться ногой от земли, обеспечив стартовое ускорение.
				Дальше устройство будет везти хозяина самостоятельно за счет встроенного электромотора.
				Если выбирать между моноколесом или электросамокатом, последний будет гораздо безопаснее в эксплуатации за счет наличия 2 колес и ручкек для опоры руками.</p>
		</div>
	</div>
	<div class="part"> <!-- Гироскутер -->
		<img class="tech-img" src="img/giro.png" alt="Самокат">
		<div class="text">
			<p> 	Гироскутер представляет собой конструкцию из 2 колес,
				расположенных по бокам от наездника и соединенных поперечной
				планкой-корпусом. Внутри корпуса располагаются
				электродвигатели, аккумуляторные батареи и гироскопы,
				поддерживающие в горизонтальном положении площадку для ног.
				Гироскутеры никогда не оснащаются рукоятками для рук.
				Устройства из 2 колес, поперечной площадки и рулевого столба
				называются сигвеями и управляются манипуляциями руками.
				Особенность управления гироскутером состоит в том, что для
				движения вперед наезднику необходимо наклониться вперед. Для
				торможения или движения назад - наклониться назад. Для поворота
				нужно наклонять корпус в правую или левую сторону.</p>
		</div>
	</div>
	<div class="part"> <!-- Сигвей -->
		<img class="tech-img" src="img/sig.png" alt="Самокат">
		<div class="text">
			<p> 	Сигвей - средство передвижения для одного человека, которое
				держит равновесие с помощью специальной автобалансирующей
				системы. Это своеобразный электрический скутер, самостоятельно
				удерживающий равновесие. Сигвеи бесшумны в работе, не
				загрязняют окружающую среду, работают на электрической энергии,
				накопленной батареей аккумуляторов.</p>
		</div>
	</div>
</div>

<div class="h1"> <!-- Заголовок -->
	<h1>Продаваемые модели</h1>
</div>


<div class="container">
	<div class="container-menu">
		<input type="radio" id="blue" name="color" />
		<label for="blue">Гироскутеры</label>
		<input type="radio" id="red" name="color"/>
		<label for="red">Самокаты</label>
		<input type="radio" id="green" name="color"/>
		<label for="green">Сигвеи</label>
		<input type="radio" id="reset" name="color"/>
		<label for="reset">Все товары</label>

		<div class="tile blue">
			<div class="tov-number"> <!-- Блок с товаром -->
				<div class="tov-img"> <!-- Картинка -->
					<img id="i1" src="img/tov1.jpg" alt="Smart Balance 6.5" Ver. 1>
				</div>
				<div class="tov-text">
					<p class="name">Гироскутер</p>
					<p class="model">Smart Balance 6.5" Ver. 1</p>
					<p class="ru">8990 рублей</p>
				</div>
			</div>
		</div>

		<div class="tile blue">
			<div class="tov-number"> <!-- Блок с товаром -->
				<div class="tov-img"> <!-- Картинка -->
					<img id="i2" src="img/tov2.jpg" alt="Smart Balance 6.5" Ver. 1>
				</div>
				<div class="tov-text">
					<p class="name">Гироскутер</p>
					<p class="model">KIWANO KO-X ES03</p>
					<p class="ru">18900 рублей</p>
				</div>
			</div>
		</div>

		<div class="tile green">
			<div class="tov-number"> <!-- Блок с товаром -->
				<div class="tov-img"> <!-- Картинка -->
					<img id="i3" src="img/tov4.jpg" alt="Smart Balance 6.5" Ver. 1>
				</div>
				<div class="tov-text">
					<p class="name">Cигвей</p>
					<p class="model">Minirobot Mini PRO 36V Белый</p>
					<p class="ru">15990 рублей</p>
				</div>
			</div>
		</div>

		<div class="tile green">
			<div class="tov-number"> <!-- Блок с товаром -->
				<div class="tov-img"> <!-- Картинка -->
					<img id="i4" src="img/tov4.jpg" alt="Smart Balance 6.5" Ver. 1>
				</div>
				<div class="tov-text">
					<p class="name">Cигвей</p>
					<p class="model">Xiaomi Ninebot Mini</p>
					<p class="ru">22900 рублей</p>
				</div>
			</div>
		</div>

		<div class="tile green">
			<div class="tov-number"> <!-- Блок с товаром -->
				<div class="tov-img"> <!-- Картинка -->
					<img id="i5" src="img/tov4.jpg" alt="Smart Balance 6.5" Ver. 1>
				</div>
				<div class="tov-text">
					<p class="name">Сигвей</p>
					<p class="model">Hili E+</p>
					<p class="ru">39900 рублей</p>
				</div>
			</div>
		</div>

		<div class="tile red">
			<div class="tov-number"> <!-- Блок с товаром -->
				<div class="tov-img"> <!-- Картинка -->
					<img id="i6" src="img/tov7.jpg" alt="Smart Balance 6.5" Ver. 1>
				</div>
				<div class="tov-text">
					<p class="name">Электросамокат</p>
					<p class="model">Yamato PES MINI</p>
					<p class="ru">15900 рублей</p>
				</div>
			</div>
		</div>

		<div class="tile red">
			<div class="tov-number"> <!-- Блок с товаром -->
				<div class="tov-img"> <!-- Картинка -->
					<img id="i7" src="img/tov7.jpg" alt="Smart Balance 6.5" Ver. 1>
				</div>
				<div class="tov-text">
					<p class="name">Электросамокат</p>
					<p class="model">KUGOO S2 (Jilong)</p>
					<p class="ru">14900 рублей</p>
				</div>
			</div>
		</div>
	</div>
</div>




<div class="h1"> <!-- Заголовок -->
	<h1>Наши cотрудники - наша гордость!</h1>
</div>

<div class="sotrud" > <!-- Блок с сотрудником №1 -->
	<div class="tabl">
		<p class="rab-text">Иванов Иван Иванович – квалифицированный специалист сервисного
центра My Gyro.</p>
	</div>
	<div class="rab-img"> <!-- Фото сотрудника №1 -->
		<img src="img/Гоблин3.jpg" alt="Гоблин">
	</div>
</div>

<div class="sotrud" > <!-- Блок сотрудника №2 -->
	<div class="rab-img"> <!-- Фото сотрудника №2 -->
		<img src="img/Гоблин.png" alt="Гоблин">
	</div>
	<div class="tabl">
		<p class="rab-text">Пупкин Василий Васильевич – старший консультант My Gyro.</p>
	</div>
</div>

<div class="sotrud" > <!-- Блок сотрудника №3 -->
<div class="tabl">
		<p class="rab-text">Захаров Андрей Борисович – менеджер-консультант My Gyro.</p>
	</div>
	<div class="rab-img"> <!-- Фото сотрудника №3 -->
		<img src="img/Гоблин2.png" alt="Гоблин">
	</div>
</div>

<div class="h1"> <!-- Заголовок -->
	<h1> В нашем магазине представлены следующие бренды </h1>
</div>

<div class="brand"> <!-- Бренды -->
	<img src="img/Гоблин2.png" class="brand-img" alt="Брэнд">
	<img src="img/Гоблин2.png" class="brand-img" alt="Брэнд">
	<img src="img/Гоблин2.png" class="brand-img" alt="Брэнд">
	<img src="img/Гоблин2.png" class="brand-img" alt="Брэнд">
	<img src="img/Гоблин2.png" class="brand-img" alt="Брэнд">
	<img src="img/Гоблин2.png" class="brand-img" alt="Брэнд">
	<img src="img/Гоблин2.png" class="brand-img" alt="Брэнд">
</div>

<div class="h1"> <!-- Заголовок -->
	<h1> Кто работает в нашей фирме? </h1>
</div>

<div class="personal"> <!-- Блок с персоналом -->
	<img src="img/p1.png" class="personal-img" alt="Персонал"> <!-- Картинка -->
	<div class="personal-text">
		<p class="p-text"> Чтобы работать в наших магазинах нужно знать каждую модель, её плюсы и минусы и уметь ездить на ней.
			Да, это долго, и кто-то скажет, что неэффективно.
			Но так мы гарантированно получаем сотрудника, который разбирается в каждом товаре и сможет по-настоящему помочь покупателю, а не “впихнуть” ему, что-нибудь подороже.</p>
	</div>
</div>

<div class="h1"> <!-- Заголовок -->
	<h1> Контакты </h1>
</div>

<div class="subscribe"> <!-- Блок подписки -->
	<p class="subscribe-text">Наш магазин работает с 2016 года.
		Мы представлены в таких городах как Екатеринбург, Москва и Челябинск и многие другие.
		В среднем мы отправляем по 15-20 заказов в день в разные города и регионы по всей России. </p>
	<p class="subscribe-text">Мы имеем свои сервисные центры и собственных мастеров, благодаря которым, выполняем гарантийные работы качественно и в срок.
		Так же вы можете обратиться к нам с любой проблемой.
		Мастера выполнят диагностику и выполнят ремонт. </p>
	<div class="subscribe-name">
		<p id="subscribe-name-p">Ваше имя:<br>
		<input type="text" size="40">
		</p>
	</div>
	<div class="subscribe-mail">
		<p id="subscribe-mail-p">Ваша почта:<br>
		<input type="text" size="40">
		</p>
	</div>
	<div class="subscribe-img">
		<a href="https://www.youtube.com/channel/UC-A99vSzm1_Q9k2ckre2W5w" target="_blank"><img src="img/subscribe.png" class="subscribe-img-img" alt="Подписка"></a> <!-- Кнопка -->
	</div>

</div>

<script src="themes.js"></script>

</body>
