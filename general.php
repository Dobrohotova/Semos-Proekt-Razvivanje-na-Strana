<?php
// Osnovna konfiguracija za konekcija do baza
$config = 'mysql:host=127.0.0.1;dbname=sa_site';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);

// Setiranje na enkoding pri pristap do baza, za da se ovozmozi citanje na kirilica
$sql = "SET NAMES UTF8";
$query = $db->query($sql);



