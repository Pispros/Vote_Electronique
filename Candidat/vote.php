<?php 
	include '../bd.php';

	$pdo->query("INSERT INTO vote_count VALUES ('".$_REQUEST['id_p']."','".$_REQUEST['id_parti']."','".$_REQUEST['election']."')");
?>