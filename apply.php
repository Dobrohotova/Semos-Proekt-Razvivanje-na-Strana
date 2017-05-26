<!DOCTYPE html>
<html>
<head>
	<link rel= "Stylesheet" href="styles/apply.css">
	<meta charset="utf-8">
	<title>Apliciraj</title>
</head>
<body>
	<?php include 'header_all.html'; ?>
	<div class="container">
		<div class= "picholder">
			<div class= "pic"><img src="media/images/toppic.png" width="100%"></div>
		</div>
		<?php include('navigation_graphic.php'); ?>
		<div class="content">
			<div class="text">
				<div class="textholder">
					<h1>Аплицирај</h1>
				</div>
				<div class= "paragraf"><p class="textpar">Ве молиме внимателно и прецизно да го пополните формуларот. Кога ќе завршите со вметнување на податоците, притиснете на копчето “Потврди“ кое се наоѓа на дното на страната. По приемот на Вашите информации ќе Ве контактираме и ќе се договориме околу терминот.</p></div>
			</div>
			<div class= "content-two">
				<form action="apply.php?academy=<?=$_GET['academy']?>&afterclick=true" method="post">
				<div class="inputs">
					<div class>
						<p class="inputfields">Име</p>
						<input type="text" name="ime">
					</div>
				</div>
				<div class="inputs">
					<div class>
						<p class="inputfields">Презиме</p>
						<input type="text" name="prezime">
					</div>
				</div>
				<div class="inputs">
					<div class>
						<p class="inputfields">Телефон</p>
						<input type="number" name="telefon">
					</div>
				</div>
				<div class="inputs">
					<div class>
						<p class="inputfields">E-mail</p>
						<input type="email" name="email">
					</div>
				</div>
				<div class="kopce"><button class= "potvrdi" type="submit">потврди</button></div>
				</form>
				<div class="bottompic">
					<img src= "media/images/picture.png" width="100%">
				</div>
			</div>
			<div class="mapholder">
				<div class= "map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.548811988407!2d21.449518215513486!3d41.98849597921361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135415bfdd371667%3A0xccd976215f845b88!2sSemos+Computer+Education+Center!5e0!3m2!1sen!2smk!4v1491147640805" width="100%" height="900" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php
	include 'general.php';
	
	if (isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['telefon']) && isset($_POST['email'])) {
		$ime = trim(strip_tags($_POST['ime']));
		$prezime = trim(strip_tags($_POST['prezime']));
		$telefon = trim(strip_tags($_POST['telefon']));
		$email = trim(strip_tags($_POST['email']));
		$valemail = filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	if (strlen($ime) > 0 && strlen($prezime) > 0 && strlen($telefon) > 0 && strlen($email) > 0 && $valemail == true) {
		$sql = "INSERT INTO applicants (first_name, last_name, phone_number, email, academy, aplication_date) VALUES (:first_name, :last_name, :phone_number, :email, :academy, :aplication_date)";
		$query = $db->prepare($sql);
		$query->bindValue(':first_name', $ime);
		$query->bindValue(':last_name', $prezime);
		$query->bindValue(':phone_number', $telefon);
		$query->bindValue(':email', $email);
		$query->bindValue(':academy', $_GET['academy']);
		$query->bindValue(':aplication_date', date("Y-m-d h:i:sa"));
		$query->execute();
	}


	?>