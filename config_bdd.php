<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sharkzilla";
$bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// set the PDO error mode to exception
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
