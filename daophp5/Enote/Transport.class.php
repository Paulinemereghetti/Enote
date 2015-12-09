<?php
require_once("Categorie.class.php");
require_once("CategorieDAO.class.php");

class Transport extends Categorie{
	private $IdCategorie;
	private $TypeTransport;
	
	public function __construct() {
		parent::__construct();
		$this->TypeTransport="";
	}
	
	
	public function getTypeTransport()
	{
		return $this->TypeTransport;
	}
	
	public function setTypeTransport($TypeTransport)
	{
		$this->TypeTransport=$TypeTransport;
	}
	
	/*public function CreateTransByParam($TypeCategorie,$RefFacture,$TypeTransport)
	{
		
			$sql="SELECT * FROM categorie c, Transport t WHERE c.IdCategorie= t.IdCategorie AND c.TypeCategorie='".$TypeCategorie."' AND t.TypeTransport='".$TypeTransport."' AND c.RefFacture='".$RefFacture."'";
			$res=$this->retrieve($sql);
			$res->setFormat("ASSOC");
			if($res->getNumRows()==1)
			{
				$id=$res->getNumRows();
				$row = $res->getRow();
				$this->setID($row->offsetGet("IdCategorie"));
				$this->setTypeCategorie($row->offsetGet("TypeCategorie"));
				$this->setIconeCategorie($row->offsetGet("IconeCategorie"));
				$this->setRefFacture($row->offsetGet("RefFacture"));
				$this->setCommentaireCategorie($row->offsetGet("CommentaireCategorie"));
				$this->setTypeTransport($row->offsetGet("TypeTransport"));
			return $transport;
			}
		
		else return false;
			
	}*/
	
	public function initTrans($TypeCategorie, $IconeCategorie,$RefFacture, $CommentaireCategorie,$TypeTransport)
	{
		$this->initCat($TypeCategorie, $IconeCategorie,$RefFacture, $CommentaireCategorie);
		$this->TypeTransport=$TypeTransport;
	}
	
	public function createTransportByTranDAO($transDAO)
	{
		$this->IdCategorie=$transDAO->getID();
		$this->TypeTransport=$transDAO->getTypeTransport();
	}
	
}

?>