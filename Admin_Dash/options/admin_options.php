<?php
	include '../../bd.php'; 
	$op = ""              ;
	$ok = 0               ;
	$error_m = ""         ;
?>
<!DOCTYPE html>
<html>
<head>
	<title>OPERATION EN COURS ...</title>
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
	<link rel="stylesheet" type="text/css" href="./assets/css/all.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>
</head>
<body>
		<?php 
		try
		{
			if ($_REQUEST['action']=='new_parti') 
			{
				move_uploaded_file($_FILES['logo']['tmp_name'], '../../assets/img/partis/'.$_FILES['logo']['name']);
				$pdo->query("INSERT INTO parti_politique VALUES (0,'".$_POST['nom_p']."','".$_POST['nom_l']."','".$_POST['date']."','".$_FILES['logo']['name']."','".$_POST['devise']."','".$_POST['but']."')");
				//var_dump($_POST);
				//var_dump($_FILES);
				$op = "Nouveau Parti ajouté";
				$ok = 1;
			}
			if ($_REQUEST['action']=='new_circ') 
			{
				$pdo->query("INSERT INTO circonscription VALUES (0,'".$_POST['comm']."','".$_POST['circ']."','".$_POST['arr']."','".$_POST['depar']."','".$_POST['region']."','".$_POST['pays']."')");
				$op = "Nouvelle Circonscription ajoutée";	
				$ok = 1;
			}
			if ($_REQUEST['action']=='new_elec') 
			{
				
				$pdo->query("INSERT INTO type_election VALUES (0,'".$_POST['election']."','".$_POST['poste']."','".$_POST['dateO']."','".$_POST['dateF']."',0,'',0)");
				$op = "Nouvelle Election ajoutée";	
				$ok = 1;
			}
			if ($_REQUEST['action']=='conf_elec') 
			{
				$list = "";
				foreach ($_POST['selection'] as $id_parti) 
				{
					$list = $list.$id_parti.",";
				}
				$pdo->query("UPDATE type_election SET partis='".$list."' WHERE ID='".$_POST['choose_elec']."'");
				$op = "Liste des partis mise à jour";	
				$ok = 1;
			}
		}
			catch(Exception $e)
			{
				echo $e->getMessage();
		?>
				<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
				<script type="text/javascript">
						Swal.fire({
						  icon: 'error',
						  title: 'Oops une erreur est survenu. Vérifiez que toutes les données sont correctes ... Il n\'y a pas de doublons !',
						  confirmButtonText:'<i class="far fa-dizzy fa-2x"></i>',
						  confirmButtonColor:'#ff4444'
						}).then((response)=>
						{
							if (response.isConfirmed) 
							{
								window.location = sessionStorage.getItem('last_path');
							}
						});
				</script>
		<?php 
			}
			if ($ok==1) 
			{
		?>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript">
			Swal.fire({
				  icon: 'success',
				  title: '<?php echo $op; ?> avec succès',
				  confirmButtonText:'<i class="far fa-thumbs-up fa-2x"></i>'
				}).then((response)=>
				{
					if (response.isConfirmed) 
					{
						window.location = sessionStorage.getItem('last_path');
					}
				});
		</script>
		<?php 
			}
		?>
</body>
</html>