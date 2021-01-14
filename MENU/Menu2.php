<?php 
	$connexionOk = false;
	$erreur = "";
	$login = "";
	$mdp = "";
	if (isset($_POST["submit"])) {
		if (empty($_POST['login']) || empty($_POST['mdp'])) {
			$connexionOk = false;
			$erreur = "L'adresse mail et/ou le mot de passe est vide! Veuillez réessayer.";
		} else {
			$connexionOk = true;
			$login = stripslashes($_POST['login']);
			// $login =  mysqli_real_escape_string($_POST['login']);
			// $mdp = mysqli_real_escape_string($_POST['mdp']);
			$mdp = stripslashes($_POST['mdp']);
		}
	}

	

	if ($connexionOk) {
		$bdd = new PDO('mysql:host=localhost;dbname=projeta1;port=3308', 'root', 'root'); 
		$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM UTILISATEUR WHERE Email = ? AND Mot_De_Passe = ?";
		$statement = $bdd -> prepare ($sql);
		$statement -> execute (array($login, $mdp));
		$donnees = $statement->fetch();
		$resultat = $statement -> rowCount();
		if ($resultat == 1) {
			$erreur = "Bienvenue " .$donnees["Prenom"]. " :)";
			$_SESSION['UTILISATEUR'] = $statement->fetchAll(PDO::FETCH_NUM);
			echo "<meta http-equiv='refresh'content='1;URL=../Admin/Accueil/admin.php'>";
		} else {
			$erreur = "Email et/ou Mdp incorrect(s)";
		}
	}
?>
<!DOCTYPE html>
	<!-- <img src="safari.jpg">-->
		<!-- <img src= "https://moodle.isep.fr/moodle/pluginfile.php/10999/mod_resource/content/1/Infinite_measures.gif"> -->
	<head>
		<link rel ="stylesheet" type="text/css" href="Menu.css">
		<meta charset="UTF-8"> 	
	</head>
	
	<body style="text-align : center">
		<div id="img">
			<image src= "noir.png"></image>
		</div>
		<div id="divmenu">
			<Titre>INFINITE MEASURES</Titre>
			<br><br>
			<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
				<label for="login"></label>
				<input type="Email" required id="login" name='login' placeholder="Email" value="<?php echo $login; ?>">
				<br><br>
				<label for="mdp"></label>
				<input type="password" required id="mdp" name='mdp' placeholder="Mot de passe" value="<?php echo $mdp; ?>">
				<br><br>
				<input type="checkbox">
				<memory type="text">
					Se souvenir de moi
				</memory>
				<br><br>
				<input id='submit' type="submit" name='submit'>
				<br><br>
				<span style="color: red;"><?php echo $erreur; ?></span>
			</form>
		</div>
			<br>
			<mdp type="button" onclick=href="mdp.html" >
				<a href="mdp.html" style="color:lightskyblue"> Mot de passe oublié ? </a>
			</mdp>			
			<!-- <input class="champ" type="text" /> -->
	</body>
	<footer>
		<!-- <translate>
			<img src= "https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fd%2Fd7%2FGoogle_Translate_logo.svg%2F1024px-Google_Translate_logo.svg.png&imgrefurl=https%3A%2F%2Ffr.m.wikipedia.org%2Fwiki%2FFichier%3AGoogle_Translate_logo.svg&tbnid=qWX8AJK3g3RFpM&vet=12ahUKEwjuxJiOusrsAhXH34UKHRujDeAQMygAegUIARCgAQ..i&docid=oG3s1C1v7o6OWM&w=1024&h=1024&q=translate%20logo&ved=2ahUKEwjuxJiOusrsAhXH34UKHRujDeAQMygAegUIARCgAQ">

		</translate> -->
	</footer>
</html>
<?php
			$sql='';
			$sql2='';
				// 	$_SESSION['UTILISATEUR'] = $statement->fetchAll(PDO::FETCH_NUM);
				// 	if($donnees['Type']=='admin' or $donnees['Type']=='gestionnaire'){
				// 	if (isset($_SESSION['UTILISATEUR'])) {
				// 			$estconnecte = TRUE ;
				// 			$_SESSION['utilisateurConnecte' ] = $estconnecte;
				// 			echo ' Vous etes connectés';
				// 			echo "<meta http-equiv='refresh'content='1;URL=../Admin/Accueil/admin.php'>";//changer la redirection mettre la nouvelle page
				// 		}
				// 	}

				// 		elseif($donnees['Type']=='user'){
				// 		if (isset($_SESSION['UTILISATEUR'])) {

				// 			$estconnecte = TRUE ;
				// 			$_SESSION['utilisateurConnecte' ] = $estconnecte;
				// 			echo ' Vous etes connectés';
				// 			echo "<meta http-equiv='refresh'content='1;URL=../User/User/User.php'>";//changer la redirection mettre la nouvelle page
				// 		}
				// 	}
				// 		else {
				// 			$estconnecte =FALSE ;
				// 			$_SESSION [ 'utilisateurConnecte' ] = $estconnecte ;
				// 			echo "<meta http-equiv='refresh'content='1;URL=Menu.php'>";
				// 			echo 'Vous n etes pas connectes';
				// 		}
				// 	}
				// }
		// }
		
?>
