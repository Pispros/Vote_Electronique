<?php 
	session_start();
	include '../bd.php';
	include 'check.php';

	$query = $pdo->query("SELECT * FROM type_election WHERE published=1");
	$rowsl = $query->fetchAll(PDO::FETCH_NUM);
?>
<!DOCTYPE html>
<html>
<head>
	<title>RESULATS DES ELECTIONS</title>
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
	</style>
</head>
<body>
		<div class="row default-color-dark d-flex justify-content-between align-items-center" style="height: 70px;">
			  <div class="col-auto" style="padding-left: 50px;">
			  	    <img class="rounded-circle" src="../assets/img/vote_sn.png" style="width: 50px;height: 50px;">
			  </div>
			  <div class="col-auto d-flex justify-content-center" style="padding-right: 50px;">
			  	    <img id="loader" class="rounded-circle" src="../assets/img/loader1.gif" style="width: 40px;height: 40px;">
			  	    <div style="display: none;" id="faq">
			  	    		<i id="hover_faq" class="far fa-question-circle" style="font-size: 35px;color: white;"></i>
			  	    </div>
			  	    <div class="" id="hover_faq_option" style="display: none;transition: all 1s;">
			  	    		Besoin d'aide ?
			  	    </div>
			  </div>
		</div>
<br><br>
<div class="container-fluid">
		<div class="row">
			<?php 
				foreach ($rowsl as $r) 
				{
			?>
					<div class="col-12 col-md-5 col-lg-4" style="cursor: pointer;" data-toggle="modal" data-target="#basicExampleModal" onclick="_Load_Results('<?php echo $r[0]; ?>');">
						<div style="border: dashed;border-width: 3px;display: flex;justify-content: center;flex-flow: column wrap; align-items: center;text-align: center;border-radius: 10px;border-color: rgba(76, 175, 80, 0.3);font-weight: bolder;">
							 <div style="display: flex;justify-content: flex-end;flex-flow: row nowrap;align-items: center;margin-top: 15px;">
							 	<div>
							 			Voir les résultats pour
							 	</div>
							 	<div style="position: relative;left: 15%;">
							 		<img src="../assets/img/check.jpg" style="width: 60px;height: 60px;border-radius: 50px;">
							 	</div>
							 </div>
							 <p style="margin-top: 15px;">
							 	Elections&nbsp;<?php echo $r[1]; ?>
							 </p>
							 <p style="margin-top: 15px;">
							 	Poste :&nbsp;<?php echo $r[2]; ?>&nbsp;<i class="fas fa-user-tie"></i>
							 </p>
							 <p style="margin-top: 15px;">
							 	Du&nbsp;<?php echo $r[3]; ?>&nbsp;Au&nbsp;<?php echo $r[3]; ?> 
							 </p>
						</div>
					</div>
			<?php 
				}
			?>
		</div>
</div>
<!-- Show Results Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header peach-gradient">
        <h5 class="modal-title" id="exampleModalLabel" style="color: white;font-weight: bolder;"><i class="fas fa-bullhorn"></i>&nbsp;&nbsp;RESULTATS DES VOTES&nbsp;&nbsp;<i class="fas fa-bullhorn"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalB">
        	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn peach-gradient" data-dismiss="modal">FERMER</button>
      </div>
    </div>
  </div>
</div>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		<script type="text/javascript" src="../assets/js/all.js"></script>	
		<script type="text/javascript">
				function _Load_Results(arg) 
				{
					let xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
					    if (this.readyState == 4 && this.status == 200) 
					    {
					        document.getElementById("modalB").innerHTML = xhttp.responseText;
					    }
					};
					xhttp.open("GET", "load_results.php?id="+arg, true);
					xhttp.send();
				}
		</script>
</body>
</html>