<?php 
	session_start() ;
	include '../bd.php';
	include 'check.php';

	$query = $pdo->query("SELECT photo FROM personne WHERE ID='".$_SESSION['idxxx_p']."'");
	$row   = $query->fetchAll(PDO::FETCH_NUM);
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
		<br>
	<div class="container">
			<div class="row d-flex justify-content-center">
			  <div class="col-8">
		<form method="post" action="professionfoi.php?new=yes">
			  		<div class="row">
			  			  <div class="col-12 intitule">
			  			  	    Rédigez votre profession de foi*
			  			  </div>
			  			  <div class="col-12">
			  			  		<textarea class="form-control" rows="15" name="pro"></textarea>
			  			  </div>
			  		</div>
			  </div>
			</div>
			<br>
			<div class="row d-flex justify-content-center">
				<div class="col-auto">
						<button type="submit" class="btn aqua-gradient"><i class="fas fa-chevron-circle-right"></i>&nbsp;ENVOYER</button>
				</div>
			</div>
		</form>
		<?php 
			if (isset($_REQUEST['new'])) 
			{
				if ($_REQUEST['new']=='yes') 
				{
					$pdo->query("UPDATE candidat SET profession_foi='".$_REQUEST['pro']."' WHERE ID_personne='".$_SESSION['idxxx_p']."'");

					$query = $pdo->query("SELECT parti FROM candidat WHERE ID_personne='".$_SESSION['idxxx_p']."'");
					$parti = $query->fetchAll(PDO::FETCH_NUM);

					$pdo->query("UPDATE parti_politique SET profession_foi='".$_REQUEST['pro']."' WHERE ID='".$parti[0][0]."'");
		?>
					<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
					<script type="text/javascript">
							Swal.fire({
									  icon: 'success',
									  title: 'Profession de foi mise à jour',
									  confirmButtonText:'<i class="far fa-thumbs-up fa-2x"></i>'
									}).then((response)=>
									{
										if (response.isConfirmed || response.isDismissed) 
										{
											window.location = './';
										}
									});
					</script>
		<?php  
				}
			}

		?>
	</div>
</body>
</html>