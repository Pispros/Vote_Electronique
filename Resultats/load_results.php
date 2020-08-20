<?php 
	include '../bd.php';

	$query = $pdo->query("SELECT partis FROM type_election WHERE ID='".$_REQUEST['id']."'");
	$res   = $query->fetchAll(PDO::FETCH_NUM);


	$partis= explode(",", $res[0][0]);

	$query= $pdo->query("SELECT COUNT(*) FROM vote_count");
	$res  = $query->fetchAll(PDO::FETCH_NUM);

	$nbreT_votes = $res[0][0];

	for ($i=0; $i <count($partis)-1 ; $i++) 
	{ 
		$query = $pdo->query("SELECT logo_parti FROM parti_politique WHERE ID='".$partis[$i]."'");
		$logo  = $query->fetchAll(PDO::FETCH_NUM);

		$query= $pdo->query("SELECT COUNT(*) FROM vote_count WHERE ID_parti='".$partis[$i]."'");
		$res  = $query->fetchAll(PDO::FETCH_NUM);

		$nbre_votes = $res[0][0];
?>
<div class="row d-flex justify-content-center">
	 <div class="col-8">
	 		<div style="display: flex;justify-content: flex-start;flex-flow: column wrap;margin-bottom: 75px;border:solid;border-width: 1px;padding: 25px;border-radius: 15px;height: 400px;border-color: rgba(76, 175, 80, 0.7);">
	 			<div style="margin-bottom: 35px;width: 100%;display: flex;justify-content: center;align-self: flex-start;">
	 			  <img class="rounded-circle" src="../assets/img/partis/<?php echo $logo[0][0]; ?>" style="width: 160px;height: 160px;">
	 			</div>
	 			<div>
	 					<div class="progress">
						  <div class="progress-bar" role="progressbar" style="width: <?php echo ($nbre_votes*100/$nbreT_votes).'%'; ?>;background-color: rgba(76, 175, 80, 0.7);" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
						</div> 	
	 			</div>
	 			<div style="display: flex;justify-content: center;">
	 					<div style="height: 55px;background-color: #ffb300;text-align: center;margin-top: 50px;display: flex;justify-content: center;align-items: center;padding: 5px;">
	 						<div style="font-weight: bold;">
	 								<?php echo ($nbre_votes*100/$nbreT_votes).'%'; ?>
	 						</div>
	 					</div>
	 			</div>
	 		</div>
	 </div>							
</div>
<?php 
	}
?>