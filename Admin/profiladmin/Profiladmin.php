<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
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
                        <a href="../Accueil/admin.php">
                            <image src= "logo-alex_Plan de travail 1.png" title="Menu"></image>
                        </a>
                   </li>
                </ul>
                
            </div>
            <div class="box_0_element"><a href="../Aide/aide.html" style="color:black;font-size:30px;text-decoration:none" title="Aide">Aide </a></div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../profiladmin/profil.php">
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
                
                <form name="form" action="Adduser.php" method="post">
                <p><input type="text" name="mail" id="mail" placeholder="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" /></p>
                <p><input type="text" name="nom" id="nom" placeholder="Nom" pattern="[a-zA-ZÀ-ÿ]*" /></p>
                <p><input type="text" name="prenom" id="prenom" placeholder="Prénom" pattern="[a-zA-ZÀ-ÿ]*" /> </p>
                <p><input type="password" name="mdp" id="mdp" placeholder="Mot de passe"/></p>
                <p><input type="text" name="age" id="age" placeholder="Âge" pattern="[0-9]*" /></p>
                <p><select name="sexe" id="sexe">
                    <option value="">Non spécifié</option>
                    <option value="F">Femme</option>
                    <option value="M">Homme</option>
                    <option value="Autre">Autre</option>
                </select></p>
                <p><select name="role" id="role" placeholder="Rôle">
                    <option value="">Non spécifié</option>
                    <option value="administrateur">Administrateur</option>
                    <option value="gestionnaire">Gestionnaire</option>
                    <option value="user">Utilisateur</option>
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
                        <a href="../FAQ/FAQ.php">
                            <image src= "help.png" title="FAQ"></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</body>