<?php 

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
		html,body
			{
				overflow-x: hidden;
			}
		@media(max-width: 767px)
		{
			.slide_left
			{
				margin-left: 1%;
			}
			.slide_left_2
			{
				padding-left: 7%;
			}
		}
	</style>
</head>
<body>
		<div class="row default-color-dark d-flex justify-content-between align-items-center" style="height: 70px;">
			  <div class="col-auto" style="padding-left: 50px;">
			  	    <img class="rounded-circle" src="assets/img/vote_sn.png" style="width: 50px;height: 50px;">
			  </div>
			  <div class="col-auto d-flex justify-content-center" style="padding-right: 50px;">
			  	    <img id="loader" class="rounded-circle" src="assets/img/loader1.gif" style="width: 40px;height: 40px;">
			  	    <div style="display: none;" id="faq">
			  	    		<i id="hover_faq" class="far fa-question-circle" style="font-size: 35px;color: white;"></i>
			  	    </div>
			  	    <div class="" id="hover_faq_option" style="display: none;transition: all 1s;">
			  	    		Besoin d'aide ?
			  	    </div>
			  </div>
		</div>

		<div class="row slide_left" style="width: 80%;height: 75px;background-image: url(assets/img/1.jpg); background-repeat: no-repeat;background-size: 100%; background-position: center;-webkit-box-shadow: 5px 5px 20px 5px rgba(0,0,0,0.27);box-shadow: 5px 5px 20px 5px rgba(0,0,0,0.27);">
			 
		</div>
		<br>
		<div class="row d-flex justify-content-center home slide_left_2" style="width: 80%;">
				<div class="col-12  d-flex justify-content-center" style="text-align: center;margin-bottom: 15px;">
					<img class="rounded-circle" src="assets/img/acceuil.jpg" style="width: 250px;height: 250px;-webkit-box-shadow: 5px 5px 20px 5px rgba(255,151,178,0.27);box-shadow: 5px 5px 20px 5px rgba(255,151,178,0.27);">
				</div>
				<div class="col-12 col-md-6 col-lg-4"> 
						<div class="row">
							  <div class="col-12" style="font-size: 13px;">
							  		CNI*
							  </div>
							  <div class="col-12">
							  		<input type="email" name="login" class="form-control">
							  </div>			
						</div>
						<div class="row" style="margin-top: 10px;">
							  <div class="col-12" style="font-size: 13px;">
							  		Mot de Passe*
							  </div>
							  <div class="col-12">
							  		<input type="password" name="pwd" class="form-control">
							  </div>			
						</div>
						<div class="row d-flex justify-content-around" style="margin-top: 10px;">
							   <button type="button" class="btn aqua-gradient"><i class="fas fa-plug"></i>&nbsp;Se connecter</button>
							   <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-success rounded-pill"><i class="fas fa-plus"></i>&nbsp;S'inscrire</button>
						</div>
				</div>
		</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">

  <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
  <div class="modal-dialog modal-lg" role="document">


    <div class="modal-content">
      <div class="modal-header aqua-gradient">
        <h5 class="modal-title" id="exampleModalLongTitle" style="color: white;font-weight: bolder;"><i class="fas fa-plus"></i>&nbsp;Inscription</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form method="post" action="f_subscribe.php" enctype="multipart/form-data"> 
      <div class="modal-body">
        <?php include 'inscription_form.php'; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info" data-dismiss="modal">FERMER</button>
        <button type="submit" disabled="" id="go" class="btn aqua-gradient"><i class="fas fa-chevron-circle-right"></i>&nbsp;INSCRIPTION</button>
</form>
      </div>
    </div>
  </div>
</div>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript" src="assets/js/all.js"></script>	
		<script type="text/javascript">

		</script>
</body>
</html>