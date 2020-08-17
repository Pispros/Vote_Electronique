<?php 
	$pdo = new PDO("mysql:host=localhost;dbname=vote_electronique;","root","passer");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)         ;
?>