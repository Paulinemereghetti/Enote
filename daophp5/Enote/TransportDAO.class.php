<?php
require_once("../DAO.class.php");
require_once("Transport.class.php");
require_once("CategorieDAO.class.php");

class TransportDAO extends DAO{
	
	public function __construct() {
		parent::__construct();
	}
	
	//à la place d'un constructeur paramétré, on implémente cette méthode qui sert à charger les élement d'un objet
	/*public function setParam($TypeCategorie,$IconeCategorie,$CommentaireCategorie,$RefFacture,$TypeTransport)
	{
		$tmp=new CategorieDAO();
		$tmp->setParam($trans,$TypeCategorie,$IconeCategorie,$CommentaireCategorie,$RefFacture);
		//$this->setTypeTransport($TypeTransport);
		var_dump($tmp);
	}
	*/
	public function getTransByParam($TypeCategorie,$RefFacture,$TypeTransport)
	{
		
			$sql="SELECT * FROM categorie c, Transport t WHERE c.IdCategorie= t.IdCategorie AND c.TypeCategorie='".$this->da->escape($TypeCategorie)."' AND t.TypeTransport='".$TypeTransport."' AND c.RefFacture='".$RefFacture."'";
			$res=$this->retrieve($sql);
			$res->setFormat("ASSOC");
			if($res->getNumRows()==1)
			{
				$id=$res->getNumRows();
				$row = $res->getRow();
				$transport=new Transport();
				$transport->setID($row->offsetGet("IdCategorie"));
				$transport->setTypeCategorie($row->offsetGet("TypeCategorie"));
				$transport->setIconeCategorie($row->offsetGet("IconeCategorie"));
				$transport->setRefFacture($row->offsetGet("RefFacture"));
				$transport->setCommentaireCategorie($row->offsetGet("CommentaireCategorie"));
				$transport->setTypeTransport($row->offsetGet("TypeTransport"));
			return $transport;
			}
		
		else return false;
			
	}
	//lister tous les moyens avec la déscription enttiére (les attributs)
	public function getAllTransport()
	{
		
		$sql="SELECT * FROM Transport";
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		
		
		// retrieve row and create user object
		if($res->getNumRows() >= 1) {
			$transports=new ArrayObject();
			foreach($res as $row) {
				$transport = new Transport();
				$transport->setID($row->offsetGet("IdCategorie"));
				$transport->setTypeCategorie($row->offsetGet("TypeCategorie"));
				$transport->setIconeCategorie($row->offsetGet("IconeCategorie"));
				$transport->setRefFacture($row->offsetGet("RefFacture"));
				$transport->setCommentaireCategorie($row->offsetGet("CommentaireCategorie"));
				$transport->setTypeTransport($row->offsetGet("TypeTransport"));
				$transports->append($transport);
			}
			return $transports;
		} 
		else {
			return false;
		}
	}
	
	
	//récuperer un moyen de transport via son ID 
	public function getTransportByID($IdCategorie)
	{
		$sql="SELECT * FROM Transport WHERE IdCategorie=".$IdCategorie;
		$res = $this->retrieve($sql);
		$res->setFormat("ASSOC");
		
		// retrieve row and create user object
		if($res->getNumRows() == 1) {
			$row = $res->getRow();
			$transport = new Transport();
			$transport->setID($row->offsetGet("IdCategorie"));
			$transport->setTypeCategorie($row->offsetGet("TypeCategorie"));
			$transport->setIconeCategorie($row->offsetGet("IconeCategorie"));
			$transport->setRefFacture($row->offsetGet("RefFacture"));
			$transport->setCommentaireCategorie($row->offsetGet("CommentaireCategorie"));
			$transport->setTypeTransport($row->offsetGet("TypeTransport"));
			$transports->append($categorie);
			return $transport;
		} else {
			return false;
		}
		
	}
}

?>