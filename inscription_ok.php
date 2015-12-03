<?php
session_start();
?>
<html>
	<?php include('_head.php'); ?>
	
	<body>

		<div class="container">
			<h1> G cours </h1>
			<?php include('_menu.php'); ?>
			 	<h4> Votre inscription &agrave; bien &eacute;t&eacute; prise en compte, je vous remercie <h4>

			<div class="row-fluid">
				<h4><?php echo "".$_SESSION['mess_erreur_connexion']."" ; ?></h4>
		</div>

		<?php include('_footer.php'); ?>
	</body>
</html>