<?php 

include('general.php');

$sql_projects = 'select * from ind_projects';
$query_projects = $db->query($sql_projects);
$projects = $query_projects->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Проекти-Графички</title>
	<link rel="stylesheet" type="text/css" href="styles/proekti.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700" rel="stylesheet">
</head>
<body>

<div class="main-wrapper">
	<div class="header">
		<?php include('header_all.html'); ?>
	</div>
		<div class="img-header">		
			<img src="media/images/slika.png">
		</div>
		
	<div class="flaer">	
		<div class="pro-head">
			<div class="pro">
				<h1 class="proekti">Проекти</h1>
			</div>
			<div class="paragraf">	
				<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce volutpat venenatis metus, a pulvinar orci viverra a. Phasellus in pharetra arcu. Phasellus id eros bibendum, eleifend felis vitae, iaculis lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
			</div>
		</div>
	</div>
		<div class="generacija">
			<h1>Генерација</h1>
			<h1>2016/17</h1>
		</div>	
		<div class="poly">
			<div class="sliki">
			<?php foreach($projects as $key => $project) { ?>
				<?php if($key % 3 == 0) {?>
					<div class="red<?php echo floor($key / 3) + 1; ?>">
				<?php } ?>	
					<div class="holder<?php echo floor($key % 3); ?>">
						<img src="<?= $project['photo'] ?>" class="slika">
					</div> 
<!-- 						<div class="data-image">
							<div class="hover-div">
								<img src="media/images/icon-hover.png">
								<p class="grapho">Graphics, Photography</p>
							</div>
							</br>
							<p class="moodboard">Moodboard design </br>
							од Лара Маринковиќ </p>
							</br>
							<p class="samshing">Clients: Smashing Magazine</br>
								Date: November 15, 2014</br>
								Skills: Photoshop</p>
						</div> -->



<!-- 						<img src="media/images/grafichki3.png" class="slika">
					</div>
					
					<div class="holder2">
						<img src="media/images/grafichki7.png" class="slika">
					</div>
					
					<div class="holder3">
						<img src="media/images/grafichki6.png" class="slika">
					</div> -->
				<?php if($key % 3 == 2) {?>
					</div>
				<?php } ?>	
			<?php } ?>
				
<!-- 				<div class="red2">

					<div class="holder4">
						<img src="media/images/grafichki8.png" class="slika">
					</div>
					<div class="holder5">
						<img src="media/images/grafichki9.png" class="slika">
					</div>
					<div class="holder6">
						<img src="media/images/grafichki5.png" class="slika">
					</div> -->
<!-- 				<div> -->
			</div>
		</div>
	</div>
</div>
<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1246.8562107018788!2d21.45365542861367!3d41.988673240140024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xccd976215f845b88!2z0KHQtdC80L7RgSDQldC00YPQutCw0YbQuNGY0LA!5e0!3m2!1smk!2smk!4v1491299022890" width="100%" height="900" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>


</body>
</html>
