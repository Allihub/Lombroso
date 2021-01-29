<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>enregistrement mail</title>

	<?php
	
		if($_POST['cemail']==""){
			echo "<meta http-equiv='refresh'content='0;URL=mailu.php'>";
		}
		else{
			
    		$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root');

			$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
			$sql="UPDATE utilisateur SET email2 = ? WHERE email=?";
			$statement = $bdd -> prepare ( $sql );
			$statement -> execute (array($_POST['cemail'],$_SESSION['enreg']));
			echo'VOTRE ADRESSE E-MAIL SECONDAIRE A BIEN ETE ENREGISTRÉE';
		    echo "<meta http-equiv='refresh'content='2;URL=../User/User.php'>";
		}
		//respecter la forme de l emaail, enregistrer en bd si tout est ok+msg d enreg.	 ?>
</head>
<body>

</body>
</html>