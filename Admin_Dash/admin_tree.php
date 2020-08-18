<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@1,300&display=swap');
  .treeview
  {
    color: white;
    font-size: 25px;
    font-family: 'Open Sans Condensed', sans-serif;
  }
  .menu_pack
  {
    padding: 15px;
    margin-top: 30px;
    transition: all .2s;
  }
  .menu_pack:hover
  {
    background-color: white;
    color: #9e9e9e;
    -webkit-box-shadow: 2px 2px 13px 5px rgba(45,36,255,0.23); 
    box-shadow: 2px 2px 13px 5px rgba(45,36,255,0.23);
  }
  .menu_pack ul li
  {
    font-family: 'Josefin Sans', sans-serif;
  }
  .menu_pack span
  {
    position: relative;
    top: -12px;
  }
  .nested li
  {
    width: 80%;
    height: 25px;
    transition: all 2s;
    margin-top: 10px;
    display: flex;
    flex-flow: row nowrap;
    align-items: center;
    font-size: 19px;
    text-align: left;
  }
  .nested li div
  {
    margin-top: 6px;
  }
  .nested li:hover
  {
    position: relative;
    right: 25px;
    padding-left: 10%;
    width: 100%;
    color: black;
    text-align: center;
    cursor: pointer;
    background-color: #ef6c00 ;
    border-radius: 5px;
  }
</style>
<br>
<div class="row d-flex justify-content-center align-items-center">
  <div class="col-auto">
        <img src="../assets/img/vote_sn.png" style="width: 60px;height: 60px;border-radius: 50px;">
  </div>
  <div class="col-12">
        <hr style="background-color: white;">
  </div>
</div>
<div class="treeview w-20" style="width: 100%;">
  <ul class="" style="width: 100%;padding-left: 0;">
    <li class="menu_pack">
      <span><i class="fas fa-democrat"></i> Election</span>&nbsp;&nbsp;<i class="fas fa-angle-right rotate" style="font-size: 25px;position: relative;top: -9px;"></i>
      <ul class="nested">
        <li onclick="AlterPage('parti.php')"><i class="fas fa-plus"></i><div>&nbsp;Parti Politique</div></li>
        <li onclick="AlterPage('circ.php')"><i class="fas fa-cog"></i><div>&nbsp;Circonscription</div></li>
        <li onclick="AlterPage('election.php')"><i class="fas fa-cogs"></i><div>&nbsp;Election</div></li>
        <li onclick="AlterPage('results.php')"><i class="fas fa-bullhorn"></i><div>&nbsp;Résultats</div></li>
      </ul>
    </li>
    <li class="menu_pack">
      <span><i class="fas fa-user-tie"></i> Candidature</span>&nbsp;&nbsp;<i class="fas fa-angle-right rotate" style="font-size: 25px;position: relative;top: -9px;"></i>
      <ul class="nested">
        <li><i class="fas fa-user-plus"></i><div>&nbsp;Candidats</div></li>
        <li><i class="fas fa-user-minus"></i><div>&nbsp;Candidats</div></li>
        <li><i class="fas fa-user-cog"></i><div>&nbsp;Candidats</div></li>
      </ul>
    </li>
    <li class="menu_pack" style="cursor: pointer;">
      <i class="fas fa-users"></i>&nbsp;&nbsp;Comptes
    </li>
  </ul>
</div>
<script type="text/javascript">
  // Treeview Initialization
$(document).ready(function() {
  $('.treeview').mdbTreeview();
});
</script>