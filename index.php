<?php
include('general.php');

$sql_events = 'select * from events';
$query_events = $db->query($sql_events);
$events = $query_events->fetchAll(PDO::FETCH_ASSOC);

$sql_oop_projects = 'select * from oop_projects';
$query_oop_projects = $db->query($sql_oop_projects);
$oops = $query_oop_projects->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Irina Dobrohotova">
	<meta name="description" content="Irina Dobrohotova">
	<meta name="keywords" content="Semos Edu, academy, design, web design, graphic design, Angelina, kursevi, edukacija, Семос, едукација, курсеви">
	<meta name="viewport" content="">
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<title>Semos Dizajn Akademija</title>
</head>
<body>
	<div class="wrapper-full-width">
		<div class="header">
			<?php include('header.html'); ?>
		</div>
		<div class="video">
			<img class="videoimg" src="media/images/videoimg.png">
			<div class="video-text">
				<h1 class="semos"><span>семос</span> академија за дизајн</h1>
				<p class="opis">Академијата претставува специфично насочено образование базирано на креативност, совладување на компјутерски вештини во Adobe апликациите и интензивна практична работа на студентите.
				</p>
				<img class="scroll-down" src="media/images/icons/upload.png">
			</div>			
		</div>
		<!-- <div class="graphic-vs-web">
			<div class="left-button">

				<div class="buttonnn">
					<div class="buttongorelevo">
						<img class="symbolbuttonleft" src="media/images/icons/graphic-design.png">
					</div>
					<div class="buttondolelevo">
						<a class="grafichkibutton" href="#">графички дизајн</a>
					</div>
				</div>

			</div>	
			<div class="right-button">
				<div class="rightbutonnn">
					<div class="buttongoredesno">
						<img class="simbolbuttonright" src="media/images/icons/web-design.png">
					</div>
					<div class="buttondoledesno">
						<a class="webbutton" href="#">веб дизајн</a>
					</div>
				</div>
			</div>
			<div class="devojka">
				<img src="media/images/devojka.png">
			</div>
		</div> -->
		<div class="graphic-vs-web">
			<div class="main-girl">
				<div class="left-button">
					<div class="buttongorelevo">
						<img class="symbolbuttonleft" src="media/images/icons/graphic-design.png">
					</div>
					<div class="buttondolelevo">
						<a class="grafichkibutton" href="#">графички дизајн</a>
					</div>
				</div>
				<div class="middle-devojka">
					<img src="media/images/devojka.png">
				</div>
				<div class="right-button">
					<div class="buttongoredesno">
						<img class="simbolbuttonright" src="media/images/icons/web-design.png">
					</div>
					<div class="buttondoledesno">
						<a class="webbutton" href="#">веб дизајн</a>
					</div>
				</div>
			</div>
		</div>
		<div class="zoshto-semos">
			<div class="zoshto-semos-sodrzhina">
				<div class="zoshto-semos-naslov">
					<h1 class="zoshto">Зошто Семос Академија?</h1>
					<h2 class="zoshto-lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vehicula ante et enim tincidunt, sit amet convallis lacus egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus.</h2>
				</div>
				<div class="value-tabla-tabs">
					<div class="value-tabla-tabs-levo">
						<div class="tabla">
							<img src="media/images/icons/kvalitet.png">
							<p class="tabla-kvalitet">Квалитет</p>
							<p class="tabla-lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam leo ipsum, accumsan et pretium porttitor, aliquet non turpis. Nunc rhoncus nisi vel diam eleifend, quis mattis massa consectetur. Pellentesque eget pharetra dolor. Sed gravida dignissim sodales. Nullam vel nunc at magna fringilla pharetra a ac ex. </p>
						</div>
					</div>
					<div class="value-tabla-tabs-desno">
						<div class="values">
							<div class="kvalitet">
								<img src="media/images/icons/kvalitet.png">
								<p>Квалитет</p>
							</div>
							<div class="tradicija">
								<img src="media/images/icons/tradicija.png">
								<p>Традиција</p>
							</div>
							<div class="ekspertiza">
								<img src="media/images/icons/ekspertiza.png">
								<p>Експертиза</p>
							</div>
							<div class="profesionalnost">
								<img src="media/images/icons/profesionalnost.png">
								<p>Професионалност</p>
							</div>
							<div class="kreativnost">
								<img src="media/images/icons/kreativnost.png">
								<p>Креативност</p>
							</div>
							<div class="akreditirani">
								<img src="media/images/icons/akreditirani.png">
								<p>Акредитирани</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="podatoci">
			<div class="podatoci-sodrzhina">
				<div class="podatoci-sodrzhina-divovi">
					<img src="media/images/icons/studenti.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">300</p>
						<p class="p-zbor">студенти</p>
					</div>
				</div>
				<div class="podatoci-sodrzhina-divovi">
					<img src="media/images/icons/nagradi.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">20</p>
						<p class="p-zbor">награди</p>
					</div>
				</div>
				<div class="podatoci-sodrzhina-divovi">
					<img src="media/images/icons/profesori.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">40</p>
						<p class="p-zbor">професори</p>
					</div>
				</div>
				<div class="podatoci-sodrzhina-divovi">
					<img src="media/images/icons/proekti.png">
					<div class="p-brojka-zbor">
						<p class="p-brojka">500</p>
						<p class="p-zbor">проекти</p>
					</div>
				</div>
			</div>
		</div>
		<div class="nastani">
			<div class="nastani-sodrzhina">
				<h1>Настани</h1>
				<div class="nastani-cel">
				<?php foreach ($events as $key => $event){ 
					if($key == 0){
						$display = 'block';
					}
					else {
						$display = 'none';
					}
					?>
					<div style="display: <?= $display ?>">
						<div class="nastani-date">
							<p><?=date('d.m',strtotime($event['date']))?></p>
						</div>
						<div class="nastani-nastan">
							<div class="nastani-nastan-cel">
								<p class="nastan-naslov"><?=$event['name']?></p>
								<p class="nastan-description"><?=$event['description']?></p>
								<div class="nastan-location">
									<img src="media/images/location.png">
									<p class="nastan-location-text"><?=$event['address']?></p>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					<div class="nastani-strelka-gore">
						<img src="media/images/up-arrow.png">
					</div>
					<div class="nastani-strelka-dole">
						<img src="media/images/down-arrow.png">
					</div>
				</div>
			</div>
		</div>
		<div class="oop">
			<div class="oop-sodrzhina">
				<div class="oop-naslovi">
					<h1 class="oop-naslov">Општествено Одговорни Практики</h1>
					<h2 class="oop-naslov-lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vehicula ante et enim tincidunt, sit amet convallis lacus egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus.</h2>
				</div>
				<div class="oop-proekti">
					<?php foreach ($oops as $key => $oop){
						$class = '';
						if($key == 1){
							$class = 'class="oop2"';
						} else if($key == 3) {
							$class = 'class="oop4"';
						}
					 ?>
						<img <?= $class ?> src="<?=$oop['photo']?>">
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="map">
			
		</div>
	</div>
</body>
</html>
