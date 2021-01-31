<!DOCTYPE html>

<html>
<head>
	<?php
	if(isset($_POST['sup']))
	{
		// echo 'coucou' . $_POST['question'];

		try {
			$bdd = new PDO('mysql:host=localhost;dbname=lombroso;charset=utf8', 'root', '');
		} catch (Exception $e) {
			die('Erreur : ' . $e->getMessage());
        }//Connexion classqiue à la bdd
        
        // $id = $_POST['sup']

		$req = $bdd->prepare('DELETE FROM faq WHERE faq.Numero_Question = ?');
        $req->execute(array(htmlspecialchars($_POST['sup'])));
		header("Refresh:3; url=FAQ.php");
}
    
?>
<link rel="stylesheet" href="main.css">

<h1> Merci d'avoir supprimé une question à la FAQ!</H1></head>
<meta charset="utf-8">


<div  class="remerciement"> 
	 <image src= "logo-alex_Plan de travail 1.png" height=250px></image>
	 



	<p class="mot"> Bonjour , 

	 	La question vient d'être supprimée !





	 	Cordialement.
	 	Infinite Measures.

	 	</p>
</div>