<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<?php
	session_start();
	session_destroy();
	echo "Vous êtes déconnectés";
	echo "<meta http-equiv='refresh'content='3;URL=Menu.php'>";
?>
<!DOCTYPE html>

<html>

	<head>
		<meta charset="UTF-8">
		<title>Déconnexion</title>
		
	</head>


</html>
