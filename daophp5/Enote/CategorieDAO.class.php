<?php
require_once("../DAO.class.php");
require_once("Categorie.class.php");

class CategorieDAO extends DAO{
	
	
	public function __construct() {
		parent::__construct();
	}
	

	
	public function getAllCategories()
	{
		$categories = new ArrayObject();
		$sql="SELECT * FROM Categorie";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		
		// retrieve row and create user object
		if($res->getNumRows() >= 1) {
			
			foreach($res as $row) {
				$categorie = new Categorie();
				$categorie->setID($row->offsetGet("IdCategorie"));
				$categorie->setTypeCategorie($row->offsetGet("TypeCategorie"));
				$categorie->setIconeCategorie($row->offsetGet("IconeCategorie"));
				$categories->append($categorie);
			}
			return $categories;
		} 
		else {
			return false;
		}
		
	}
	
	public function getAllTypesCategories()
	{
		$categories = new ArrayObject();
		$sql="SELECT TypeCategorie FROM Categorie";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		
		// retrieve row and create user object
		if($res->getNumRows() >= 1) {
			
			foreach($res as $row) {
				
				$categorie = new Categorie();
				$categorie->setTypeCategorie($row->offsetGet("TypeCategorie"));
				$categorie->setID(1);
				$categorie->setIconeCategorie("hello");
				$categorie->setRefFacture("hello");
				$categorie->setCommentaireCategorie("hello");
				$categories->append($categorie);
			}
			return $categories;
		} 
		else {
			return false;
		}
		
	}
	
	public function getLibelleCategorieById($CategorieId)
	{
		$sql="SELECT LibelleCategorie FROM Categorie WHERE CategorieId='".$this->da->escape($CategorieId)."'";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		if($res->getNumRows() == 1) {
			$row = $res->getRow();
			$categorie = new Categorie();
			$categorie->setID($row->offsetGet("CategorieId"));
			$categorie->setLibelle($row->offsetGet("LibelleCategorie"));
			return $categorie;
		} else {
			return false;
		}
	}
	
	public function getCategorieByLibelle($LibelleCategorie)
	{
			$sql="SELECT CategorieId FROM Categorie WHERE CategorieId=".$this->da->escape($LibelleCategorie);
			$res=$this->retrieve($sql);
			$res->setFormat("ASSOC");
			if($res->getNumRows()>=1){
				$row=$res->getRow();
				$categorie=new Categorie();
				$categorie->setID($row->offsetGet("CategorieId"));
				$categorie->setLibelle($row->offsetGet("LibelleCategorie"));
				return $categorie;
			}
			else
			{
				return false;
			}
	}
}
?>