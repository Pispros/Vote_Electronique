<?php 
	include '../bd.php';

	$query = $pdo->query("SELECT * FROM type_election");
	$rows  = $query->fetchAll(PDO::FETCH_NUM);

	$query = $pdo->query("SELECT * FROM parti_politique");
	$rowsp = $query->fetchAll(PDO::FETCH_NUM);
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
			border-color: black;
		}
		input
		{
			margin-bottom: 15px;
		}
		.hoverB
		{
			width: 60px;height: 60px;
		}
		.trans
		{
			opacity: 0;
			animation: FadeIn 1s forwards;
		}
	</style>
</head>
<body>
		<div class="container-fluid">
			<div class="row d-flex justify-content-start">
			 	<div class="col-auto">
			 			<span style="font-size: 25px;color: #4db6ac;">Administration > <a style="font-size: 25px;color: #4db6ac;" href="./election.php">Gestion Elections</a> > Configurer une election </span>
			 	</div>
			</div>
	<form method="post" action="./options/admin_options.php?action=conf_elec" onsubmit="RecallPath();">
			<div class="row d-flex justify-content-center" style="margin-top: 35px;margin-bottom: 35px;">
      			<div class="col-auto">
      				<select class="browser-default custom-select" name="choose_elec" id="choose_elec" onchange="Forward(this.value);">
						  <option selected>Choisissez l'élection</option>
						  <?php 
						  	   foreach ($rows as $r) 
						  	   {
						  ?>
						  		 <option value="<?php echo $r[0]; ?>"><?php echo $r[1].' // '.$r[3].' // '.$r[4].' // '; ?></option>
						  <?php 
						  	   }
						  ?>
					</select>
      			</div>
      		</div>
      		<div class="row" id="forw" style="display: none;">
      			<div class="col-4 d-flex justify-content-center align-items-center">
      				 <div class="rounded-circle hoverB" title="Ajouter un parti politique" onclick="GenerateParti();">
      				 		<i class="fas fa-plus fa-2x" style="color: #33b5e5;"></i>
      				 </div>
      			</div>
      			<div class="col-8" style="display: flex;flex-flow: column wrap;" id="selection">
      				 <div class="row d-flex justify-content-around trans">
      				 	   <div class="col-6">
      				 	   		<select class="browser-default custom-select myI" name="selection[]" id="1000">
									  <option selected>Choisissez le Parti</option>
									  <?php 
									  	   foreach ($rowsp as $r1) 
									  	   {
									  ?>
									  		 <option value="<?php echo $r1[0]; ?>"><?php echo $r1[1].' // '.$r1[2].' // '.$r1[5].' // '; ?></option>
									  <?php 
									  	   }
									  ?>
								</select>
      				 	   </div>
      				 	   <div class="col-auto">
      				 	   		<div class="rounded-circle hoverB" style="width: 60px;height: 60px;margin-top: 8px;" title="Retirer ce Parti" onclick="this.parentElement.parentElement.remove();">
      				 	   			 <i class="fas fa-minus-circle fa-2x" style="color: red;"></i>
      				 	   		</div>
      				 	   </div>	
      				 </div>
      			</div>
      		</div>
      		<div class="row d-flex justify-content-center">
				<div class="col-auto">
				 	 <button type="submit" style="display: none;" id="go" disabled="" title="Enregistrer" class="btn btn-outline-info rounded-pill"><i class="far fa-paper-plane fa-2x"></i></i>&nbsp;</button>
				</div>
			</div>
		</div>
	</form>
		<script type="text/javascript">
			let start = 2000;
			let parti_array = <?php echo json_encode($rowsp) ?>;

			if (sessionStorage.getItem('last_path')) 
			{
				sessionStorage.removeItem('last_path');
			}

			function RecallPath() 
			{
				sessionStorage.setItem('last_path',window.location);
			}

			function Forward(arg) 
			{
				if (arg!="Choisissez l'élection") 
				{
					document.getElementById('forw').style.display = 'flex'  ;
					document.getElementById('go').style.display   = 'inline';
				}
				else
				{
					document.getElementById('forw').style.display = 'none'  ;
					document.getElementById('go').style.display   = 'none'  ;
					document.getElementById('go').disabled        = true    ;
				}
			}

			function GenerateParti() 
			{
				let newRow    = document.createElement('div');
				let newCol1   =  document.createElement('div');
				let newCol2   = document.createElement('div');
				let newHoverB = document.createElement('div');

				newRow.setAttribute("class","row d-flex justify-content-around trans");
				newCol1.setAttribute("class","col-6");
				newCol2.setAttribute("class","col-auto");
				newHoverB.setAttribute("class","rounded-circle hoverB");
				newHoverB.setAttribute("onclick","this.parentElement.parentElement.remove();");

				let select    = document.createElement('select');
				select.setAttribute("class","browser-default custom-select myI");
				select.setAttribute("name","selection[]");
				select.setAttribute("id",start++);

				let option = document.createElement('option');
				option.setAttribute("selected","")           ;
				option.innerHTML = 'Choisissez le Parti'  ;
				option.value = 'Choisissez le Parti'  ;
				select.appendChild(option);

				for (let i = parti_array.length - 1; i >= 0; i--)
				{
					let option2 = document.createElement('option');
					option2.setAttribute("value",parti_array[i][0]);
					option2.innerHTML = parti_array[i][1]+' // '+parti_array[i][2]+' // '+parti_array[i][5];
					select.appendChild(option2);
				}
				
				

				let thei = document.createElement("i");
				thei.setAttribute("class","fas fa-minus-circle fa-2x");
				thei.style.color = 'red';

				newHoverB.appendChild(thei);
				newHoverB.style.marginTop = '8px';
				

				newCol1.appendChild(select);
				newCol2.appendChild(newHoverB);
				newRow.appendChild(newCol1);
				newRow.appendChild(newCol2);

				document.getElementById('selection').appendChild(newRow);
			}



			document.addEventListener('click',function ()  
			{
				let x = document.querySelectorAll('.myI');

				for (let i = 0; i < x.length; i++) 
				{
					if (x[i].value ==='Choisissez le Parti') 
					{
						document.getElementById('go').disabled = true  ;
					}
					else
					{
						document.getElementById('go').disabled = false ;
					}
				}
				
			});


		</script>
</body>
</html>