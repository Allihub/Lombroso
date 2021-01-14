<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=projeta1; port=3308', 'root', 'root');
#afficher le nom, prénom, sexe, age, email,dernier test et resultat du dernier test

$userinfo = "";
$resultatinfo = "";
$resultatcheck = "";
// if(isset($_POST['id_User']) && $_POST['id_User'] > 0) {
   // $POSTid = intval($_POST['id_User']);
   $idcheck = $bdd->prepare('SELECT * FROM utilisateur WHERE id_User = 3');
   $idcheck->execute();
   $userinfo = $idcheck->fetch();
   // $POSTnum = intval($_POST['Numero_Test']);
   $resultatcheck = $bdd->prepare('SELECT Valeur, Date FROM resultat WHERE Numero_Test = 1');
   $resultatcheck->execute();
   $resultatinfo = $resultatcheck->fetch();
// }
   // [$_POST['Valeur'], $_POST['Date'], $_POST['Numero_Test']]
   // [$_POST['Prenom'], $_POST['Nom'],  $_POST['email'],  $_POST['Age'],  $_POST['Sexe'], $_POST['id_User']]
?>


<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="main.css">
        <link rel="stylesheet" href="profiluser.css">
        <title>Profil Utilisateur</title>
    </head>
    <body>
        <div class="content">
            <header>
                <div id="box_0">
                    <div class="box_0_element">
                        <ul>
                            <li>
                                <a href="../User/User.php">
                                    <image src= "logo-alex_Plan de travail 1.png" title="Menu"></image>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="box_0_element"><a href="../Aide/aide.html" style="color:black" title="Aide">Lombroso </a></div>
                    <div class="box_0_element">
                        <ul>
                            <li>
                                <a href="../profiluser/profiluser.php">
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
                        
                        <div class="titre">
                            <h2> 
                                Profil de <?php echo $userinfo['Prenom'] ." ".$userinfo['Nom']; ?>
                            </h2>
                        </div>
                        <div style="float: center; text-align: center;">
                            <br />
                            Mail = <?php echo $userinfo['email']; ?>
                            <br />
                            <br/> Age = <?php echo $userinfo['Age']; ?>
                            <br/><br/> Sexe = <?php echo $userinfo['Sexe']; ?>
                            <br/><br/> Dernier résultat = <?php echo $resultatinfo['Valeur']; ?> le <?php echo $resultatinfo['Date']; ?>
                        </div>
                    
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
</html>