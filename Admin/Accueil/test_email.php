<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel ="stylesheet" type="text/css" href="tick.css">
<head>
	<title>Verify</title>
</head>
<body>
	
	<?php
		session_start();
		try {
		    $bdd = new PDO('mysql:host=localhost;dbname=lombroso;charset=utf8', 'root', '');
		} catch (Exception $e) {
		    die('Erreur : ' . $e->getMessage());
		}//Connexion classqiue à la bdd

		$mailcheck= $bdd->prepare('SELECT * FROM utilisateur WHERE email= ?');
		$mailcheck->execute(array(htmlspecialchars($_GET['email'])));
		$result = $mailcheck->fetch();
		$mailcheck = $result[0];
		if ($mailcheck == ""){
			echo "Aucun utilisateur trouvé pour: ".$_GET['email'];
			echo"<meta http-equiv='refresh'content='1.5;URL=admin.php'>";
		}
		else{
			echo "Vous démarrez un test pour: ".$_GET['email'];
			echo"<meta http-equiv='refresh'content='1.5;URL=tick.php'>";	
		}
	?>

</body>
</html>
