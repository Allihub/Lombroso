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

            <?php
            try {
                $bdd= new PDO('mysql:host=localhost;dbname=lombroso', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage());
            }
            $stmt = $bdd->prepare("SELECT email, Nom, Age, prenom, Type FROM utilisateur where email = ?");
            $stmt->execute(array($_POST['recherche']));
            $user = $stmt->fetch();
            if($user ==""){
                echo "Cet utilisateur n'existe pas";
                $exist=1;
                echo "<meta http-equiv='refresh'content='2;URL=recherches.php'>";

            }
            else{
                echo "Mail: " . $user["email"]."<br>". "Nom: " . $user["prenom"]. " " . $user["Nom"]."<br>"."Age: ". $user['Age']." ans"."<br>"."Rôle : ". $user['Type']."<br>";
            }

            ?>
            
            <?php 
             echo '<br>';
            
            $req=$bdd->prepare("SELECT * FROM resultat, utilisateur where  resultat.Id_User= utilisateur.Id_User and email = ? ");
           
            $req->execute(array($_POST['recherche']));

            $donnees = $req->fetch();


            if(count($donnees)>0 and $exist!=1 and $donnees!=NULL){
            echo "Vos resultats en fonction des questions sont : ".$donnees["Numero_Test"]."<br>". "Question 1: ".$donnees["Question1"]."<br> "."Question 2 : ".$donnees["Question2"]."<br>"."Question 3 : ".$donnees["Question3"]."<br>"."Question4 : ".$donnees["Question4"]."<br>"."Question5 :".$donnees["Question5"]."<br>"."Question 6 : ".$donnees["Question6"]."<br>"."Question 7 : ".$donnees["Question7"]."<br>"."Question 8 : ".$donnees["Question8"]."<br>"."Question 9 : ".$donnees["Question9"]."<br>"."Question 10 : ".$donnees["Question10"]."<br>";
                
            }
            else{
                echo'Aucun résultat de test pour cet utilisateur';
            }

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