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
			 