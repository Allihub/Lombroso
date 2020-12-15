<!DOCTYPE html>
<html>
<head>
	<title>SUPPRESSION DES INFO ADMIN</title>
	<?php
	$_GET[nom];
	$_GET[prenom];
	$_GET[age];
	$_GET[idd];
	$_GET[test];
	$_GET[resultat]; // RECUPERATION DES VARIABLES

	$sql="DELETE FROM UTILISATEUR WHERE Id_User like ? "; //REQUETE DE SUPPRESSION

	$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root'); // CONNEXION   BDD
	
	$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );					
	$statement = $bdd -> prepare ( $sql );
	$statement -> execute (array($_GET['idd']));
	echo'Profil supprimé';
	echo"<meta http-equiv='refresh'content='3;URL=../MENU/Menu.php'>";
	?>

</head>
<body>

</body>
</html>