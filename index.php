<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/ad.css">
	<title>The Elegant Print</title>
	<style>
		.block-1{
			transition: all ease 500ms;
		}
		.block-2{
			transition: all ease 500ms;
		}
		.block-3{
			transition: all ease 500ms;
		}
		.block-4{
			transition: all ease 500ms;
		}
		.block-5{
			transition: all ease 500ms;
		}
		.block-6{
			transition: all ease 500ms;
		}
		.block-7{
			transition: all ease 500ms;
		}
		.block-8{
			transition: all ease 500ms;
		}
		.block-9{
			transition: all ease 500ms;
		}
	</style>
</head>
<body>
	<header>
		<div class="naz"></div>
		<img class="ico" src="img/icon.png" width="50" alt="">
		<h1>The Elegant</h1>

		<nav>
			<ul>
				<li><a href="index.html">Главная</a></li>
				<li onclick="one()"><a href="#">О нас</a></li>
				<li class="us" onclick="on()"><a href="#">Услуги</a></li>

			</ul>
			<button class="pis">Письмо</button>
			<div class="_"></div>
			<div class="burger-rod">
				<button onclick="me()" class="burger">☰</button>
			</div>
			

			
		</nav>
	</header>
	<main>
		
		<div class="priv">
			<h1>Приветсвуем вас</h1>
			<h1 class="gl">На нашем сайте</h1>
			<p>Большой выбор типографических услуг</p>
		</div>
		<div class="meny">
				<h3>Меню</h3>
				<p>Главная</p>
				<p onclick="one()">О нас</p>
				<p onclick="on()">Услуги</p>
			</div>
		<div class="super-box">
			
			<div class="yslu">
				<h1 class="Ys">Услуги</h1>
				<div class="block-1">
					<img style="border-radius: 10px;" src="img/img-1.jpg" width="300">
					<h2>Визитки</h2>
					<p>В современном мире визитки  имеет каждый предприниматель.</p>
				</div>
				<div class="block-2">
					<img style="border-radius: 10px;" src="img/img-2.jpg" width="300">
					<h2>Блокноты</h2>
					<p>Один из самых популярных типов брендированной продукции – это блокноты.</p>
				</div>
				<div class="block-3">
					<img style="border-radius: 10px;" src="img/img-3.jpg" width="300">
					<h2>Открытки</h2>
					<p>Открытки в Москве даже в наше современное время остаются универсальным.</p>
				</div>
				
			</div>
			<div class="yslu-2">
				<div class="block-4">
					<img style="border-radius: 10px;" src="img/img-4.jpg" width="300">
					<h2>Ежедневник</h2>
					<p>Ежедневник – незаменимая вещь во время совещаний или встреч с деловыми партнерами.</p>
				</div>
				<div class="block-5">
					<img style="border-radius: 10px;" src="img/img-5.jpg" width="300">
					<h2>Календари</h2>
					<p>Календарики представляют собой отличный рекламный материал. На нем можно разместить логотип своей фирмы.</p>
				</div>
				<div class="block-6">
					<img style="border-radius: 10px;" src="img/img-6.jpg" width="300">
					<h2>Промо сувениры</h2>
					<p>Типография полного цикла «Конверс» готова предложить всем желающим промо сувениры.</p>
				</div>
			</div>
			<div class="yslu-3">
				<div class="block-7">
					<img style="border-radius: 10px;" src="img/img-7.jpg" width="300">
					<h2>Ксерокопия</h2>
					<p>Под термином «ксерокопия» понимается воспроизведение полной копии документа на бумажном носителе.</p>
				</div>
				<div class="block-8">
					<img style="border-radius: 10px;" src="img/img-8.jpg" width="300">
					<h2>Разработка макетов</h2>
					<p>Разработка макета — это один из важных этапов создания веб-сайта или приложения, когда проектируется его визуальное представление.</p>
				</div>
				<div class="block-9">
					<img style="border-radius: 10px;" src="img/img-9.jpg" width="300">
					<h2>Полиграфическая продукция</h2>
					<p>К полиграфической продукции относятся книги, газеты, журналы, календари, буклеты, этикетки и прочее.</p>
				</div>
			</div>

		</div>
		<div class="pod-box">
			<div class="pod-pod">
				<h1>The Elegant Print</h1>
				<div class="___"></div>
				<div class="wid"><p>Мы воплощаем искусство печати в своем самом совершенном проявлении. В компании "Перфект Принт" мы с гордостью предоставляем широкий спектр услуг типографии высочайшего качества для различных потребностей и задач.

Наша типография оснащена самыми передовыми технологиями и использует только лучшие материалы, чтобы обеспечить непревзойденное качество печати. Независимо от того, нужны ли вам эффектные брошюры, привлекательные рекламные материалы, элегантные визитки, уникальные упаковки или красочные плакаты, наши опытные специалисты всегда готовы реализовать ваши самые смелые идеи.</p></div>
			</div>
		</div>
		<button onclick="onee()" class="ww">&#129045;</button>
	</main>
	<div class="commene">
		<div class="osn">
			<div class="osne">
				<form method="post">
					<input name="name" type="text" placeholder="Имя..."></center>
					<input name="email" type="text" placeholder="Почта..."><br>
					<textarea name="comm" placeholder="Коментарий..."></textarea><br>
					<button>Отправить</button>
				</form>
				
			</div><br>
			<div class="comm-rod">
				<div class="comm-2">
						<?php
							$mysql = new mysqli("localhost", "root", "", "tipograf");
							$mysql->query("SET NAMES 'utf8'");	

							if($mysql->connect_error){
								echo "Connect error: ".$mysql->connect_errno;
								echo "Error: ".$mysql->connect_error;
							}else{
								$name = $_POST['name'];
								$comm = $_POST['comm'];
								$email = $_POST['email'];
								$mysql->query("INSERT INTO `commm` (`name`, `email`, `comm`) VALUES('$name', '$email', '$comm')");
								$mysql->query("SELECT DISTINCT `name`, `comm` FROM `commm`");
								$sql = "SELECT DISTINCT `name`, `comm` FROM `commm` WHERE 250";
								$result = $mysql->query($sql);

								while($row = $result->fetch_assoc()){
									echo "<div class='namie'>"."<h2>".$row['name'].":"."</h2>"."</div>";
									echo "<div class='commen'>"."<h3>".$row["comm"]."</h3>"."</div>"."<br>";
								}

							}

						?>

				</div>
			</div>
		</div>
	</div>
	<div class="mes">
		
	</div>
	<footer>
		<p>Ⓒ 2023 Все права защищены</p>
	</footer>
</body>
<script type="text/javascript" src="js/jav.js"></script>
<script>
	var bur = document.querySelector(".burger");
	bur.onclick = me;
	let i = 0;
	function me(){
		bur.innerHTML = '✕';
		document.querySelector(".meny").classList.add('men-v');
		i++;
		if(i % 2 == 0){
			document.querySelector(".meny").classList.remove('men-v');
			bur.innerHTML = "☰";
		}
	}
</script>
</html>