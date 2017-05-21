<?php
$config = 'mysql:host=127.0.0.1;dbname=sa_site';
$username = 'root';
$password = '';
$db = new PDO($config, $username, $password);
$sql = "select * from professors";
$query = $db->query($sql);
$professors = $query->fetchAll(PDO::FETCH_ASSOC);
print_r($professors);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/teachers.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<title>Teachers Page</title>
</head>
<body>
<header></header>
<div class="main-container">
	<div class="mainimg-container">
		<div class="mainimg-holder">
			<img src="media/images/mainteacher.png">
		</div>
	</div>
	<div class="profesoritext-container">
		<div class="profesoritext-holder">
			<h1>Професори</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</div>

	<div class="profesori-container">
		<div class="profesori-holder">
		<?php foreach($professors as $key => $prof) { ?>
	<div class="profrow<?php echo floor($key/3) + 1; ?>"></div>
	<?php } ?>

		<!-- <div class="profrow">
			<div class="p">
				<img src="media/images/professors/miro.png">
				<div class="p-box">
					<h2>Мирослав Клампфер</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>?
				</div>
			<div class="p">
				<img src="media/images/professors/dimitarA.png">
				<div class="p-box">
					<h2>Димитар Атанасов</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/andreja.png">
				<div class="p-box">
					<h2>Андреја Јарчевски</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/sensei.png">
				<div class="p-box">
					<h2>Бојан Гавровски</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>	
			</div>
			<div class="profrow">
				<div class="p">
				<img src="media/images/professors/druzhe.png">
				<div class="p-box">
					<h2>Александар Пешевски</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
				</div>
			<div class="p">
				<img src="media/images/professors/elena.png">
				<div class="p-box">
					<h2>Елена Ѓорѓиевска</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/dimitarJ.png">
				<div class="p-box">
					<h2>Димитар Јовевски</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/jovica.png">
				<div class="p-box">
					<h2>Јовица Јовановски</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="profrow">
				<div class="p">
				<img src="media/images/professors/lence.png">
				<div class="p-box">
					<h2>Ленче Николовска</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
				</div>
			<div class="p">
				<img src="media/images/professors/ivana.png">
				<div class="p-box">
					<h2>Ивана Шешиќ</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/jovana.png">
				<div class="p-box">
					<h2>Јована Тофиловска</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/marija.png">
				<div class="p-box">
					<h2>Марија Стаматовска</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			</div>
			<div class="profrow">
				<div class="p">
				<img src="media/images/professors/boban.png">
				<div class="p-box">
					<h2>Бобан Марек</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
				</div>
			<div class="p">
				<img src="media/images/professors/ivan.png">
				<div class="p-box">
					<h2>Иван Миќиќ</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/ivanka.png">
				<div class="p-box">
					<h2>Иванка Каленбер</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>
			</div>
			<div class="p">
				<img src="media/images/professors/gorjan.png">
				<div class="p-box">
					<h2>Горјан Илиевски</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus auctor ipsum. Aenean bibendum felis a auctor pulvinar. Curabitur elementum pretium libero quis sodales. Sed et elit ligula.</p>
				</div>*/ -->
			</div>
			</div>
		</div>
	</div>
</div>
<div class="map-holder">
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.5488119884103!2d21.449518215103772!3d41.98849597921354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135415bfdd371667%3A0xccd976215f845b88!2sSemos+Computer+Education+Center!5e0!3m2!1sen!2smk!4v1491440723620" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
</body>
</html>




