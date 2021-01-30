<!DOCTYPE html>

<html>
<head>
	<?php
	if(isset($_POST['login']))
	{
    
    
	
	$header="MIME-Version: 1.0\r\n";

	$header.="email";
	$header.='Content-Type:text/html; cahset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';
   
    $mail = $_POST["login"];
    $nom = $_POST["Nom"];
    $prenom = $_POST["Prenom"];
    $age = $_POST["age"];
    $sexe = $_POST["sexe"];
	
    $message = "Email: " . $mail . "\n" . "Nom: " . $nom . "\n" . "Prénom: " . $prenom . "\n" . "Age: " . $age . "\n" . "Sexe: " . $sexe;
    // $message='
    // <html>
    //     <body>
    //         <div align="center">
                
    //             J\'ai envoyé ce mail avec PHP !
    //             
                
    //         </div>
    //     </body>
    // </html>
    // ';
    
    // echo $message;
   
	mail("infinitemesurescontact@gmail.com","Demande d'inscription",$message,$header);
	
	header("Refresh:5; url=Menu.php");
}
    
?>
<link rel="stylesheet" href="main.css">

<h1> Merci de nous avoir contacté!</H1></head>
<meta charset="utf-8">


<div  class="remerciement"> 
	 <image src= "logo-alex_Plan de travail 1.png" height=250px></image>
	 



	<p class="mot"> Bonjour , merci de nous avoir contacté. 

	 	Votre demande d'inscription a été prise en compte !





	 	Cordialement.
	 	Infinite Measures.

	 	</p>
</div>