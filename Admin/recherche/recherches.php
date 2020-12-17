<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="recherche.css">
    <title>Recherche</title>
</head>

<body>
<!-- <a href="page_8.html" class="change_page"></a> -->

<div class="content">
    <header>
        <div id="box_0">
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../Accueil/admin.html">
                            <image src= "logo-alex_Plan de travail 1.png"></image>
                        </a>
                   </li>
                </ul>
                
            </div>
            <div class="box_0_element">Lombroso</div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="">
                            <image src= "user.png"></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="under_header">
        
        <div class="aside_nav">
            <section>

            	<script>
				function myFunction() {
				  var checkBox = document.getElementById("checkme");
				  var text = document.getElementById("criteres");
				  var soumettre1 = document.getElementById("soumettre1")
				  var tzst = document.getElementById("test")
				  if (checkBox.checked == true){
				    text.style.display = "block";
				    soumettre1.style.display == "none";
				  } else {
				     text.style.display = "none";
				     soumettre1.style.display == "block";
				  }
				}
				</script>
                
                <form action= 'resultat.php' method="post" id="recherche">
                		<s>RECHERCHE</s> <br> <br>
				<input type="search" name="recherche" id="recherche" placeholder="Recherche"/> <br> <br>
				<form id="soumettre1" style="display: block;"> 
						<input type="submit" id="test" value = " SOUMETTRE ">
				</form> <br> 
				<div>Recherche multicritère

					<input type="checkbox" id="checkme" onclick="myFunction()"/></div>
				</form>
				<form id="criteres" action= 'resultat.php' method="post" style="display: none"> <br>
				<input type="text" name="critere1" id="critere1" placeholder="Nom" /><br> <br>
				<input type="text" name="critere2" id="critere2" placeholder="Prenom"/><br> <br>
				<input type="number" name="critere3" id="critere3" placeholder="Age"/><br> <br>
				<select name="critere4" id="critere4"> 
					<option value="">Sexe</option>
				    <option value="F">F</option>
				    <option value="M">M</option>
				</select><br> <br>
				<input type="submit" name="soumettre2" Value=" SOUMETTRE">
				</form>
                
            </section>
        </div>
    </div>
    <footer>
        <div id="box_1">
            <div class="box_1_element"><a href="../CGU/CGU.html" style="color:black">Consulter les CGU</a></div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../mail/mail.html">
                            <image src= "email.png"></image>
                        </a>
                   </li>
                </ul>
            </div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../FAQ/FAQ.html">
                            <image src= "help.png"></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<!-- <a href="page_10.html" class="change_page"></a> -->
</body>
</html>