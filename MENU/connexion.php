		<?php 
			session_start();
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>Page de recuperation des données de connexion</title>
			<?php
				$sql='';

				$ok=TRUE;
				if($_POST['mdp']=="") {
					echo "Le mot de passe n'a pas été saisi"."<br>";
					echo "<meta http-equiv='refresh'content='3;URL=Menu.html'>";
					$ok=FALSE;
				}

				if($_POST['login']=="") {
					echo "L'adresse mail n'a pas été saisie"."<br>";
					echo "<meta http-equiv='refresh'content='3;URL=Menu.php'>";

					$ok=FALSE;
				}// GESTION DES ERREURS SUR LE MOT DE PASSE ET L EMAIL

				if($ok==TRUE){
					$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root');

					$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
					$sql="select email, Mot_De_Passe FROM UTILISATEUR  WHERE Type='admin' AND email LIKE ? AND Mot_De_Passe like?";
					
					$statement = $bdd -> prepare ( $sql );
					$statement -> execute (array($_POST['login'],$_POST['mdp']));

					$donnees =$statement->fetch();

					if($_POST['login']!=$donnees['email'] or $_POST['mdp']!=$donnees['Mot_De_Passe']){
						ECHO"Votre adresse email ou mot de passe est incorrect";
						echo'<br>';
						echo"<meta http-equiv='refresh'content='3;URL=Menu.php'>";
					}


					else {
					$_SESSION['UTILISATEUR'] = $statement->fetchAll(PDO::FETCH_NUM);
				
					if (isset($_SESSION['UTILISATEUR'])) {

						$estconnecte = TRUE ;
						$_SESSION['utilisateurConnecte' ] = $estconnecte;
						echo ' Vous etes connectés';
						echo "<meta http-equiv='refresh'content='3;URL=../profiladmin/Profiladmin.php'>";
					}
					else {
						$estconnecte =FALSE ;
						$_SESSION [ 'utilisateurConnecte' ] = $estconnecte ;
						echo "<meta http-equiv='refresh'content='3;URL=Menu.php'>";
						echo 'Vous n etes pas connectes';
					}

				}

				}
				
				

			?>
		</head>
		<body>

		</body>
		</html>