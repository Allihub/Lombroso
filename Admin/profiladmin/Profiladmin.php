<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="profiladmin.css">
	<title>Profil Admin</title>
</head>

<body>


<div class="content">
    <header>
        <div id="box_0">
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../Accueil/admin.html">
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
                <a href="../recherche/recherches.php" style="color:black" title="Aide">Recherche </a>
				<form action="Adduser.php" method="post">
                <p><input type="text" name="mail" id="mail" placeholder="mail" /></p>
				<p><input type="text" name="nom" id="nom" placeholder="NOM" /></p>
				<p><input type="text" name="prenom" id="prenom" placeholder="Prénom" /> </p>
				<p><input type="text" name="mdp" id="mdp" placeholder="Mot de passe"/></p>
                <p><input type="text" name="age" id="age" placeholder="Âge" /></p>
				<p><input type="text" name="test" id="test" placeholder="Dernier test effectué le :"/></p>
				<p><input type="text" name="resultat" id="resultat" placeholder="Résultat du dernier test :"/></p>
				<p><select name="role" id="role" placeholder="Rôle">
					<option value="admin">Administrateur</option>
					<option value="testeur">Testeur</option>
					<option value="teste">Testé</option>
				</select></p>
				<p><input type="submit" value="Ajouter ce profil" name="ajouter" id="ajouter" /></p>
                    <input type="submit" value="Supprimer ce profil" name="supprimer" id="supprimer" />
                    <input type="submit" value="Enregistrer les modifications" name="modifier" id="modifier" />
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
</body>