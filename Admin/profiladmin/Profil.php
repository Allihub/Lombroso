<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
	<link rel="stylesheet" type="text/css" href="profil.css">
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
            <div class="box_0_element"><a href="../Aide/aide.html" style="color:black" title="Aide">Lombroso </a></div>
            <div class="box_0_element">
                <ul>
                    <li>
                        <a href="../profiladmin/profiladmin.php">
                            <image src= "add-user.png" title="Profil"></image>
                        </a>
                   </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="under_header">
        
        <div class="aside_nav">
            <section>
                
                <p>
                    Role : Administrateur <br>
                    Nom : <?php echo $_SESSION['prenom']; ?> <br>
                    Prenom : <?php echo $_SESSION['nom']; ?> <br>
                    Age : <?php echo $_SESSION['age']; ?> <br>
                    Email : <?php echo $_SESSION['mail']; ?> <br>
                
                
                
            </section>
        </div>
    </div>
    <footer>
        <div id="box_1">
            <div class="box_1_element"><a href="../CGU2/CGU.html" style="color:black" title="CGU">Consulter les CGU</a></div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../mail/mail.php">
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