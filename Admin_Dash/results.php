<?php 
	include '../bd.php';

	$query = $pdo->query("SELECT * FROM type_election WHERE status=1");
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
			border-color: #aed581;
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
		tr td:nth-child(1)
		{
			padding-top: 35px;
		}
		tr td:nth-child(2)
		{
			padding-top: 35px;
		}
		tr td:nth-child(4)
		{
			padding-top: 35px;
		}
		tr td:nth-child(5)
		{
			padding-top: 35px;
		}
		
	</style>
</head>
<body style="height: 100vh;">
		<div class="row d-flex justify-content-around align-items-center" style="height: 100%;">
		  <div class="col-auto">
		  		<div class="rounded-circle hoverB" data-toggle="modal" data-target="#basicExampleModal2" style="width: 150px;height: 150px;" title="Résultats Des Elections">
      				 <i class="fas fa-bullhorn fa-3x" style="color: rgba(3, 169, 244, 0.7);"></i>
      			</div>
		  </div>
		</div>
		<!-- Modal Options-->
<div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header aqua-gradient">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-weight: bolder;"><i class="fas fa-scroll"></i>&nbsp;Liste des Elections Actives</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
			 								<th class="th-lg">OPTION</th>
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
			 									<tr data-toggle="modal" onclick="Publish(this.id);" data-target="#basicExampleModal2" id="<?php echo $row[0]; ?>" style="cursor: pointer;">
			 										<td>
			 											<?php 
			 												echo ++$inc;
			 											?>
			 										</td>
			 										<td>
			 											<?php echo $row[1]; ?>
			 										</td>
			 										<td>
			 											<button type="button" class="btn aqua-gradient" disabled="" >
			 												<?php 
			 													if ($row[7]==1) 
			 														echo "Public !";
			 													else
			 														echo "Nom Public";
			 												?>
			 												</button>
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
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info rounded-pill" data-dismiss="modal">FERMER</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
			function Publish(id) 
			{
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) 
				    {
				       Swal.fire({
						  icon: 'success',
						  title: 'Les résultats de cette elections sont désormais visibles',
						  confirmButtonText:'<i class="far fa-thumbs-up fa-2x"></i>'
						}).then((response)=>
						{
							if (response.isConfirmed || response.isDismissed) 
							{
								location.reload();
							}
						});
				    }
				};
				xhttp.open("GET", "./options/Publish.php?id="+id, true);
				xhttp.send();
			}
</script>
</body>
</html>