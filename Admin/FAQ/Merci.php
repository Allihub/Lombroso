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
	

	// $mail = $_POST["email"];
	

	// $message = $message . " Ce mail a été envoyé par: " . $mail;
	

   
    mail("infinitemesurescontact@gmail.com","message provenant de FAQ",$message,$header);
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