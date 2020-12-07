<?php
if((isset($_POST['name'])&&$_POST['name']!="")&&(isset($_POST['phone_number'])&&$_POST['phone_number']!=""&&(isset($_POST['email'])&&$_POST['email']!=""))){
    $name = htmlspecialchars(trim($_POST['name']));
    $phone_number = htmlspecialchars(trim($_POST['phone_number']));
    $email = htmlspecialchars(trim($_POST['email']));
	$to = "immellstorn7@mail.ru"; // емайл получателя данных из формы
	$subject = "Сообщение с сайта";
	$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
	$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
	$message .= "Номер телефона: ".$_POST['phone_number']."<br>"; //полученное из формы name=phone
	$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
	$headers .= 'Content-type: text/html;' . "\r\n";
	$headers .= 'charset=utf-8; ' . "\r\n";
	$headers .= 'From: immellstorn7@mail.ru' . "\r\n";
	$headers .= 'Reply-To: immellstorn7@mail.ru' . "\r\n";
	mail($to, $subject, $message, $headers);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>


	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Мария Кухарук | Риэлтор</title>
	<!-- FAVICON -->
	<link type="image/x-icon" rel="shortcut icon" href="./favicon.ico">
	<link type="image/png" sizes="512x512" rel="icon" href="./favicon-512x512.png">
	<!-- FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<!-- OG Tags -->
	<meta property="og:title" content="Мария Кухарук | Ваш личный риэлтор">
	<meta property="og:description" content='Любая сделака с недвижимостью в Санкт-Петербурге'>
	<meta property="og:type" content="article">
	<meta property="og:site_name" content="">
	<!-- CSS -->
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header id="header" class="header">
		<div class="navigation">
			<div class="container">
				<div class="row">
					<div class="order-2 order-sm-1 col-sm-6 text-center text-sm-left">
						<a href="tel:+79818727976" class="navigation__tel">
							+ 7-981-872-7976
						</a>
					</div>
					<div class="order-1 order-sm-2 col-sm-6">
						<ul class="navigation__list d-flex justify-content-center justify-content-sm-end">
							<li class="navigation__item">
								<a href="https://vk.com/write8955144" class="navigation__link" target="_blank" rel="nofollow" content="noindex"><i class="fab fa-vk"></i></a>
							</li>
							<li class="navigation__item">
								<a href="tg://resolve?domain=MariaKukharuk" class="navigation__link" target="_blank" rel="nofollow" content="noindex"><i class="fab fa-telegram-plane"></i></a>
							</li>
							<li class="navigation__item">
								<a href="mailto:kukharuk.maria@gmail.com" class="navigation__link" target="_blank" rel="nofollow" content="noindex"><i class="fa fa-envelope"></i></a>
							</li>
							<li class="navigation__item">
								<a href="https://wa.me/79818727976" class="navigation__link" target="_blank" rel="nofollow" content="noindex"><i class="fab fa-whatsapp"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row nav">
					<div class="col-10 col-lg-5">
						<p class="logo__text">Мария Кухарук<br><span>Ваш персональный риэлтор</span></p>
					</div>
					<div class="col-2 col-lg-7">
						<nav>
							<ul class="nav__list d-flex">
								<li class="nav__item">
									<a href="#about-section" class="nav__link">
										Обо мне
									</a>
								</li>
								<li class="nav__item">
									<a href="#services-section" class="nav__link">
										Мои услуги
									</a>
								</li>
								<li class="nav__item">
									<a href="#advantages-section" class="nav__link">
										Почему вам нужна именно я
									</a>
								</li>
								<li class="nav__item">
									<a href="#reviews-section" class="nav__link">
										Отзывы счастливых клиентов
									</a>
								</li>
								<li class="nav__item">
									<a href="#contacts-section" class="nav__link">
										Обратная связь
									</a>
								</li>
							</ul>
						</nav>
						<div class="hamburger">
							<span></span>
 							<span></span>
 							<span></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="main-screen">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="main-screen__content text-center">
							<h1 class="main-screen__title">
								Оказание риэлторских услуг в Санкт-Петербурге и Ленинградской области
							</h1>
							<p class="main-screen__text">
								Я помогаю людям, обратившимся ко мне, найти дом. Теперь Ваша очередь!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main>
		<section id="about-section" class="about-section">
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-lg-6 order-2 order-md-1 text-center">
						<img src="img/photo.jpg" alt="Мария Кухарук" class="about__img">
					</div>
					<div class="col-md-5 col-lg-6 order-1 order-md-2">
						<h2 class="about__title">
							Обо мне
						</h2>
						<p class="about__text">
							Привет! Меня зовут Мария и я, вот уже 3 года помогаю людям обрести дом. О моей продуктивной работе скажут <a href="#reviews-section" class="nav__link">отзывы</a> моих счастливых клиентов.</br>
							В моём портфолио десятки решённых кейсов, сотни рассмотренных вариантов, база большинства известных застройщиков.</br>
							Подберу вариант, который устроит именно вас!</br>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section id="services-section" class="services-section">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="servises__title">
							Мои услуги
						</h2>
					</div>
					<div class="col-lg-4">
						<div class="services__item text-center">
							<img src="img/photo1.jpg" alt="Покупка жилья">
							<h3 class="services__text">
								Продажа вашего жилья
							</h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="services__item text-center">
							<img src="img/photo2.jpg" alt="Покупка жилья">
							<h3 class="services__text">
								Покупка нового жилья
							</h3>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="services__item text-center">
							<img src="img/photo3.jpg" alt="Покупка жилья">
							<h3 class="services__text">
								Вторичный рынок
							</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="advantages-section" class="advantages-section">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="advantages__title">
							Почему вам нужна именно я?
						</h2>
					</div>
					<div class="col-lg-4">
						<div class="advantage__wrapper d-flex">
							<span>
								1
							</span>
							<div class="advantage__content">
								<h3 class="advantage__heading">
									Initial consultation
								</h3>
								<p class="advantage__text">
									Your free first consultation will include the discussion about your business, its real potential, and what impedes you from reaching your business goals.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="advantage__wrapper d-flex">
							<span>
								2
							</span>
							<div class="advantage__content">
								<h3 class="advantage__heading">
									Problem-solving
								</h3>
								<p class="advantage__text">
									After the in-depth conversation about your particular case, I'll offer you the tools to make the right decision and solve your critical situation.
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="advantage__wrapper d-flex">
							<span>
								3
							</span>
							<div class="advantage__content">
								<h3 class="advantage__heading">
									Getting results
								</h3>
								<p class="advantage__text">
									Finally, you’ll improve your skills as an Entrepreneur and as a Manager. You'll become the leader of your business and achieve long-term results.
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="reviews-section" class="reviews-section">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="advantages__title">
							Отзывы счастливых клиентов
						</h2>
					</div>
					<div class="col-12 text-center d-flex justify-content-between reviews">
						<div class="reviews__wrapper">
							<blockquote class="reviews__text">
								“Roy possesses an unbelievable intuition and a special viewpoint according to developing talent inside the organization. He is an appealing speaker and introduces these concepts in a new and original way.”
							</blockquote>
							<p class="reviews__date">
								October 28, 2018
							</p>
							<p class="reviews__autor">
								Richard Fuller
							</p>
							<p class="reviews__prof">
								Readymade CEO
							</p>
						</div>
						<div class="reviews__wrapper">
							<blockquote class="reviews__text">
								“Thanks for giving our staff the motivation and knowledge to overcome their inner barriers to becoming their best. You have managed to achieve our goal and reach our full potential.”
							</blockquote>
							<p class="reviews__date">
								October 25, 2018
							</p>
							<p class="reviews__autor">
								John Jones
							</p>
							<p class="reviews__prof">
								Syngenta, CMO
							</p>
						</div>
						<div class="reviews__wrapper">
							<blockquote class="reviews__text">
								“Roy, it is a great pleasure to work with a person like you, who believes in commitment, passion, and leadership. After working with you I know that I can achieve my goals faster and strongly believe in future success.”
							</blockquote>
							<p class="reviews__date">
								October 20, 2018
							</p>
							<p class="reviews__autor">
								Patrick Pool
							</p>
							<p class="reviews__prof">
								RVirtusa CDO
							</p>
						</div>
					</div>
					<div class="col-12 text-center">
						<a href="#" class="reviews__btn">
							Все отзывы здесь
						</a>
					</div>
				</div>
			</div>
		</section>
		<section id="contacts-section" class="contacts-section">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<form action="index.php" class="form" method="post">
							<h3 class="form__title">
								Оставьте ваши контактные данные и я свяжусь с вами в самое ближайшее время!
							</h3>
							<input class="form__input field" type="text" name="name" id="name" autocomplete="off" value="Ваше имя" required>
							
							<input class="form__input field" type="tel" name="phone_number" id="yourphone" autocomplete="off" value="Ваш телефонный номер" required>

							<input class="form__input field" type="email" name="email" id="email" autocomplete="off" value="Ваша электронная почта" required>
							<p class="form__text">
								<input class="form__input-check" type="checkbox" value="yes" required>Я даю согласие на обработку персональных данных
							</p>
							<input type="submit" placeholder="Отправить" class="btn form__input form__submit" id="button" data-target="#messageModal"> 
						</form>
						<!-- Modal -->
						<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModal" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-body text-center">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
										<h3 class="mt-4 mb-5 modal-title">Спасибо за вашу заявку!</h3>

										<button type="submit" value="ok" class="btn btn-danger btn-round mb-5" data-dismiss="modal">Ок</button>
									</div>
								</div>
							</div>
						</div>
   						 <!-- /Modal  -->

					</div>
				</div>
			</div>
		</section>
	</main>
	<footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<p class="footer__text">
					Мария Кухарук | Ваш персональный риэлтор
				</p>
			</div>
		</div>
	</footer>
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery-input-mask-phone-number.min.js"></script> <!-- Фильтрация данных номера телефона -->
	<script src="js/jquery-format-code-phone-number.js"></script> <!-- Маска номера телефона -->
    <script src="js/main.js"></script>
</body>