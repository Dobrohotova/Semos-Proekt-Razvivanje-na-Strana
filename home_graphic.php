<?php 
include('general.php');

$sql = 'select * from ind_projects limit 2';

$query = $db->query($sql);
$projects = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Irina Dobrohotova">
	<meta name="description" content="Irina Dobrohotova">
	<meta name="keywords" content="Semos Edu, academy, design, web design, graphic design, Angelina, kursevi, edukacija, Семос, едукација, курсеви">
	<meta name="viewport" content="">
	<link rel="stylesheet" type="text/css" href="styles/home_graphic.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<title>Semos Dizajn Akademija</title>
</head>
<body>
	<div class="wrapper-full-width-webdesign">
		<div class="header">
			<?php include('header_all.html'); ?>
		</div>
		<div class="head-slika">
			<img src="media/images/graphicdesign-cover.png">
		</div>
			<?php include('navigation_graphic.php'); ?>

		<!-- <div class="nav2">
			<div class="nav2-sodrzhina">
				<div class="nav2-studenti">
					<img class="polygon-nav" src="media/images/polygon-nav.png">
					<img class="icons-nav" src="media/images/icons/studenti.png">
					<p>Студенти</p>
				</div>
				<div class="nav2-proekti">
					<img class="polygon-nav" src="media/images/polygon-nav.png">
					<img class="icons-nav icon-proekti" src="media/images/icons/proekti-webdesign.png">
					<p>Проекти</p>
				</div>
				<div class="nav2-apliciraj">
					<img class="polygon-nav" src="media/images/polygon-nav.png">
					<img class="icons-nav" src="media/images/icons/apliciraj.png">
					<p>Аплицирај</p>
				</div>
				<div class="nav2-programa">
					<img class="polygon-nav" src="media/images/polygon-nav.png">
					<img class="icons-nav" src="media/images/icons/programa.png">
					<p>Програма</p>
				</div>
				<div class="nav2-faq">
					<img class="polygon-nav" src="media/images/polygon-nav.png">
					<img class="icons-nav" src="media/images/icons/faq.png">
					<p>FAQ</p>
				</div>
			</div>
		</div> -->
		<div class="webdesign-description">
			<div class="webdesign-description-content">
				<h1>Графички Дизајн</h1>
				<div class="webdesign-description-content-levo">
					<img class="webdesignslika1" src="media/images/webdesign-slika1.png">
					<img class="webdesignslika2" src="media/images/webdesign-slika2.png">
					<img class="webdesignslika3" src="media/images/webdesign-slika3.png">
					<img class="webdesignslika4" src="media/images/webdesign-slika4.png">
					<img class="webdesignslika5" src="media/images/webdesign-slika5.png">
				</div>
				<div class="webdesign-description-content-desno">
					<h3 class="zoshto-veb">Зошто ГРАФИЧКИ ДИЗАЈНЕР?</h3>
					<p>Ако имате силно креативно чувство и уживате во работа со компјутер, тогаш вашата идна професија е ГРАФИЧКИ ДИЗАЈНЕР. Сте избрале интересна и креативна професија која можете самостојно да ја работите во домашна атмосфера или тимски во маркетинг агенции или во дизајнерски студија. Тоа е професија која Ви нуди безгранични можности и Ви ги проширува хоризонтите во развојот на професионалната кариера.</p> 
					<h3 class="kluchni-pridobivki">Клучни придобивки</h3>
					<ul>
						<li>Креирање на ефективни дизајн пораки и намалување на непродуктивно потрошеното време,</li>
						<li>Брзо решавање на дизајн проблеми преку јасна и концептуална мисла,</li>
						<li>Збогатување на визуелниот вокабулар,</li>
						<li>Усовршување на компјутерски вештини во Adobe апликациите,</li>
						<li>Зголемување на интелектуалната љубопитност преку интеракција, промена на ставовите и развивање на вештини за комуникација преку слики.</li>
					</ul>
				</div>
			</div>			
		</div>
		<div class="webdesign-values">
			<div class="webdesign-values-sodrzhina">
				<div class="webdesign-values-sodrzhina-divovi">
					<img src="media/images/icons/studenti.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">100</p>
						<p class="p-zbor">студенти</p>
					</div>
				</div>
				<div class="webdesign-values-sodrzhina-divovi">
					<img src="media/images/icons/nagradi.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">8</p>
						<p class="p-zbor">награди</p>
					</div>
				</div>
				<div class="webdesign-values-sodrzhina-divovi">
					<img src="media/images/icons/profesori.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">20</p>
						<p class="p-zbor">професори</p>
					</div>
				</div>
				<div class="webdesign-values-sodrzhina-divovi">
					<img src="media/images/icons/proekti.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">250</p>
						<p class="p-zbor">проекти</p>
					</div>
				</div>
			</div>
		</div>
		<div class="webdesign-project">
			<div class="webdesign-project-content">
				<div class="pozadina1"></div>
				<div class="pozadina2"></div>
				<h1>Проекти изработени на академијата</h1>
				<div class="posters-holder">
					<?php foreach($projects as $key => $project){ ?>
					<div class="poster">
						<img src="<?= $project['photo'] ?>">
					</div>
					<?php } ?>
					<!-- <div class="poster">
						<img src="media/images/ind_projects/grafichki2.jpg">
					</div>	 -->				
				</div>
				<div class="button">
					<a href="ind_projects.php">повеќе</a>
				</div>
			</div>
		</div>
	</div>
		<?php include('footer.html'); ?>
</body>
</html>