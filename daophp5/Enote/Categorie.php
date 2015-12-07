<?php

require_once("CategorieDAO.class.php");
require_once("Categorie.class.php");



$categorie = new CategorieDAO();

//use the userDAO to get the categorie list
$categorieList= $categorie->getAllTypesCategories();


foreach ($categorieList as $categorieObject)
{
	echo "type de categorie:  ".$categorieObject->getTypeCategorie();
	echo "ref de categorie:  ".$categorieObject->getRefFacture();
};

$categorie->close();



?>