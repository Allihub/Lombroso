<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>

<html>
<head>
	<?php
	if(isset($_POST['question']))
	{
		// echo 'coucou' . $_POST['question'];

		try {
			$bdd = new PDO('mysql:host=localhost;dbname=lombroso;charset=utf8', 'root', '');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
		}//Connexion classqiue à la bdd

		$req = $bdd->prepare('INSERT INTO faq (Intitule, Contenu) VALUES(?, ?)');
        $req->execute(array(htmlspecialchars($_POST['question']), htmlspecialchars($_POST['reponse'])));
		header("Refresh:3; url=FAQ.php");
}
    
?>
<link rel="stylesheet" href="main.css">

<h1> Merci d'avoir ajouté une question à la FAQ!</H1></head>
<meta charset="utf-8">


<div  class="remerciement"> 
	 <image src= "logo-alex_Plan de travail 1.png" height=250px></image>
	 



	<p class="mot"> Bonjour , 

	 	La question vient d'être ajoutée !





	 	Cordialement.
	 	Infinite Measures.

	 	</p>
</div>