<?php 
	session_start();
	include '../bd.php';

	$inc = 1000;
	$partis = explode(',', $_REQUEST['partis']);
	for ($i=0; $i <count($partis)-1 ; $i++) 
	{ 
		$query = $pdo->query("SELECT * FROM parti_politique WHERE ID='".$partis[$i]."' ");
		$row   = $query->fetchAll(PDO::FETCH_NUM);

		$query = $pdo->query("SELECT * FROM vote_count WHERE ID_personne='".$_SESSION['idxxx_p']."'");
		$nrow  = $query->rowCount();
?>
<div class="row d-flex justify-content-center">
	<div class="col-8">
						<input type="hidden" id="<?php echo $inc; ?>" value="<?php echo $row[0][7]; ?>">
						<div class="ninjamer_vote_card_2_component" style="margin-bottom: 30px;">
						  <div class="ninjamer_vote_card_2">
								<div class="ninjamer_vote_card_2_header">
									  <img src="../assets/img/partis/<?php echo $row[0][4]; ?>" style="width: 60px;height: 60px;border-radius: 50px;display: inline;">&nbsp;<?php echo $row[0][1]; ?>
								</div>
								<div class="ninjamer_vote_card_2_body" title="Visualiser la profession de foi" style="height: 180px;" onclick="ShowPro('<?php echo $inc++; ?>')">
									<p>
										Devise : <?php echo $row[0][5]; ?>
									</p>
									<p>
										But : <?php echo $row[0][6]; ?> 
									</p>
									<p>
										 <i class="fas fa-user-tie"></i>&nbsp;Leader&nbsp;:&nbsp;<?php echo $row[0][2]; ?>
									</p>
								</div>
								<div class="ninjamer_vote_card_2_bottom" style="height: 50px;" id="<?php echo $partis[$i]; ?>">
									   <button <?php if ($nrow>0) echo "disabled"; ?> type="button" onclick="Vote(this.parentElement.id,sessionStorage.getItem('elec_id'));" class="btn peach-gradient">VOTER</button>
								</div>
						  </div>
						</div>
	</div>
</div>
<?php 
	}
?>