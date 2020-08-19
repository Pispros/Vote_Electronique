<?php 
	include '../bd.php';

	$query = $pdo->query("SELECT * FROM circonscription");
	$rows  = $query->fetchAll(PDO::FETCH_NUM);
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
		tr td,th
		{
			text-align: center;
			font-weight: bolder;
		}
	</style>
</head>
<body>
		<div class="row d-flex justify-content-start">
			 <div class="col-auto">
			 		<span style="font-size: 25px;color: #4db6ac;">Administration > Circonscriptions </span>
			 </div>
		</div>
		<div class="row d-flex justify-content-center">
			 <div class="col-auto">
			 		<button type="button" data-toggle="modal" data-target="#basicExampleModal" title="Lister Les Circonscription" class="btn btn-outline-info"><i class="fas fa-clipboard-list fa-3x"></i>&nbsp;</button>
			 </div>
		</div>
		<br><br>
<form method="post" action="./options/admin_options.php?action=new_circ" enctype="multipart/form-data" onsubmit="RecallPath();">
		<div class="row d-flex justify-content-around">
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Commune
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" type="text" name="comm" class="form-control myI">
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Libellé Circonscription
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" type="text" name="circ" class="form-control myI">
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Arrondissement
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" type="text" name="arr" class="form-control myI">
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Département
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" type="text" name="depar" class="form-control myI">
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Région
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" type="text" name="region" class="form-control myI">
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Pays
	  			  </div>
	  			  <div class="col-12">
		  			  		<input required="" type="text" name="pays" class="form-control myI">
		  		  </div>
	  		</div>
		  </div>
		</div>
		<br>
		<div class="row d-flex justify-content-center">
			 <div class="col-auto">
			 		<button type="submit" title="Enregistrer" class="btn btn-outline-info rounded-pill"><i class="far fa-paper-plane fa-2x"></i></i>&nbsp;</button>
			 </div>
		</div>
</form>
<!-- Modal List-->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header aqua-gradient">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-weight: bolder;"><i class="fas fa-scroll"></i>&nbsp;Liste des Circonscriptions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        	<table class="table table-hover table-responsive">
        			<tr>
        				<th class="">Commune</th>
        				<th class="th-lg">Circonscription</th>
        				<th class="th-lg">Arrondissement</th>
        				<th class="">Département</th>
        				<th class="th-lg">Région</th>
        				<th class="th-lg">Pays</th>
        			</tr>
        			<?php 
        				foreach ($rows as $r) 
        				{
        			?>
        					<tr>
        						<td style="padding-top: 30px;">
        							<?php echo $r[1]; ?>
        						</td>
        						<td style="padding-top: 30px;">
        							<?php echo $r[2]; ?>
        						</td>
        						<td style="padding-top: 30px;">
        							<?php echo $r[3]; ?>
        						</td>
        						<td style="padding-top: 30px;">
        							<?php echo $r[4]; ?>
        						</td>
        						<td style="padding-top: 30px;">
        							<?php echo $r[5]; ?>
        						</td>
        						<td style="padding-top: 30px;">
        							<?php echo $r[6]; ?>
        						</td>
        					</tr>
        			<?php 
        				}
        			?>
        	</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn aqua-gradient" data-dismiss="modal">FERMER</button>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
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