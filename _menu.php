<?php
// faire des variables pour les bouton actif
	$f = $_SERVER['PHP_SELF'];
	$con ="";$abt="";$cnt=""; $home=""; $part=""; $upl="";$insc="";
	switch($f){
    case"/Enote/accueil.php":
      $home="active";
      break;
		case"/Enote/index.php":
			$con="active";
			break;
		case"/Enote/contact.php":
			$cnt="active";
			break;
		case"/Enote/about.php":
			$abt="active";
			break;
    case"/Enote/partage.php":
      $part="active";
      break;
    case"/Enote/dossier.php":
      $part="active";
      break;
    case"/Enote/upload-docs.php":
      $upl="active";
      break;
    case"/Enote/inscription.php":
      $insc="active";
      break;
  }

?>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <img id="logo" src="images/logo-Enote.png">
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
 <?php  
        if (($_SESSION['ouvert']==true ) AND ($_SESSION['groupe']== 1)){
          echo '  <li class='.$home.'><a href="accueil.php">Accueil</a></li>
                  <li class='.$cnt.'><a href="#">Contact</a></li>
                  <li class='.$abt.'><a href="#">A propos</a></li>
                  <li class='.$insc.'><a href="inscription.php">Inscription</a></li>
                  <li class='.$con.'><a href="deconnexion.php">Deconnexion</a></li>
                  <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                  </div>
                  <button type="submit" class="btn btn-default">Submit</button>
                </form>';
           }
        elseif ($_SESSION['ouvert']==false) {
          echo '';

      }
      
        else{
              echo '<li class='.$home.'><a href="accueil.php">Accueil</a></li>
                    <li class='.$cnt.'><a href="#">Mes notes de frais</a></li>
                    <li class='.$abt.'><a href="about.php">A propos</a></li>
                   
                    <li class='.$con.'><a href="deconnexion.php">Deconnexion</a></li>';
        }

      ?>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

     
      
    
