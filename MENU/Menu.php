<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
	<!DOCTYPE html>

	<html>

		<!-- <img src="safari.jpg">-->
		 
			<!-- <img src= "https://moodle.isep.fr/moodle/pluginfile.php/10999/mod_resource/content/1/Infinite_measures.gif"> -->
		
		<link rel ="stylesheet" type="text/css" href="Menu.css">
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
			<form action='connexion.php' method='post'>
			<label for="login"> </label>
			<input type="Email" id="login" name='login' onchange="" placeholder="Email" >
			<br><br>
			
			<label for="mdp"> </label>
			<input type="password" id="mdp" name='mdp' placeholder="Mot de passe">
			

			<br>
			
			
			
			
			
			
			
			<br><br>
			<input id='login' type="submit" value ='LOGIN'>
				
			<br><br>
			
			<subscribe type="text">
				<a href="inscrire.php" style="color:lightskyblue"> S'inscrire </a>
			</subscribe>

			
			
			</div>
				</form>
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
