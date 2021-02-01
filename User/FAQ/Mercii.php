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


	
	$header="MIME-Version: 1.0\r\n";

	$header.="email";
	$header.='Content-Type:text/html; cahset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';
   
	$message= $_POST["question"];
	
	
   
	mail("infinitemesurescontact@gmail.com","message provenant de FAQ",$message,$header);
	
	header("Refresh:5; url=FAQ.php");
}
    
?>
<link rel="stylesheet" href="main.css">

<h1> Merci de nous avoir contacté!</H1></head>
<meta charset="utf-8">


<div  class="remerciement"> 
	 <image src= "logo-alex_Plan de travail 1.png" height=250px></image>
	 



	<p class="mot"> Bonjour , merci de nous avoir contacté. 

	 	Votre message <?php echo $message ?> nous est précieux et nous vous répondrons dans les plus brefs délais !





	 	Cordialement.
	 	Infinite Measures.

	 	</p>
</div>