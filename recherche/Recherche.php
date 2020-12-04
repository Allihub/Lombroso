<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="recherchecss.css">
<!--<script type="text/javascript" src="recherche.js"></script>-->
<title>Recherche</title>
</head>
<body>
<img id="logo" src="logo.png">
<img id="profilpic" src="profil.jpg"> 


<script>
function myFunction() {
  var checkBox = document.getElementById("checkme");
  var text = document.getElementById("criteres");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>

<br>
	<form action= 'resultat.php' method="post" id="recherche">

	<input type="search" name="recherche" id="recherche" placeholder="Recherche"/>
	<input type="submit"  value = " SOUMETTRE ">
	<div>Recherche multicritère

		<input type="checkbox" id="checkme" onclick="myFunction()"/></div>
	</form>
	<form id="criteres" action= 'resultat.php' method="post" style="display: none">
	<input type="text" name="critere1" id="critere1" placeholder="Nom" /><br>
	<input type="text" name="critere2" id="critere2" placeholder="Prenom"/><br>
	<input type="number" name="critere3" id="critere3" placeholder="Age"/><br>
	<select name="critere4" id="critere4"> 
		<option value="critere4">Sexe</option>
	    <option value="F">F</option>
	    <option value="M">M</option>
	</input> <br>
	<input type="submit" Value=" SOUMETTRE">
	</form>
	<div>
	<a href="cgu.html" id="cgu">Consulter les CGU</a>
	<img id="faq" src="faq.png">
	<img id="mail" src="mail.png">
	</div>
</body>
</html>