<?php 
	include '../../bd.php';

	$pdo->query("DELETE FROM type_election WHERE ID='".$_REQUEST['id']."'");
?>