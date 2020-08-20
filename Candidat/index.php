<?php 
	session_start() ;
	include '../bd.php';
	include 'check.php';

	$query = $pdo->query("SELECT photo FROM personne WHERE ID='".$_SESSION['idxxx_p']."'");
	$row   = $query->fetchAll(PDO::FETCH_NUM);

	$query = $pdo->query("SELECT * FROM type_election WHERE status=1");
	$rowsv = $query->fetchAll(PDO::FETCH_NUM);

?>
<!DOCTYPE html>
<html>
<head>
	<title>ENREGISTRER VOTRE VOTE OU REGARDEZ LES RESULTATS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Vote_Electronique">
	<meta name="author" content="ninjamer223">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@0,700;1,300&family=Piedra&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:ital,wght@1,300&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../assets/css/all.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</head>
<body class="bg-light">
		<?php include 'navbar.php'; ?>
		<br>
	<div class="container">
		<input type="hidden" id="myID" value="<?php echo $_SESSION['idxxx_p']; ?>">
		<div class="row">
			<?php 
				foreach ($rowsv as $r) 
				{
					//$id_p = $r[0];
					//$partis = explode(',', $r[6]);
			?>
					<div class="col-12 col-md-5 col-lg-4">
						<div class="ninjamer_vote_card_component" id="<?php echo $r[0]; ?>" partis="<?php echo $r[6]; ?>" onclick="sessionStorage.setItem('elec_id',this.id);_Load_Parti(this.getAttribute('partis'));" data-toggle="modal" data-target="#basicExampleModal">
						  <div class="ninjamer_vote_card">
								<div class="ninjamer_vote_card_header">
									  <i class="fas fa-user-tie"></i>&nbsp;&nbsp;<?php echo $r[2]; ?>
								</div>
								<div class="ninjamer_vote_card_body">
									<p>
									  <i class="fas fa-person-booth"></i>&nbsp;Election : <?php echo $r[1]; ?>
									</p>
									<p>
										<i class="fas fa-play"></i>&nbsp;<?php echo $r[3]; ?>
									</p>
									<p>
										<i class="fas fa-power-off"></i>&nbsp;<?php echo $r[4]; ?>
									</p>
									<div>
										<div><i class="fas fa-poll"></i>&nbsp;Résultats</div>&nbsp;&nbsp;<div class="rounded-circle <?php if($r[7]==1) echo 'bg-success';else echo 'bg-danger'; ?>" style="width: 15px;height: 15px;"></div>
									</div>
								</div>
								<div class="ninjamer_vote_card_bottom">
									   <span style="position: relative;top: 2px;">Etat</span>&nbsp;&nbsp;<i class="fas fa-signal"></i>&nbsp;&nbsp;<div class="rounded-circle bg-success" style="width: 15px;height: 15px;"></div>

								</div>
						  </div>
						  <div class="ninjamer_vote_card_deco">
						  		<div class="ninjamer_vote_card_deco_inner">
						  			
						  		</div>
						  </div>
						</div>
					</div>
			<?php 
				}
			?>
		</div>
	</div>
		<script type="text/javascript" src="../assets/js/all.js"></script>
		<script type="text/javascript">
				$(function() 
				{
					$('.ninjamer_vote_card').mouseover(function() 
					{
						$('.ninjamer_vote_card_deco').removeClass('d-fl');
						$('.ninjamer_vote_card_deco').addClass('d-none');
					});
					$('.ninjamer_vote_card').mouseout(function() 
					{
						$('.ninjamer_vote_card_deco').removeClass('d-none');
						$('.ninjamer_vote_card_deco').addClass('d-fl');
					})
				});
		</script>
	
<!-- Choose Parti Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header peach-gradient">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-weight: bolder;"><i class="far fa-question-circle"></i>&nbsp;&nbsp;A QUI DONNER VOTRE VOTE&nbsp;&nbsp;<i class="far fa-question-circle"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalB">
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn peach-gradient" data-dismiss="modal">FERMER</button>
      </div>
    </div>
  </div>
</div>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">


				function _Load_Parti(arg) 
				{
					let xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status == 200) 
					    {
					        document.getElementById("modalB").innerHTML = xhttp.responseText;
					    }
					};
					xhttp.open("GET", "load_parti.php?partis="+arg, true);
					xhttp.send();
				}

				function Vote(arg,elec) 
				{
					let xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status == 200) 
					    {
					      Swal.fire({
						  icon: 'success',
						  title: 'Félicitation Vous avez voté !',
						  confirmButtonText:'<i class="fas fa-check-circle fa-2x" style="color:#388e3c;"></i>',
						  confirmButtonColor:'white',
						   timer:10000
							}).then((response)=>
							{
								if (response.isConfirmed || response.isDismissed) 
								{
									location.reload();
								}
							});  
					    }
					};
					xhttp.open("GET", "vote.php?id_p="+document.getElementById('myID').value+"&id_parti="+arg+'&election='+elec, true);
					xhttp.send();
				}

				function ShowPro(arg) 
				{
					Swal.fire({
						  icon: 'info',
						  title: 'Profession de Foi',
						  text:document.getElementById(arg).value
					});  
				}
		</script>
</body>
</html>