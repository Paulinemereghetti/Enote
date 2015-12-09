<?php

require_once("Autre.class.php");
require_once("AutreDAO.class.php");

$autre=new Autre();
$autreDAO= new AutreDAO();

$autre->initAutre("Type cat Autre","Icone de la Categorie Autre","Commentaire Categorie", "RefFacture1","23/01/1991","Bouteille d eau");
var_dump($autre);


$id=$autreDAO->getIdCategorieByParamAutre("Autre","ref14");
echo $id;

$autreDAO->getAllCategories();
var_dump($autreDAO);
?>