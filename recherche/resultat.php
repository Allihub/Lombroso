
<!DOCTYPE html>
<html>
<head>
	<title>RECUPERATION DE DONNÉES DE LA RECHERCHE</title>
	<?php
		echo $_POST[recherche];
		echo $_POST[critere1];
		echo $_POST[critere2];
		echo $_POST[critere3];
		echo $_POST[critere4];
		// TEST DE LA PRESENCE DES VARIABLES RECUPEREES
		$sql = 'emma'; // requete a faire en onction du choix de l'utilisateur
		if(isset $_POST[recherche]){

			$sql='';
		}
		if (!isset($_POST[critere1]) And isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (!isset($_POST[critere1]) And !isset($_POST[critere2]) and isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (!isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql='';
		}
		if (isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}

		//connexion a la bdd
		$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
				 //transformer tous les get en post
	 ?>
</head>
<body>

</body>
</html>