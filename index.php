
<?php
// faire des variables pour les bouton actif
	$f = $_SERVER['PHP_SELF'];
	$con ="";$abt="";$cnt=""; $home=""; $insc="";
	switch($f)
	{
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
			print("hello");
		case"/Enote/inscription.php":
			$insc="active";
			break;
    }

?>
<html>

	<head>
		<title>E-note</title>
	</head>

	<body>
		<div class="navbar">
		  <div class="navbar-inner">
		  <div class="container">
			 
			      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
			      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </a>
				  
			  <div class="nav-collapse collapse">
			    <ul class="nav">
			      <?php  
			        if (($_SESSION['ouvert']==true ) {
			          echo '  <li class='.$home.'><a href="accueil.php">Accueil</a></li>
			                  <li class='.$cnt.'><a href="contact.php">Contact</a></li>
			                  <li class='.$abt.'><a href="about.php">A propos</a></li>
			                  <li class='.$con.'><a href="deconnexion.php">Deconnexion</a></li>';
			           }
			        else{
			          echo '	<li class='.$con.'><a href="index.php">Connexion</a></li>
			          			<li class='.$insc.'><a href="inscription.php">Inscription</a></li>';

			      	}
			      ?>
			      
			    </ul>
				</div>
			</div>
		  </div>
		</div>
		<div class="container">
		    <div class="row">
		        <div class="col-sm-6 col-md-4 col-md-offset-4">
		            <h1 class="text-center login-title">Sign in to continue to Bootsnipp</h1>
		            <div class="account-wall">
		      
		                <form class="form-signin" action="page.php" method="post">
			                <input type="text" class="form-control" placeholder="Login" required autofocus>
							<br />
			                <input type="password" class="form-control" placeholder="Password" required>
			                <button class="btn btn-lg btn-primary btn-block" type="submit">
			                    Connexion
			                </button>
			                <label class="checkbox pull-left">
			                    <input type="checkbox" value="remember-me">
			                    Se souvenir de moi
			                </label>
			                <a href="#" class="pull-right need-help">Besoin d'aide ? </a><span class="clearfix"></span>
		                </form>
		            </div>
		            <a href="#" class="text-center new-account">Incsription</a>
		        </div>
		    </div>
		</div>

	</body>
</html>


