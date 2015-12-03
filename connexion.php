<?php
session_start();
 include("bdINSTA.php");/* Inclusion de la page avec les fonctions de connection */

if (isset($_POST["pseudo"]) && isset($_POST["mdp"]))
{	
	/*On stocke le login et mot de passe dans des variables */
	
	if (!empty($_POST["pseudo"]) && !empty($_POST["mdp"]))
	{	
		$pseudoSaisi = $_POST["pseudo"];
		$mdpSaisi = $_POST["mdp"];
		$co = connexion();
		$requetec="Select UserId,prenom from User where pseudo='$pseudoSaisi' and mdp = '$mdpSaisi'";
		$res = mysqli_query($co,$requetec) or die(mysqli_error($co));
		if(mysqli_num_rows($res) == 1)
		{
			$_SESSION['connecte'] = true;
			while($donnee = mysqli_fetch_assoc($res))
			{
				$_SESSION['prenom'] = $donnee['prenom'] ;
			}
		}
		else 
		{ 
			$_SESSION['connecte'] = false;
		}	
		
		
	}
	else
	{
	
	$message ="veuillez entrer un login et un mot de passe"; 
	
	
	}
	

}
else
{
	$message="incorresspondance dans les attributs name des inputs du formulaire";
}	

header('Location: index.php');
?>