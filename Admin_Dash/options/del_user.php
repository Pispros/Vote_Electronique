<?php 
	include '../../bd.php';

	$pdo->query("DELETE FROM personne WHERE ID='".$_REQUEST['id_p']."'");
?>