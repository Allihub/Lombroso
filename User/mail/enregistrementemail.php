<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>enregistrement mail</title>

	<?php
		if($_POST['cemail']==""){
			echo "<meta http-equiv='refresh'content='0;URL=mail.php'>";
		}
		else{
			
    		$bdd= new PDO('mysql:host=localhost;dbname=ProjetA1', 'root', 'root');

			$bdd -> setAttribute (PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
			$sql="UPDATE utilisateur
					SET email2 = ?
					WHERE email=?";
					
			$statement = $bdd -> prepare ( $sql );
			$statement -> execute (array($_POST['cemail'],$_POST['login']));

			$donnees =$statement->fetch();

		}
		//respecter la forme de l emaail, enregistrer en bd si tout est ok+msg d enreg.	 ?>
</head>
<body>

</body>
</html>