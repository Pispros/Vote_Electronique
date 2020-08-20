<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ACCEUIL</title>
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
	<style type="text/css">
		@media(min-width: 992px)
		{
			html,body
			{
				overflow: hidden;
			}
			body
			{
				background-image: url(assets/img/test.jpg);
				background-repeat: no-repeat;
				background-size: 100% ;
			}
		}
	</style>
</head>
<body>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript" src="assets/js/all.js"></script>	
		<script type="text/javascript">
			Swal.fire({
				  icon: 'success',
				  title: '<img style="width:50px;height:50px;border-radius:50px;position:relative;left:5px;top:15px;" src="assets/img/drapeau.jpg">Bienvenu sur la Plateforme de Vote Electronique du Sénégal',
				  confirmButtonText:'<a href="connect.php" style="color:white;"><i class="fas fa-arrow-circle-right fa-2x"></i> <span style="position:relative;top:-7px;">Continuer</span></a>',
				  confirmButtonColor:'#558b2f'
				}).then((response)=>
				{
					if (response.isDismissed) 
					{
						window.location = 'connect.php';
					}
				})
		</script>
</body>
</html>