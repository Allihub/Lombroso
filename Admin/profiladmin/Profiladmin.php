<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="profiladmin.css">
    <script type="text/javascript" src="profiladmin.js"></script>
	<title>Profil Admin</title>
</head>
<body>
<div class="content">
    <header>
        <div id="box_0">
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../User/User.html">
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
                
				<form name="form" action="Adduser.php" method="post">
                <p><input type="text" name="mail" id="mail" placeholder="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /></p>
				<p><input type="text" name="nom" id="nom" placeholder="Nom" pattern="[a-zA-ZÀ-ÿ]" /></p>
				<p><input type="text" name="prenom" id="prenom" placeholder="Prénom" pattern="[a-zA-ZÀ-ÿ]" /> </p>
				<p><input type="text" name="mdp" id="mdp" placeholder="Mot de passe"/></p>
                <p><input type="text" name="age" id="age" placeholder="Âge" pattern="[0-9]" /></p>
				<p><input type="text" name="test" id="test" placeholder="Dernier test effectué le :"/></p>
				<p><input type="text" name="resultat" id="resultat" placeholder="Résultat du dernier test :"/></p>
                <p><select name="sexe" id="sexe">
                    <option value="">Non spécifié</option>
                    <option value="F">Femme</option>
                    <option value="M">Homme</option>
                    <option value="Autre">Autre</option>
                </select></p>
				<p><select name="role" id="role" placeholder="Rôle">
                    <option value="">Non spécifié</option>
					<option value="administrateur">Administrateur</option>
					<option value="testeur">Testeur</option>
					<option value="teste">Testé</option>
				</select></p>
				<p><input type="submit" value="Ajouter ce profil" name="ajouter" id="ajouter" onclick="return verif(document.form.mail.value, document.form.nom.value, document.form.prenom.value, document.form.mdp.value, document.form.age.value, document.form.sexe.value, document.form.role.value);" />
                    <input type="submit" value="Enregistrer les modifications" name="modifier" id="modifier" /></p>
                    <p><input type="submit" value="Supprimer ce profil" name="supprimer" id="supprimer" />
                    <input type="submit" value="Bannir l'utilisateur" name="ban" id="ban" onclick="return sure();"/></p>
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
</body>