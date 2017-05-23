<?php
include('general.php');
$sql = "select * from students";

$query = $db->query($sql);
$students = $query->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="STYLESHEET" href="styles/student-web.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<title>Student Web</title>
</head>
<body>
	<div class="container">
	<div class="header">
		<?php include('header_all.html'); ?>
	</div>
		<div class="pictxt">
			<div class= "pic"><img src="media/images/toppicture.png"></div>
			<div class="text">
				<h1 class= "tophead">Студенти</h1>
				<p class= "description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut mauris leo. Vestibulum ut erat elit. Integer sodales pharetra ullamcorper. Vivamus pulvinar semper magna in luctus. Vivamus volutpat ornare velit sit amet interdum.</p>
			</div>
		</div>
			<div class="fazla">
				<div class=generacija>
					<p style="font-size:24pt;">Генерација</p>
						<select name="generation">
							<option value="2017">2017</option>
							<option value="2017">2018</option>
							<option value="2017">2019</option>
						</select>
				</div>
			</div>
			<div class= "student-content">
				<div class= "student-hold">
				<?php foreach($students as $key=>$student){ 
					if($key % 3 == 0) { 
						echo '<div class= "row r'.(floor($key/3)+1).'">';
					}
						echo '<div class= "student s'.($key+1).'">';
						echo '<img src="'.$student['photo'].'">';
						echo '<h1>'.$student['first_name'].'<br/>'.$student['last_name'].'</h1>';
						echo '<div><button class= "kopce">Портфолио</button></div>';
						echo '</div>';
					if($key % 3 == 2) {
						echo '</div>';
					}
				} ?>
				</div>
			</div></div>
		<div class= "maphold">
			<div class= "map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.548811988407!2d21.449518215513486!3d41.98849597921361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135415bfdd371667%3A0xccd976215f845b88!2sSemos+Computer+Education+Center!5e0!3m2!1sen!2smk!4v1491147640805" width="100%" height="900" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</body>
</html>