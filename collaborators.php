<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles/about.css">
	<title></title>
</head>
<body>
<div class="delovni_sorabotnici">
		<h1>Деловни Соработници</h1>
		<?php
		include 'general.php';
		$sql = 'select * from collaborators';
		$query = $db->query($sql);
		$collaborators = $query->fetchAll(PDO::FETCH_ASSOC);
		foreach($collaborators as $key => $coll) {
				echo '<img src="'.$coll['photo'].'">';
			}
		?>
	</div>

</body>
</html>