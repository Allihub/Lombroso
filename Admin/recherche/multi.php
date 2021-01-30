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

            <?php


            $crit1 = htmlspecialchars($_POST['critere1']);
            $crit2 = htmlspecialchars($_POST['critere2']);
            $crit3 = htmlspecialchars($_POST['critere3']);
            $crit4 = htmlspecialchars($_POST['critere4']);

            $requete = "SELECT * FROM utilisateur WHERE"; //Initialisation de la requête dynamique
            if(!empty($_POST['critere1'])) //Cascade de if afin d'écrire dynamiquement la requ^éte de recherche
                $requete .= " Nom = \"$crit1\"";

            if (!empty($_POST['critere2']&& !empty($_POST['critere1'] ))) {
                $requete .= " AND Prenom = \"$crit2\"";
            }
            elseif (!empty($_POST['critere2']) && empty($_POST['critere1'] )) {
                $requete .= " Prenom = \"$crit2\"";
            }
            if (!empty($_POST['critere3']&& (!empty($_POST['critere1']) || !empty($_POST['critere2'])))) {
                $requete .= " AND Age = \"$crit3\"";
            }
            elseif (!empty($_POST['critere3']) && empty($_POST['critere1']) && empty($_POST['critere2']) ){
                $requete .= " Age = \"$crit3\"";
            }
            if (!empty($_POST['critere4']&& (!empty($_POST['critere1']) || !empty($_POST['critere2']) || !empty($_POST['critere3'])))) {
                $requete .= " AND Sexe = \"$crit4\"";
            }
            elseif (!empty($_POST['critere4']) && empty($_POST['critere1']) && empty($_POST['critere2']) && empty($_POST['critere3']) ){
                $crit4 = " Sexe = \"$crit4\"";
            }
            //echo $requete; //test requête dynamique
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=lombroso;charset=utf8', 'root', '');
            } catch (Exception $e) {
                die('Erreur : ' . $e->getMessage()); //Connexion à la BDD
            }

            $stmt = $bdd->prepare($requete);//Preparation de la requête
            $stmt->execute();//Execution
            $user = $stmt->fetch();//Stockage dans un variable des données récup
            if($user ==""){
                echo "Cet utilisateur n'existe pas";//Vérif qu'on a bien trouvé un utilisateur affichage de ce message sinon
            }
            else{
                while ($users = $stmt -> fetch())
                {
                    echo "Mail: " . $users["email"]."<br>". "Nom: " . $users["Prenom"]. " " . $users["Nom"]."<br>"."Age: ". $users['Age']." ans"."<br>"."Rôle : ". $users['Type']."<br>"."<br>"."<br>";
                    // echo $users;
                }  
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