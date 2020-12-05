
<!DOCTYPE html>
<html>
<head>
	<title>RECUPERATION DE DONNÉES DE LA RECHERCHE</title>
	<?php
		
		// TEST DE LA PRESENCE DES VARIABLES RECUPEREES
		$sql = 'SELECT RESULTAT.Valeur 
				FROM RESULTAT, UTILISATEUR 
				WHERE RESULTAT.Id_User=UTILISATEUR.Id_User' ; // requete a faire en fonction du choix de l'utilisateur
				

		//$C1=$_POST[critere1]
		//$C2=$_POST[critere2]
		//$C3=$_POST[critere3]
		//$C4=$_POST[critere4] //


		if(isset ($_POST[recherche])){

			$sql='';
		}// travailler sur la requete
echo'ABCD';
		if (isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$C1=$_POST['critere1'];
			echo'emma';
			$sql.='AND UTILISATEUR.Nom like "%$C1%"';
		}
		if (!isset($_POST[critere1]) And isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$C2=$_POST[critere2];
			$sql.='AND UTILISATEUR.Prenom like "%$C2%"';
		}
		if (!isset($_POST[critere1]) And !isset($_POST[critere2]) and isset($_POST[critere3]) and !isset($_POST[critere4])){
			 $C3=$_POST[critere3];
			$sql.='AND UTILISATEUR.Age like "%$C3%"'; 
		}
		if (!isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and isset($_POST[critere4])){
			$C4=$_POST[critere4];
			$sql.='AND UTILISATEUR.Age like "%$C4%"'; // lorsqu un seul est coché
		}
		if (isset($_POST[critere1]) And isset($_POST[critere2]) and !isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (!isset($_POST[critere1]) And !isset($_POST[critere2]) and isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (isset($_POST[critere1]) And !isset($_POST[critere2]) and !isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql='';
		}
		if (!isset($_POST[critere1]) And isset($_POST[critere2]) and isset($_POST[critere3]) and !isset($_POST[critere4])){
			$sql='';
		}
		if (!isset($_POST[critere1]) And isset($_POST[critere2]) and !isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql='';
		}
		if (!isset($_POST[critere1]) And !isset($_POST[critere2]) and isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql=''; // on coche deux a la fois

		}
		if (isset($_POST[critere1]) And isset($_POST[critere2]) and isset($_POST[critere3]) and 
			!isset($_POST[critere4])){
			$sql=''; 
		}
		if (isset($_POST[critere1]) And isset($_POST[critere2]) and !isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql=''; 

		}
		if (isset($_POST[critere1]) And !isset($_POST[critere2]) and isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql=''; 
		}
		if (!isset($_POST[critere1]) And isset($_POST[critere2]) and isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql=''; 
		} // QUAND ON COCHE 3 A LA FOIS
		if (isset($_POST[critere1]) And isset($_POST[critere2]) and isset($_POST[critere3]) and isset($_POST[critere4])){
			$sql=''; 
		} // QUAND ON COCHE LES 4 

		echo $sql;
		if ($_POST[critere1]=='' And $_POST[critere2]=='' and $_POST[critere3]=='' and $_POST[critere4]=='' and $_POST[recherche]=='') {
			echo'Veuillez selectionner une valeur';
			echo"<meta http-equiv='refresh' content='1; URL=Recherche.php'>";
		}

		

		//connexion a la bdd
		$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root');
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
		$req=$bdd->prepare($sql);
			 
		
		
	 ?>
</head>
<body>

</body>
</html>