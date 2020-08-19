<?php 
	session_start()    ;
	include '../bd.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
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
		body,html
		{
			overflow-x: hidden;
		}
	</style>
</head>
<body>
		<img id="loader_gif" src="../assets/img/loader1.gif" style="width: 45px;height: 45px;position: fixed;top: 48%;left: 60%;display: none;">
		<div class="layout">
			  <div class="left_layout">
			  		<?php include 'admin_tree.php'; ?>
			  </div>
			  <div class="right_layout">
			  		<iframe id="frameset" src="" style="border:unset;border-radius: 15px;width: 100%;height: 100%;"></iframe>
			  </div>
		</div>
		<!-- Modal Options-->
<div class="modal fade" id="basicExampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header aqua-gradient">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-weight: bolder;"><i class="fas fa-users"></i>&nbsp;Liste des Candidats</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
      <div class="modal-footer">
        <button type="button" onclick="Delete();" class="btn btn-outline-danger rounded-pill">Supprimer</button>
        <button type="button" class="btn btn-outline-info rounded-pill" data-dismiss="modal">FERMER</button>
      </div>
    </div>
  </div>
</div>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript" src="../assets/js/all.js"></script>	
		<script type="text/javascript">

		</script>
</body>
</html>