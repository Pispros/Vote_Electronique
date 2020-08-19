<?php  
	include '../bd.php';

	$query = $pdo->query("SELECT * FROM parti_politique");
	$rows  = $query->fetchAll(PDO::FETCH_NUM);

	$query = $pdo->query("SELECT * FROM circonscription");
	$rowsc = $query->fetchAll(PDO::FETCH_NUM);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<style type="text/css">
		html,body
		{
			overflow-x: hidden;
			padding: 5px;
		}
		.intitule
		{
			font-size: 13px;
		}
		.intitule::after
		{
			content: '*';
		}
		.myI
		{
			border-color: #bdbdbd;
		}
		input
		{
			margin-bottom: 15px;
		}
	</style>
</head>
<body>

<div class="row d-flex justify-content-start">
 	<div class="col-auto">
 			<span style="font-size: 25px;color: #4db6ac;">Administration > Nouveau Candidat </span>
 	</div>
</div>
<div class="row d-flex justify-content-center">
 	<div class="col-auto">
 			<button type="button" class="btn btn-outline-info rounded-pill">Nouveau Candidat <i class="fas fa-user-plus"></i></button>
 	</div>
</div>
<br>
<form method="post" action="./options/admin_options.php?action=new_candidat" enctype="multipart/form-data" onsubmit="RecallPath();">
<input type="hidden" name="rolexxx" value="Admin">
<div class="row d-flex justify-content-around" id="personne">
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    CNI
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="cni" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Nom Père
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="nom_pere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Nom Mère
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="nom_mere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Profession Père
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="pro_pere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Profession Mère
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="pro_mere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Date Naissance
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" autocomplete="off" name="ddn" class="form-control myI date">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Lieu de Naissance
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="ldn" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Profession
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="profession" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Photo
	  			  </div>
	  			  <div class="col-12 d-flex justify-content-center">
	  			  	<div class="rounded-circle hoverB" style="width: 80px;height: 80px;padding-top: 5px;">
	  			  		<label for="photo"><img src="../assets/img/upload.png" style="width: 50px;height: 50px;border-radius: 50px;cursor: pointer;"></label>
	  			  	</div>
	  			  		<input id="photo" required="" type="file" name="photo" class="form-control myI" style="display: none;">
	  			  </div>
	  		</div>
	  </div>
	<!--
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Libellé Election
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" id="lib_elec" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	-->
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Mot de Passe
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="password" onkeyup="_VerifyP_2(this);" id="pwd" name="pwd" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	   <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Confirmation Mot de Passe
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" onkeyup="_VerifyP(this);" type="password" id="cpwd" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
</div>
<div class="row d-flex justify-content-around" id="personne">
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Parti Politique
	  			  </div>
	  			  <div class="col-12">
	  			  		<select class="browser-default custom-select myI" name="parti" id="parti">
						  <?php 
						  	foreach ($rows as $row) 
						  	{
						  ?>
						  		<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
						  <?php 
						  	}
						  ?>
						</select>
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Choisir votre Circonscription
	  			  </div>
	  			   <div class="col-12">
	  			  		<select class="browser-default custom-select myI" name="circ">
						  <?php 
						  	foreach ($rowsc as $row) 
						  	{
						  ?>
						  		<option value="<?php echo $row[0]; ?>"><?php echo $row[2].' ---> '.$row[1]; ?></option>
						  <?php 
						  	}
						  ?>
						</select>
	  			  </div>
	  		</div>
	  </div>
	<!--
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Profession de Foi
	  			  </div>
	  			  <div class="col-12">
	  			  		<textarea required="" rows="5" type="text" name="foi" class="form-control myI"></textarea>
	  			  </div>
	  		</div>
	  </div>
	-->
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Date de Candidature
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="date_c" class="form-control myI date">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Nom
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="nom" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Prénom
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="prenom" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
</div>
<div class="row d-flex justify-content-center">
	<div class="col-auto">
		<button type="submit" disabled="" id="go" class="btn aqua-gradient"><i class="fas fa-plus-circle"></i>&nbsp;Ajouter</button>
	</div>
</div>
</form>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script type="text/javascript" src="../assets/js/all.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	if (sessionStorage.getItem('last_path')) 
	{
		sessionStorage.removeItem('last_path');
	}

	function RecallPath() 
	{
		sessionStorage.setItem('last_path',window.location);
	}
	$(function() 
            {
                $(".date").datepicker(
                {
                    dateFormat: 'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "1900:2030"
                });
            });
</script>
</body>
</html>
