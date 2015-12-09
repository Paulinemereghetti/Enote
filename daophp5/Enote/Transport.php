<?php

require_once("Transport.class.php");
require_once("TransportDAO.class.php");

$transport=new TransportDAO();

$transport2=new Transport();
$transport3=new Transport();

$transport3->initTrans(3,"TypeCategorie", "IconeCategorie","RefFacture","CommentaireCategorie","TypeTransport");
var_dump($transport3);
//$transport2=$transport->getIdCategorieTransByParam("Transport","ref1","voiture");
var_dump($transport->getTransByParam("Transport","ref1","voiture"));

$transport2->createTransportByTranDAO($transport->getTransByParam("Transport","ref1","voiture"));
echo $transport2->getTypeCategorie();
echo $transport2->getRefFacture();
echo $transport2->getTypeTransport();

/*$TransportList=$Transport->getAllTransport();
foreach($TransportList as $Transport )
{
	echo"premier element: \n";
	echo $transport;
}*/

$transport->close();
?>             