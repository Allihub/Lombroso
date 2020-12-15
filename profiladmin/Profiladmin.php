<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="profiladmin.css">
<title>Profil Admin</title>
</head>
<body>
	<div class='bouton'>
		<?php
		
		echo "<a href='../MENU/deconnexion.php' >Se déconnecter</a>"."<br>";
		
		?>
	</div>
	<img id="logo" src="logo.png">
	<img id="profilpic" src="profil.jpg">
	<form action='suppression.php' method='get'>
	<p><input type="text" name="nom" id="nom" placeholder="NOM" /></p>
	<p><input type="text" name="prenom" id="prenom" placeholder="Prénom" /> </p>
	<p><input type="text" name="age" id="age" placeholder="Âge" /></p>
	<p><input type="text" name="idd" id="idd" placeholder="Identifiant"/></p>
	<p><input type="text" name="test" id="test" placeholder="Dernier test effectué le :"/></p>
	<p><input type="text" name="resultat" id="resultat" placeholder="Résultat du dernier test :"/></p>
	<p><select name="role" id="role" placeholder="Rôle">
		<option value="admin">Administrateur</option>
		<option value="testeur">Testeur</option>
		<option value="teste">Testé</option>
	</select></p>
	<p><input type="submit" value="Supprimer ce profil" name="supprimer" id="supprimer" /></p>
	</form>
</body>