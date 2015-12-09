<?php
require_once("Categorie.class.php");
class Autre extends Categorie{
	
	private $dateAutre;
	private $DescriAutre;
	public function __construct()
	{
		parent::__construct();
		$this->dateAutre="";
		$this->DescriAutre="";
	}
	
	public function getdateAutre()
	{
		return $this->dateAutre;
	}
	
	public function getDescriAutre()
	{
		return $this->DescriAutre;
	}
	
	public function setDateAutre($dateAutre)
	{
		$this->dateAutre=$dateAutre;
	}
	
	public function setDescriAutre($DescriAutre)
	{
		$this->DescriAutre=$DescriAutre;
	}
	
	public function initAutre($TypeCategorie, $IconeCategorie,$RefFacture, $CommentaireCategorie,$dateAutre,$DescriAutre)
	{
		$this->initCat($TypeCategorie, $IconeCategorie,$RefFacture, $CommentaireCategorie);
		$this->dateAutre=$dateAutre;
		$this->DescriAutre=$DescriAutre;
	}
	
}

?>