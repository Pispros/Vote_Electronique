<?php  
	include '../bd.php';

	if ($_REQUEST['type']=='admin') 
	{
		$query = $pdo->query("SELECT ID_personne,nom,prenom,ID FROM admin");
		$rows = $query->fetchAll(PDO::FETCH_NUM);	
	}
	
	if ($_REQUEST['type']=='user') 
	{
		$query = $pdo->query("SELECT ID_personne,nom,prenom,ID FROM usager_votant");
		$rows = $query->fetchAll(PDO::FETCH_NUM);
	}
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
		tr td:nth-child(1)
		{
			padding-top: 35px;
		}
		tr td:nth-child(2)
		{
			padding-top: 35px;
		}
		tr td:nth-child(3)
		{
			padding-top: 35px;
		}
	</style>
</head>
<body>
<div class="row d-flex justify-content-start">
 	<div class="col-auto">
 			<span style="font-size: 25px;color: #4db6ac;">Administration > Liste du Personnel </span>
 	</div>
</div>
<?php  
if (isset($_REQUEST['type'])) 
{
	if ($_REQUEST['type']=='admin') 
	{
?>
<div class="row d-flex justify-content-center">
 	<div class="col-auto">
 			<a href="newa.php"><button type="button" class="btn btn-outline-info rounded-pill">Nouvel Admin &nbsp;<i class="fas fa-user-plus"></i></button></a>
 	</div>
</div>
<?php 
	}
} 
?>
<br>
<div class="container">
<div class="row d-flex justify-content-center">
	<div class="col-10">
<table class="table table-hover table-responsive">
			 					<thead>
			 							<tr>
					        			  	<input class="form-control" id="search" type="text" placeholder="Rechercher dans la liste ...">
					        			</tr>
			 							<tr class="table-info"> 
			 								<th>#</th>
			 								<th width="50%">NOM</th>
			 								<th width="50%">PRENOM</th>
			 								<th width="50%">OPTIONS</th>
			 							</tr>
			 					</thead>
			 					<tbody id="myTable">
			 							<?php 
			 								foreach ($rows as $row) 
			 								{
			 									$inc = 0;
			 							?>
			 									<tr data-toggle="modal" onclick="Publish(this.id);" data-target="#basicExampleModal2" style="cursor: pointer;">
			 										<td>
			 											<?php 
			 												echo ++$inc;
			 											?>
			 										</td>
			 										<td>
			 											<?php echo $row[1]; ?>
			 										</td>
			 										<td>
			 											<?php echo $row[2]; ?>
			 										</td>
			 										<td>
			 											<button type="button" id_personne="<?php echo $row[0]; ?>" onclick="_Delete_User(this)" class="btn btn-outline-danger">SUPPRIMER</button>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
	$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

			function _Delete_User(arg) 
			{
				let xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) 
				    {
				       Swal.fire({
						  icon: 'success',
						  title: 'Suppression Effectué avec succès',
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
				xhttp.open("GET", "./options/del_user.php?id_p="+arg.getAttribute('id_personne'), true);
				xhttp.send();
			}
</script>
</body>
</html>
