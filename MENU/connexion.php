	<?php 
		session_start();
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Page de recuperation des données de connexion</title>
		<?php
			$sql='emma';

			$ok=TRUE;
			if($_GET['mdp']=="") {
				echo "Le mot de passe n'a pas été saisi"."<br>";
				echo "<meta http-equiv='refresh'content='3;URL=Menu.html'>";
				$ok=FALSE;
			}
			if($_GET['login']=="") {
				echo "L'adresse mail n'a pas été saisie"."<br>";
				echo "<meta http-equiv='refresh'content='3;URL=Menu.html'>";	
				$ok=FALSE;
			}// GESTION DES ERREURS SUR LE MOT DE PASSE ET L EMAIL

			if($ok==TRUE){
				$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root');

				$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
				$sql="select email, Mot_De_Passe FROM UTILISATEUR ";
				$statement = $bdd -> prepare ( $sql );
				$statement -> execute ();

				$_SESSION['UTILISATEUR'] = $statement->fetchAll(PDO::FETCH_NUM);
			
				if (isset($_SESSION['UTILISATEUR'])) {

					$estconnecte = TRUE ;
					$_SESSION['utilisateurConnecte' ] = $estconnecte;
					echo ' connectes';
					echo "<meta http-equiv='refresh'content='3;URL=../profiladmin/Profiladmin.php'>";
				}
				else {
					$estconnecte =FALSE ;
					$_SESSION [ 'utilisateurConnecte' ] = $estconnecte ;
					echo "<meta http-equiv='refresh'content='3;URL=Menu.html'>";
					echo 'Vous netes pas connectes';
				}

			}

			
			
			

		?>
	</head>
	<body>

	</body>
	</html>