<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<?php
if(isset($_POST['mailform']))
{

$header="MIME-Version: 1.0\r\n";
$header.='From:"Infinites mesures Contact"'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			
			J\'ai envoyé ce mail avec PHP !
		
			
		</div>
	</body>
</html>
';

mail("rayhanch28@gmail.com", "J'ai vu ton tuto, et merci!", $message, $header);
}
?>
<form method="POST" action="">
	<input type="submit" value="Recevoir un mail !" name="mailform"/>
</form>