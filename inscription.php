<?php session_start();
if (($_SESSION['ouvert'] != true) OR ($_SESSION['groupe'] != 1)){
    header("Location:index.php?connexion=no");
    exit();
}
include('_head.php');
?>
	
	<body>
		<div class="container">
			<?php include('_menu.php');?>

		<div class="contenaire">
			<div class="row">
		    	<div class="col-sm-6 col-md-4 col-md-offset-4">
		    		<h2> Inscription </h2>
		    		<div class="account-wall">
						<form action="inscription_bdd.php" method="POST">
							<label> Nom </label>
								<input type="text" name="nom"/>

							<label> Pr&eacute;nom </label>
								<input type="text" name="prenom"/>

							<label> Login </label>
								<input type="text" name="login"/>

							<label> Password </label>
								<input required type="password" name="pass"/>

							<label> Mail </label>
								<input required type="text" name="mail" placeholder="toto@tata.fr"/>

	                        <label> Profils </label>
	                       
	                            <select name="groupe">
	                                <?
	                                    $db = mysql_connect('localhost', 'root', 'root');
	                                    mysql_select_db('enote',$db);
	                                    mysql_query ('SET NAMES utf8', $db);//ça c'est pour l'utf8 ma geule

	                                    $numero1 = 'SELECT profilID, libelle FROM profil';
	                                    $req1 = mysql_query($numero1) or die('Erreur SQL !<br>'.$sql1.'<br>'.mysql_error());

	                                    $donnees = mysql_fetch_array($req1);

	                                    while( $donnees = mysql_fetch_array($req1)){
	                                        echo "<option value= '".$donnees['profilID']."'>".$donnees['libelle']."</option>";
	                                    }
	                                ?>
	                            </select>
	                        <input type="submit" value="Envoyer"/>
	                    </form>
	                </div>
					</br>
				</div>
			</div>
		</div>
<div class="row-fluid">
				<h4><?php echo "".$_SESSION['mess_erreur_connexion']."" ; ?></h4>
		</div>
		<?php include('_footer.php'); ?>

	</body>
</html>