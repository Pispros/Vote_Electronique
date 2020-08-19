<?php 
	include '../../bd.php';

	$pdo->query("UPDATE type_election SET status=1 WHERE ID='".$_REQUEST['id']."'");
?>