<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="recherche.css">
    <script src="recherche.js"></script>
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
                        <a href="../Accueil/admin.php">
                            <image src= "logo-alex_Plan de travail 1.png" title="Menu"></image>
                        </a>
                   </li>
                </ul>
                
            </div>
            <div class="box_0_element"><a href="../Aide/aide.html" style="color:black" title="Aide">Lombroso </a></div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../profiladmin/profiladmin.php">
                            <image src= "user.png" title="Profil"></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="under_header">
        
        <div class="aside_nav">
            <section>
                <form name="form1" action= 'resultat.php' method="post" id="recherche" onsubmit="return verif_champ(document.form1.recherche.value);">
                		<s>RECHERCHE</s> <br> <br>
				<input type="search" name="recherche" id="recherche" placeholder="exemple@mail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/> <br> <br>
				<form id="soumettre1" style="display: block;"> 
						<input type="submit" id="test" value = " SOUMETTRE ">
				</form> <br> 
				<div>Recherche multicritère

					<input type="checkbox" id="checkme" onclick="check()"/></div>
                </form>
				<form name="form2" id="criteres" action= 'multi.php' method="post" style="display: none" onsubmit="return verifmulti(document.form2.critere1.value, document.form2.critere2.value, document.form2.critere3.value, document.form2.critere4.value);"> <br>
				<input type="text" name="critere1" id="critere1" placeholder="Nom" /><br> <br>
				<input type="text" name="critere2" id="critere2" placeholder="Prenom"/><br> <br>
				<input type="number" name="critere3" id="critere3" placeholder="Age" max="110"/><br> <br>
				<select name="critere4" id="critere4">
                    <option value="">Non spécifié</option>
				    <option value="F">F</option>
				    <option value="M">M</option>
                    <option value="Autre">Autre</option>
				</select><br> <br>
				<input type="submit" name="soumettre2" Value=" SOUMETTRE">
				</form>
                
            </section>
        </div>
    </div>
    <footer>
        <div id="box_1">
            <div class="box_1_element"><a href="../CGU2/CGU.html" style="color:black" title="CGU">Consulter les CGU</a></div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../mail/mail.html">
                            <image src= "email.png" title="Mail"></image>
                        </a>
                   </li>
                </ul>
            </div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../FAQ/FAQ.html">
                            <image src= "help.png" title="FAQ"></image>
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