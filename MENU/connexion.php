		<?php 
			session_start();
		?>

		<!DOCTYPE html>
		<html>
		<head>
			<title>Page de recuperation des données de connexion</title>
			<?php
				$sql='';
				$sql2='';
				$ok=TRUE;
				if($_POST['mdp']=="") {
					echo "Le mot de passe n'a pas été saisi"."<br>";
					echo "<meta http-equiv='refresh'content='1;URL=Menu.php'>";
					$ok=FALSE;
				}

				if($_POST['login']=="") {
					echo "L'adresse mail n'a pas été saisie"."<br>";
					echo "<meta http-equiv='refresh'content='1;URL=Menu.php'>";

					$ok=FALSE;
				}// GESTION DES ERREURS SUR LE MOT DE PASSE ET L EMAIL

				if($ok==TRUE){
					$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root');
					$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
					$sql="select email, Mot_De_Passe, Type FROM utilisateur  WHERE email LIKE ?";
					
					$statement = $bdd -> prepare ( $sql );
					$statement -> execute (array($_POST['login']));

					$donnees =$statement->fetch();

					$testmdp = password_verify ( $_POST['mdp'] , $donnees['Mot_De_Passe']);

					if($_POST['login']!=$donnees['email'] or !$testmdp){
						ECHO"Votre adresse email ou mot de passe est incorrect";
						echo'<br>';
						echo"<meta http-equiv='refresh'content='3;URL=Menu.php'>";
					}

					else{
					
					$_SESSION['UTILISATEUR'] = $statement->fetchAll(PDO::FETCH_NUM);
					$_SESSION['enreg']=$_POST['login'];
					echo $_SESSION['enreg'];

					if($donnees['Type']=='administrateur' or $donnees['Type']=='gestionnaire'){
					if (isset($_SESSION['UTILISATEUR'])) {

						$estconnecte = TRUE ;
						$_SESSION['utilisateurConnecte' ] = $estconnecte;
						echo ' Vous etes connectés';
						echo "<meta http-equiv='refresh'content='1;URL=../Admin/Accueil/admin.php'>";//changer la redirection mettre la nouvelle page
					}

				}

					elseif($donnees['Type']=='user'){
					if (isset($_SESSION['UTILISATEUR'])) {

						$estconnecte = TRUE ;
						$_SESSION['utilisateurConnecte' ] = $estconnecte;
						echo ' Vous etes connectés';
						echo "<meta http-equiv='refresh'content='1;URL=../User/User/User.php'>";//changer la redirection mettre la nouvelle page
					}
				}
					else {
						$estconnecte =FALSE ;
						$_SESSION [ 'utilisateurConnecte' ] = $estconnecte ;
						echo "<meta http-equiv='refresh'content='4;URL=Menu.php'>";
						echo 'Vous n etes pas connectes';

					}
						
				}

				}
				
				

			?>
		</head>
		<body>

		</body>
		</html>