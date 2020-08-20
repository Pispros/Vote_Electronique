<!--Navbar-->
<style type="text/css">
  .hoverA:hover
  {
    background-color: #bbdefb;
    color: #424242 !important;
  }
  .hoverA
  {
    font-family: 'Dancing Script',cursive;
    font-size: 30px !important;
  }
  @media(max-width: 992px)
  {
    .nav-link .hoverB2
    {
      position: relative;top: -10px;
    }
  }
  @media(min-width: 993px)
  {
    .hoverA
    {
      position: relative;top: 9px;
    }
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark default-color-dark">

  <!-- Navbar brand -->
  <a class="navbar-brand" href="#"><img src="../assets/img/electeurs/<?php echo $row[0][0]; ?>" style="width: 70px;height: 70px;border-radius: 50px;"></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto" style="width: 100%;display: flex !important;flex-flow: row nowrap!important;justify-content: space-around!important;">
      <li class="nav-item active">
      
      </li>
      <li class="nav-item">
        <a class="nav-link hoverA" target="_blank" href="../Resultats/" style="font-weight: bolder;font-size: 22px;"><i class="fas fa-poll"></i>&nbsp;Résultats</a>
      </li><li class="nav-item">
        <a class="nav-link" title="Déconnexion" href="../connect.php?logout=yes"><div class="rounded-circle hoverB2"><i class="fas fa-power-off fa-2x" style="color: red;"></i></div></a>
      </li>
    </ul>

      <!-- Dropdown 
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>

    </ul>
    Links

    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      </div>
    </form>
  </div>
   Collapsible content -->

</nav>
<!--/.Navbar-->