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
                        <a href="../User/User.php">
                            <image src= "logo-alex_Plan de travail 1.png" title="Menu"></image>
                        </a>
                   </li>
                </ul>

            </div>
            <div class="box_0_element"><a href="../Aide/aide.html" style="color:black;font-size:30px;text-decoration:none" title="Aide">Aide </a></div>
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
                <?php
                try {
                $bdd = new PDO('mysql:host=localhost;dbname=lombroso;charset=utf8', 'root', '');
                } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage()); //Connexion à la BDD
                }
                $email = $_SESSION['enreg'];
                $req = $bdd->prepare('SELECT * FROM utilisateur WHERE email= ?');
                $req->execute(array(htmlspecialchars($email)));
                $user = $req->fetch();//Stockage dans un variable des données récup
                if($user ==""){
                    echo "Cet utilisateur n'existe pas";//Vérif qu'on a bien trouvé un utilisateur affichage de ce message sinon
                }
                else{
                    echo "Mail: " . $user["email"]."<br><br>". "Nom: " . $user["Prenom"]. " " . $user["Nom"]."<br><br>"."Age: ". $user['Age']." ans"."<br><br>"."Sexe: ". $user['Sexe']."<br><br>"."Rôle : ". $user['Type']."<br><br>"."Email secondaire : ". $user['email2']."<br><br>";
                }//Affichage des valeurs récupérées
                ?>
            </section>
        </div>
    </div>
    <footer>
        <div id="box_1">
            <div class="box_1_element"><a href="../CGU2/CGU.html" style="color:black" title="CGU">Consulter les CGU</a></div>
            <div class="box_1_element">
                <ul>
                    <li>
                        <a href="../mail/mailu.php">
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
</html>