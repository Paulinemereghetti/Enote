<?php
require_once("../DAO.class.php");
require_once("Categorie.class.php");

class CategorieDAO extends DAO{
	
	
	public function __construct() {
		parent::__construct();
	}
	
	public function setParamCat($TypeCategorie,$IconeCategorie,$CommentaireCategorie,$RefFacture)
	{
		
		$this->setTypeCategorie($this->da->escape($TypeCategorie));
		$this->setIconeCategorie($this->da->escape($IconeCategorie));
		$this>setRefFacture($this->da->escape($RefFacture));
		$this->setCommentaireCategorie($this->da->escape($CommentaireCategorie));
		return $this;
	}
	
	public function getIdCategorieByParam($TypeCategorie,$RefFacture)
	{
		$sql="SELECT IdCategorie FROM Categorie WHERE TypeCategorie='".$this->da->escape($TypeCategorie)."' AND RefFacture='".$this->da->escape($RefFacture)."'";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		if($res->getNumRows() == 1) {
			$row = $res->getRow();
			$categorie = new Categorie();
			$categorie->setID($row->offsetGet("IdCategorie"));
			return $categorie->getID();
		} else {
			return false;
		}
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
		$types = new ArrayObject();
		$sql="SELECT TypeCategorie FROM Categorie";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		
		// retrieve row and create user object
		if($res->getNumRows() >= 1) {
			
			foreach($res as $row) {
				
				$t = new Categorie();
				$t->setTypeCategorie($row->offsetGet("TypeCategorie"));
				$types->append($t);
			}
			return $types;
		} 
		else {
			return false;
		}
		
	}
	
	public function getTypeCategorieById($IdCategorie)
	{
		if(!is_int($IdCategorie) && $IdCategorie <= 0) {
			throw new InvalidArgumentException($IdCategorie." is not a valid argument");
		}
		//requete sql
		$sql="SELECT TypeCategorie FROM Categorie WHERE IdCategorie=".$IdCategorie;
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		if($res->getNumRows() == 1) {
			$row = $res->getRow();
			$categorie = new Categorie();
			$categorie->setTypeCategorie($row->offsetGet("TypeCategorie"));
			$typecat=$categorie->getTypeCategorie();
			
			return $typecat;
		} else {
			return false;
		}
	}
	
	
}
?>