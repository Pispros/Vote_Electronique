<style type="text/css">
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
	#personne input
	{
		margin-bottom: 15px;
	}
	#usager_votant input
	{
		margin-bottom: 15px;
	}
</style>	
<div class="row d-flex justify-content-around" id="personne">
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    CNI
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="cni" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Nom Père
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="nom_pere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Nom Mère
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="nom_mere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Profession Père
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="pro_pere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Profession Mère
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="pro_mere" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Date Naissance
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" autocomplete="off" name="ddn" class="form-control myI date">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Lieu de Naissance
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="ldn" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Profession
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Photo
	  			  </div>
	  			  <div class="col-12 d-flex justify-content-center">
	  			  		<label for="photo"><img src="assets/img/upload.png" style="width: 50px;height: 50px;border-radius: 50px;cursor: pointer;"></label>
	  			  		<input id="photo" required="" type="file" name="photo" class="form-control myI" style="display: none;">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Mot de Passe
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="password" onkeyup="_VerifyP_2(this);" id="pwd" name="pwd" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	   <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  		Confirmation Mot de Passe
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" onkeyup="_VerifyP(this);" type="password" id="cpwd" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
</div>
<div class="row d-flex justify-content-around" id="usager_votant">
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Numéro de carte d'électeur
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="num_elec" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Nom Electeur
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="nom_elec" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Prenom Electeur
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="prenom_elec" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Code Bureau
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="code_bureau" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Libellé Bureau
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="libelle_bureau" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Numéro Téléphone
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="number" name="tel" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Code Vote
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="code_vote" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Code Nationalité
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" type="text" name="code_nationalite" class="form-control myI">
	  			  </div>
	  		</div>
	  </div>
	  <div class="col-12 col-md-5">
	  		<div class="row">
	  			  <div class="col-12 intitule">
	  			  	    Date Inscription
	  			  </div>
	  			  <div class="col-12">
	  			  		<input required="" autocomplete="off" type="text" name="cni" class="form-control myI date">
	  			  </div>
	  		</div>
	  </div>
</div>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
	$(function() 
            {
                $(".date").datepicker(
                {
                    dateFormat: 'yy-mm-dd'
                });
            });
</script>