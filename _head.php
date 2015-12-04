<?php
session_start();

?>
<html>

<?php
if (!isset ($_SESSION['mess_erreur_connexion'])){
	$_SESSION['mess_erreur_connexion']=null;
}
if (!isset ($_SESSION['ouvert'])){
	$_SESSION['ouvert']=null;
}

 ?>
<head>
  <title> Note de frais  </title>
    
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.min.css" rel="stylesheet" />
  <link href="css/bootstrap-theme.css.map" rel="stylesheet" />
  <link href="css/bootstrap-theme.min.css.map" rel="stylesheet" />
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

</head>