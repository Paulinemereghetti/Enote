<?php


Class Categorie{
	private $IdCategorie;
	private $TypeCategorie;
	private $IconeCategorie;
	private $RefFacture;
	private $CommentaireCategorie;
	
	public function __construct()
	{
		$this->IdCategorie=0;
		$this->TypeCategorie="";
		$this->IconeCategorie="";
		$this->RefFacture="";
		$this->CommentaireCategorie="";
	}
	
	public function getID()
	{
		return $this->CategorieId;
	}
	
	public function getTypeCategorie()
	{
		return $this->TypeCategorie;
	}
	
	public function getIconeCategorie()
	{
		return $this->IconeCategorie;
	}
	
	public function getRefFacture()
	{
		return $this->RefFacture;
	}
	
	public function getCommentaireCategorie()
	{
		return $this->CommentaireCategorie;
	}
	
	public function setID($CategorieId)
	{
		$this->CategorieId=$CategorieId;
	}
	
	public function setTypeCategorie($TypeCategorie)
	{
		$this->TypeCategorie=$TypeCategorie;
	}
	
	public function setIconeCategorie($IconeCategorie)
	{
		$this->IconeCategorie=$IconeCategorie;
	}
	
	public function setRefFacture($RefFacture)
	{
		$this->RefFacture=$RefFacture;
	}
	
	public function setCommentaireCategorie($CommentaireCategorie)
	{
		$this->CommentaireCategorie=$CommentaireCategorie;
	}
	
}

?>