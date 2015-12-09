<?php

require_once("CategorieDAO.class.php");
require_once("Categorie.class.php");



$categorie = new CategorieDAO();
$categorie2 = new CategorieDAO();

//use the userDAO to get the categorie list
$categorieList= $categorie->getAllTypesCategories();


foreach ($categorieList as $categorieObject)
{
	echo "type de categorie: ".$categorieObject->getTypeCategorie()." \n";
	echo "\n";
	echo "ref de categorie:  ".$categorieObject->getRefFacture()." \n";
	
};
$categorie2->setParam("Avion","chemin adresse","ceci est un commentaire","refavion");
var_dump($categorie2);

$lib=$categorie->getTypeCategorieById(2);
$id=$categorie->getIdCategorieByParam("Transport","ref2");
$ListeTypes= new ArrayObject();
$listeTypes=$categorie->getAllTypesCategories();

if($categorie !=NULL)
{
	echo("c est bon");
	echo $lib;
	echo $id;
	var_dump($listeTypes);
}
$categorie->close();



?>