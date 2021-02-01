<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel ="stylesheet" type="text/css" href="tick.css">
<head>
	<title>Tick</title>
	<!-- <meta http-equiv="refresh" content="7; URL=http://www.manouvelleadresse.com"> -->
</head>
<body>
	
	<script type="text/javascript">
		var sec = 5;
		
		function miseEnAttente()
		{
		 //Traitement
		 setTimeout(tick, 3000); //On attend 5 secondes avant d'exécuter la fonction
		}
		
		function tick()
	    {

	        document.getElementById('decompte').innerHTML = "<br>" + 'Vous êtes prêts ? Le test démarre dans: ' + "<br>" + "<br>" + sec ;
	         
	        if(sec == 0)
	        {
	        	// header('page.html');
	        	document.location.href="test1.php"
	            // document.getElementById('decompte').innerText = 'Terminé !';
	            // document.getElementById('cache').style.display = 'block';
	            window.clearInterval(timer);
	        }
	 
	        sec--;
	    }
	    var timer = window.setInterval(tick, 1000);
	</script>
	<div id="decompte"><!-- Activez JavaScript --></div>
	<!-- <div id="cache" style="display: none;">
	    <a href="<?php echo $_GET['url']; ?>"> <?php echo $_GET['url']; ?></a> -->
</body>
</html>