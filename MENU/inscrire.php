<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>

	<html>

		<!-- <img src="safari.jpg">-->
		 
			<!-- <img src= "https://moodle.isep.fr/moodle/pluginfile.php/10999/mod_resource/content/1/Infinite_measures.gif"> -->
		
		<link rel ="stylesheet" type="text/css" href="Inscrire.css">
	    <head>
			
			<meta charset="UTF-8"> 
			<div id="img">
				<image src= "noir.png"></image>
			</div>	
		</head>
		
		<body style="text-align : center">
	    
			<div id="divmenu">
			
		   	<Titre>INFINITE MEASURES</Titre>
			<br><br>
			<form action='demande.php' method='post'>
			<label for="login"> </label>
			<input type="Email" id="login" name='login' onchange="" placeholder="Email" >
			<br><br>
			
			<label for="Nom"> </label>
			<input type="text" id="Nom" name='Nom' placeholder="Nom">
            
            <br><br>

            <label for="Prenom"> </label>
			<input type="text" id="Prenom" name='Prenom' placeholder="Prenom">

			<br>

			<p><input type="text" name="age" id="age" placeholder="Âge" pattern="[0-9]*" /></p>

			

			<p><select name="sexe" id="sexe">
				<option value="">Sexe</option>
				<option value="F">Femme</option>
				<option value="M">Homme</option>
				<option value="Autre">Autre</option>
			</select></p>
			
			


			
			
			
			<br><br>
			<input id='sub' type="submit" value ='DEMANDER' onclick="return verif(form.login.value, form.Nom.value, form.Prenom.value, form.age.value, form.sexe.value);">
				
            <br><br>

			<subscribe type="text">
				<a href="Menu.php" style="color:lightskyblue"> Se connecter </a>
			</subscribe>
			
			</div>
				</form>
			<br>
			
		 
			<!-- <input class="champ" type="text" /> -->

			<script>
				function verif(login, Nom, Prenom, age, sexe)
				{
						if (login =="" || Nom =="" || Prenom =="" || age ==""|| sexe =="")
					{ alert("Merci de remplir tous les champs pour pouvoir demander l'inscription");
						return false;
					}
					return true;
				}
			</script>
		
		</body>
		<footer>
			<!-- <translate>
				<img src= "https://www.google.com/imgres?imgurl=https%3A%2F%2Fupload.wikimedia.org%2Fwikipedia%2Fcommons%2Fthumb%2Fd%2Fd7%2FGoogle_Translate_logo.svg%2F1024px-Google_Translate_logo.svg.png&imgrefurl=https%3A%2F%2Ffr.m.wikipedia.org%2Fwiki%2FFichier%3AGoogle_Translate_logo.svg&tbnid=qWX8AJK3g3RFpM&vet=12ahUKEwjuxJiOusrsAhXH34UKHRujDeAQMygAegUIARCgAQ..i&docid=oG3s1C1v7o6OWM&w=1024&h=1024&q=translate%20logo&ved=2ahUKEwjuxJiOusrsAhXH34UKHRujDeAQMygAegUIARCgAQ">

			</translate> -->
		</footer>
		
	</html>