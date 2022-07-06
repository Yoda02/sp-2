<!-- Общая разметка -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


		  <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
	<title>Sports-news</title>
</head>
<body>
	<!-- header -->
	<header class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<h1>
						<a href="/">Sports-news</a>
					</h1>
				</div>
				<nav class="col-8">
					<ul>
						<li><a href="/">Главная</a> </li>
						<li><a href="#">О нас</a> </li>
						<li>
							<a href="#">
								
								Категории
							</a>
							<ul>
								<li><a href="#">Волейбол</a> </li>
								<li><a href="#">Футбол</a> </li>
								<li><a href="#">Баскетбол</a> </li>
								<li><a href="#">Борьба</a> </li>
								<li><a href="#">Теннис</a> </li>
								<li><a href="#">Велоспорт</a> </li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-user"></i>
								Кабинет
							</a>
							<ul>
								<li><a href="/login">Админ панель</a> </li>
								<li><a href="#">Выход</a> </li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	
		<?php include 'application/views/'.$content_view; ?>
			<!-- footer -->
	<div class="footer container-fluid">
		<div class="footer-content container">
			<div class="row">
				<div class="footer-section about col-md-4 col-12">
					<h3 class="logo-text">Sports-news</h3>
					
					<div class="contact">
						<span><i class="fas fa-phone"></i> &nbsp; 7(940)912-34-56</span>
						
					</div>
					<div class="socials">
						<a href="#"><i class="fab fa-facebook"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
					</div>
				</div>

			
				<div class="footer-section contact-form col-md-4 col-12">
					<h3>Контакты</h3>
					<br>
					<form action="index.php" method="post">
						<input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
						<textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
						<button type="submit" class="btn btn-big contact-btn">
							<i class="fas fa-envelope"></i>
							Отправить
						</button>
					</form>
				</div>

			</div>

		
		</div>
	</div>

</body>