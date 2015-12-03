<?php
session_start();
function connect(){
try{$bdd = new PDO('mysql:host=localhost;dbname=Portfolio-pro', 'root', 'root');}
catch(Exception $e){ die('Erreur : '.$e->getMessage());}
return $bdd;
};
$connexion =connect(); 

$requeteuser = $connexion ->prepare('INSERT INTO user (usr_nom, usr_prenom, usr_login, usr_password,usr_mail, ID_grp )VALUE(:nom, :prenom,:login, :mdp, :mail, :grp)');

$requeteuser->execute(array(
	'nom'=>($_POST['nom']),
    'prenom'=>($_POST['prenom']),
    'login' => $_POST['login'], 
    'mdp'=>($_POST['pass']),
    'mail'=>($_POST['mail']),
    'grp'=> ($_POST['groupe']),
	 ));

header("Location:inscription_ok.php");
?>