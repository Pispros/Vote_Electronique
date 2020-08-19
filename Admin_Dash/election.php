<?php 
	include '../bd.php';

	$query = $pdo->query("SELECT * FROM type_election");
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
		tr td,th
		{
			text-align: center;
			font-weight: bolder;
		}
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
		<div class="container-fluid">
			<div class="row d-flex justify-content-start">
			 	<div class="col-auto">
			 			<span style="font-size: 25px;color: #4db6ac;">Administration > Gestion Elections </span>
			 	</div>
			</div>
			<br>
			<div class="row d-flex justify-content-around">
				<div class="col-auto">
					<button type="button" class="btn btn-outline-info rounded-pill" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-plus"></i>&nbsp;Configurer une nouvelle Election</button>
				</div>
				<div class="col-auto">
					<a href="conf_election.php"><button type="button" class="btn btn-outline-secondary rounded-pill" id="ConfModal"><i class="fas fa-cog"></i>&nbsp;Configurer les partis politiques d'une Election</button></a>
				</div>
			</div>
			<br><br>
			<div class="row d-flex justify-content-center">
			 	<div class="col-auto">
			 			<table class="table table-hover table-responsive" style="">
			 					<thead>
			 							<tr>
					        			  	<input class="form-control" id="myInput" type="text" placeholder="Rechercher dans la liste des elections ...">
					        			</tr>
			 							<tr class="table-info"> 
			 								<th>#</th>
			 								<th class="th-lg">TYPE</th>
			 								<th class="th-lg">POSTE</th>
			 								<th class="th-lg">OUVERTURE</th>
			 								<th class="th-lg">FERMETURE</th>
			 							</tr>
			 					</thead>
			 					<tbody id="myTable">
			 							<?php 
			 								foreach ($rows as $row) 
			 								{
			 									$inc = 0;
			 							?>
			 									<tr data-toggle="modal" data-target="#basicExampleModal2" id="<?php echo $row[0]; ?>" onclick="_LoadId(this.id);" style="cursor: pointer;">
			 										<td>
			 											<?php 
			 												echo ++$inc;
			 												if ($row[5]==1) 
			 												{
			 											?>
			 													<i class="fas fa-check-circle" style="color: green;"></i>
			 											<?php 
			 												} 
			 											?>
			 										</td>
			 										<td>
			 											<?php echo $row[1]; ?>
			 										</td>
			 										<td>
			 											<?php echo $row[2]; ?>
			 										</td>
			 										<td>
			 											<?php echo $row[3]; ?>
			 										</td>
			 										<td>
			 											<?php echo $row[4]; ?>
			 										</td>
			 									</tr>
			 							<?php 
			 								}
			 							?>
			 					</tbody>
			 			</table>
			 	</div>
			</div>
		</div>
<!-- Modal New-->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header aqua-gradient">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-weight: bolder;"><i class="fas fa-plus"></i>&nbsp;Nouvelle Election</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form method="post" action="./options/admin_options.php?action=new_elec" enctype="multipart/form-data" onsubmit="RecallPath();">
		<div class="row d-flex justify-content-around">
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Type Election
		  			  </div>
		  			  <div class="col-12">
		  			  	<select class="browser-default custom-select myI" name="election" id="elec" onchange="CPoste(this.value);">
						  <option selected>Choisir le type</option>
						  <option value="Présidentielles">Élections présidentielles</option>
						  <option value="Législatives">Élections législatives</option>
						</select>
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Poste Pourvu
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" type="text" name="poste" class="form-control myI" id="poste">
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Date Ouverture
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" autocomplete="off" type="text" name="dateO" class="form-control myI date">
		  			  </div>
		  		</div>
		  </div>
		  <div class="col-12 col-md-5">
		  		<div class="row">
		  			  <div class="col-12 intitule">
		  			  	   Date Fermetue
		  			  </div>
		  			  <div class="col-12">
		  			  		<input required="" autocomplete="off" type="text" name="dateF" class="form-control myI date">
		  			  </div>
		  		</div>
		  </div>
		  
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn aqua-gradient" id="go" disabled="">ENREGISTRER</button>
        <button type="button" class="btn btn-outline-info rounded-pill" data-dismiss="modal">FERMER</button>
</form>
      </div>
    </div>
  </div>
</div>
<!-- Modal Options-->
<div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header aqua-gradient">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-weight: bolder;"><i class="fas fa-cog"></i>&nbsp;OPTIONS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      		<div class="row d-flex justify-content-center" style="margin-top: 35px;margin-bottom: 35px;">
      			<div class="col-auto">
      				<h3>QUE VOULEZ VOUS FAIRE ?</h3>
      			</div>
      		</div>
      <div class="modal-footer">
        <button type="button" onclick="Activate();" class="btn btn-outline-success rounded-pill">Activer</button>
        <button type="button" onclick="Delete();" class="btn btn-outline-danger rounded-pill">Supprimer</button>
        <button type="button" class="btn btn-outline-info rounded-pill" data-dismiss="modal">FERMER</button>
      </div>
    </div>
  </div>
</div>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">

			function _LoadId(arg) 
			{
				sessionStorage.setItem('id_option',arg);
			}

			function Activate() 
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) 
				    {
				       Swal.fire({
						  icon: 'success',
						  title: 'Election activée avec succès',
						  confirmButtonText:'<i class="far fa-thumbs-up fa-2x"></i>'
						}).then((response)=>
						{
							if (response.isConfirmed || response.isDismissed) 
							{
								sessionStorage.removeItem('id_option');
								location.reload();
							}
						});
				    }
				};
				xhttp.open("GET", "./options/activate.php?id="+sessionStorage.getItem('id_option'), true);
				xhttp.send();
			}

			function Delete() 
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) 
				    {
				       Swal.fire({
						  icon: 'success',
						  title: 'Suppression effectuée avec succès',
						  confirmButtonText:'<i class="far fa-thumbs-up fa-2x"></i>'
						}).then((response)=>
						{
							if (response.isConfirmed || response.isDismissed) 
							{
								sessionStorage.removeItem('id_option');
								location.reload();
							}
						});
				    }
				};
				xhttp.open("GET", "./options/delete.php?id="+sessionStorage.getItem('id_option'), true);
				xhttp.send();
			}

			window.addEventListener('mousemove',function() 
			{
				if (document.getElementById('elec').value=='Choisir le type') 
				{
					document.getElementById('go').disabled = true;
				}
				else
				{
					document.getElementById('go').disabled = false;
				}
			})

			if (sessionStorage.getItem('last_path')) 
			{
				sessionStorage.removeItem('last_path');
			}

			function CPoste(arg) 
			{
				if (arg === 'Présidentielles') 
				{	
					document.getElementById('poste').value = "Présidence de la République";
				}
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

			$(document).ready(function(){
			  $("#myInput").on("keyup", function() {
			    var value = $(this).val().toLowerCase();
			    $("#myTable tr").filter(function() {
			      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			    });
			  });
			});
		</script>
</body>
</html>