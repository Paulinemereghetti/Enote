<?php session_start();
if ($_SESSION['ouvert'] != true){
    header("Location:index.php?connexion=no");
    exit();
}
include('_head.php');
?>
	
	<body>
		<div class="header">

			<div class="container">
            
            <div>
                <?php include('_menu.php'); ?>

            <h4> <?php echo "Bienvenue sur E-note, ".$_SESSION['nom']." ".$_SESSION['prenom']." ! Tu es dans le groupe ".$_SESSION['droit']."." ; ?> </h4>

		
		<?php include('_footer.php'); ?>
	</body>
</html>