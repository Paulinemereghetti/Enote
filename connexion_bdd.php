<?php
session_start();
//connexion avec la bdd
function connect(){
try{$bdd = new PDO('mysql:host=localhost;dbname=enote', 'root', 'root');}
catch(Exception $e){ die('Erreur : '.$e->getMessage());}
return $bdd;
};
// requete pour login/ pass
$connexion =connect(); 
$requeteuser = $connexion ->prepare('SELECT *  FROM users, profil WHERE users.profilID = profil.profilID AND pseudo = :login AND password= :mdp');
$requeteuser->execute(array(
// renvoie les champs du formulaire dans les champs de la bdd
    'login' => $_POST['login'], 
    'mdp'=>($_POST['pass']),
	 ));

 $resultat = $requeteuser->fetch();
	if ($resultat) // si les logins/pass = true => connexion
	{	
		$_SESSION['login']=$_POST['login'];
		$_SESSION['nom']=$resultat['nom'];
		$_SESSION['prenom']=$resultat['prenom'];
        $_SESSION['groupe']= $resultat['profilID'];
        $_SESSION['droit'] = $resultat['libelle'];
		$_SESSION['ouvert']=true; 
		$_SESSION['mess_erreur_connexion']=null;
        header("Location:accueil.php");
        $_SESSION['mess_erreur_insciption'] = null;
	}
	else{ 
		$_SESSION['mess_erreur_connexion']="Identifiant ou mot de passe incorect";
		header("Location:index.php?connexion=no");
	}
?>