
<?php 
session_start();
include("../../MENU/connexion.php");
$statement = $connexion->prepare('SELECT * FROM resultat WHERE Id_User=? ORDER BY Date DESC LIMIT 1');
$statement->execute(Array($_SESSION['UTILISATEUR']['Id_User']));
if ($statement -> rowCount() == 1) {
    $results = $statement->fetch(PDO::FETCH_ASSOC);
}
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
                        

                        <p><?php echo $_SESSION['UTILISATEUR']['email']; ?></p>
                        <p><?php echo $_SESSION['UTILISATEUR']['Nom']; ?></p>
                        <p><?php echo $_SESSION['UTILISATEUR']['Prenom']; ?></p>
                        <p><?php echo $_SESSION['UTILISATEUR']['Age']; ?></p>
                        <br><br>
                        <?php if (isset($results)) { ?>
                        <p>Dernier test effectué le : </p><br><?php echo $results['Date']; ?>
                        <br><br>
                        <p>Résultat du dernier test :</p>
                        <pre>Question 1 : <?php echo $results['Question1']; ?></pre>
                        <pre>Question 2 : <?php echo $results['Question2']; ?></pre>
                        <pre>Question 3 : <?php echo $results['Question3']; ?></pre>
                        <pre>Question 4 : <?php echo $results['Question4']; ?></pre>
                        <pre>Question 5 : <?php echo $results['Question5']; ?></pre>
                        <pre>Question 6 : <?php echo $results['Question6']; ?></pre>
                        <pre>Question 7 : <?php echo $results['Question7']; ?></pre>
                        <pre>Question 8 : <?php echo $results['Question8']; ?></pre>
                        <pre>Question 9 : <?php echo $results['Question9']; ?></pre>
                        <pre>Question 10 : <?php echo $results['Question10']; ?></pre>
                        <br>
                        <?php } else { echo "cet utilisateur n'a pas encore passé de tests.";} ?>
                        <br>
                    
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