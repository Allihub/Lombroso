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
				if(empty($_POST['mdp'])) {

					// echo "Le mot de passe n'a pas été saisi"."<br>";
					// echo "<meta http-equiv='refresh'content='1;URL=Menu.html'>";
					$ok=FALSE;
				}

				if(empty($_POST['login'])) {
					echo "L'adresse mail n'a pas été saisie"."<br>";
					echo "<meta http-equiv='refresh'content='1;URL=Menu.php'>";

					$ok=FALSE;
					// OS7CDC@SN^X(cZSBtEgr : mot de passe pour acceder au serveur 
					// o)JfQ/Qb/3qLXSp\ : mot de passe pour acceder a la base de données evec le surnom ProjetA1final
				}// GESTION DES ERREURS SUR LE MOT DE PASSE ET L EMAIL

				if($ok==TRUE){
					
					try {
					    $bdd = new PDO('mysql:dbname=bdd_definitive;host=https://databases-auth.000webhost.com/db_structure.php?server=1&db=id15832124_projeta1', 'root', 'root');
					} catch (PDOException $e) {
					    echo 'Connexion échouée : ' . $e->getMessage();
					}
					$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
					$sql="select email, Mot_De_Passe, Type FROM UTILISATEUR  WHERE email LIKE ? AND Mot_De_Passe like?";
					
					$statement = $bdd -> prepare ( $sql );
					$statement -> execute (array($_POST['login'],$_POST['mdp']));

					$donnees =$statement->fetch();

					if($_POST['login']!=$donnees['email'] or $_POST['mdp']!=$donnees['Mot_De_Passe']){
						ECHO"Votre adresse email ou mot de passe est incorrect";
						echo'<br>';
						echo"<meta http-equiv='refresh'content='3;URL=Menu.php'>";
					}

					else{
					
					$_SESSION['UTILISATEUR'] = $statement->fetchAll(PDO::FETCH_NUM);

					if($donnees['Type']=='admin' or $donnees['Type']=='gestionnaire'){
					if (isset($_SESSION['UTILISATEUR'])) {

						$estconnecte = TRUE ;
						$_SESSION['utilisateurConnecte' ] = $estconnecte;
						echo ' Vous etes connectés';
						echo "<meta http-equiv='refresh'content='1;URL=../Admin/Accueil/admin.html'>";//changer la redirection mettre la nouvelle page
					}
				}

					elseif($donnees['Type']=='user'){
					if (isset($_SESSION['UTILISATEUR'])) {

						$estconnecte = TRUE ;
						$_SESSION['utilisateurConnecte' ] = $estconnecte;
						echo ' Vous etes connectés';
						echo "<meta http-equiv='refresh'content='1;URL=../User/User.php'>";//changer la redirection mettre la nouvelle page
					}
				}
					else {
						$estconnecte =FALSE ;
						$_SESSION [ 'utilisateurConnecte' ] = $estconnecte ;
						echo "<meta http-equiv='refresh'content='1;URL=Menu.php'>";
						echo 'Vous n etes pas connectes';

					}

				}

				}
				
				

			?>
		</head>
		<body>

		</body>
		</html>