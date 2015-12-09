<?php

require_once("../DAO.class.php");
require_once("Autre.class.php");
require_once("CategorieDAO.class.php");

class AutreDAO extends CategorieDAO{
	
	public function __construct() {
	parent::__construct();}
	
	//teste réussie
	public function getIdCategorieByParamAutre($TypeCategorie,$RefFacture)
	{
		$sql="SELECT IdCategorie FROM Categorie WHERE TypeCategorie='".$this->da->escape($TypeCategorie)."' AND RefFacture='".$this->da->escape($RefFacture)."'";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		if($res->getNumRows() == 1) {
			$row = $res->getRow();
			$autre = new Autre();
			$autre->setID($row->offsetGet("IdCategorie"));
			return $autre->getID();
		} else {
			return false;
		}
	}
	
	public function getAllCategories()
	{
		$autres = new ArrayObject();
		$sql="SELECT * FROM Categorie c, Autre a WHERE c.IdCategorie= a.IdCategorie";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		
		// retrieve row and create user object
		if($res->getNumRows() >= 1) {
			
			foreach($res as $row) {
				$autre = new Autre();
				$autre->setID($row->offsetGet("IdCategorie"));
				$autre->setTypeCategorie($row->offsetGet("TypeCategorie"));
				$autre->setIconeCategorie($row->offsetGet("IconeCategorie"));
				$autre->setRefFacture($row->offsetGet("RefFacture"));
				$autre->setCommentaireCategorie($row->offsetGet("CommentaireCategorie"));
				$autre->setDateAutre($row->offsetGet("dateAutre"));
				$autre->setDescriAutre($row->offsetGet("DescriAutre"));
				$autres->append($categorie);
			}
			return $autres;
		} 
		else {
			return false;
		}
		
	}
	
}

?>