<?php

 function connexion(){
	$co = mysqli_connect("localhost","root","","enote") or die ("erreur de connexion");
	mysqli_query($co, "SET NAMES UTF8");
	return $co;

}
function deconnexion($connection){
	$co = mysqli_close($connection);

}
?>