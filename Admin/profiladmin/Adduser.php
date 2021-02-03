<?php
// Lancement de la session et récupération des données utilisateur

session_start();/*
$mail=$_SESSION['mail'];
$prenom=$_SESSION['prenom'];
$nom=$_SESSION['nom'];
$age=$_SESSION['age'];
$role=$_SESSION['role']; */
//???Ajout de commentaire
$role = 'administrateur';


try {
    $bdd= new PDO('mysql:host=localhost;dbname=lombroso', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}//Connexion classqiue à la bdd



// Insertion
$mailcheck= $bdd->prepare('SELECT * FROM utilisateur WHERE email= ?');
$mailcheck->execute(array(htmlspecialchars($_POST['mail'])));
$result = $mailcheck->fetch();
$mailcheck = $result[0]; //On stock dans une variable la recherche du mail dans la bdd afin de pouvoir tester son existance dans la suite
$blacklistcheck = $bdd->prepare('SELECT * FROM blacklist WHERE email= ?');
$blacklistcheck->execute(array(htmlspecialchars($_POST['mail'])));
$resultblacklist = $blacklistcheck->fetch();// De même ici on vérifie que le mail de l'utilisateur ne se trouve pas dans la blacklist pour autoriser les actions sur cet utilisateur
if ($resultblacklist!="")
{
    echo "Action impossible cet utilisateur est banni";
}

$prenom=htmlspecialchars($_POST['prenom']);
$nom=htmlspecialchars($_POST['nom']);
$age=htmlspecialchars($_POST['age']);
$roole=htmlspecialchars($_POST['role']);
$mail=htmlspecialchars($_POST['mail']);
$sexe=htmlspecialchars($_POST['sexe']);
$mdp=htmlspecialchars($_POST['mdp']);


if ($role == 'administrateur') {
    if ($resultblacklist == "") {

        if (isset($_POST['ajouter'])) //À chaque fois la formule isset($_POST['']) sert à vérifer quel bouton à été appuyé par l'utilisateur
        {
            if ($mailcheck == "") //Si le mail de l'utilisateur est vide, donc qu'il n'existe pas encore on peut l'ajouter
            {
                if(preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#?$%&]{8,25}$/', $mdp)) {
                    
                
                // Ajout de l'utilisateur à l'aide d'une requête préparée
                
                $req = $bdd->prepare('INSERT INTO utilisateur (Nom, Prenom, Age, Sexe, Mot_De_Passe, Type, email,email2) VALUES(?, ?, ?, ?, ?, ?, ?,?)');
                $req->execute(array(htmlspecialchars($_POST['nom']), htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['age']), htmlspecialchars($_POST['sexe']), htmlspecialchars(password_hash($_POST['mdp'], PASSWORD_DEFAULT)), htmlspecialchars($_POST['role']),htmlspecialchars($_POST['mail']),''));

                echo 'L\'utilisateur a bien été ajouté !';
            }
             elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#?$%&]{8,25}$/', $mdp)){
                echo"Veuillez choisir un mot de passe plus pertinent. Votre mot de passe entre 8 et 25 caractères doit contenir AU MOINS UNE LETTRE MAJUSCULE, UNE LETTRE MINISCULE, UN CHIFFRE ET UN CARACTERE SPÉCIAL !@#?$%&";
             }
            } else //Sinon message comme quoi l'utilisateur est déjà présent dans la bdd
                {
                echo 'Cette adresse mail est déja utilisé merci d\'utiliser une adresse valide';
                }
        } elseif (isset($_POST['modifier'])) {
            if ($mailcheck == "") //Si le mail de l'utilisateur n'est pas la bdd impossible de modifier ses information il faut d'abord l'ajouter
            {
                echo 'Vous ne pouvez pas modifier un profil inexistant merci d\'ajouter ce profil au préalable';
            } else {
                $req = $bdd->prepare('UPDATE utilisateur SET Prenom = :nvprenom, Nom = :nvnom, Age = :nvage, Sexe = :nvsexe, Type= :nvroole  WHERE email=:mail');
                // On met à jour les données de l'utilisateur à l'aide d'une requette préparée en fonction de ce qu'il a rentré dans le formulaire cf ligne 34-39
                $req->execute(array(

                    'nvprenom' => $prenom,

                    'nvnom' => $nom,

                    'nvage' => $age,

                    'nvsexe' => $sexe,

                    'nvroole' => $roole,

                    'mail' => $mail
                ));

                echo 'Profil édité avec succès';

            }
        } elseif (isset($_POST['supprimer'])) {
            if ($mailcheck != "")//On vérifie encore une fois que le profil de l'utilisateru existe
                {
                // Suppression de l'utilisateur à l'aide d'une requête préparée
                $req = $bdd->prepare('DELETE FROM utilisateur WHERE email= ?');
                $req->execute(array(htmlspecialchars($_POST['mail'])));
                $req->closeCursor();
                echo 'Utilisateur supprimé !';
            } else {
                echo 'Ce profil n\'est pas attribué il ne peut donc pas être supprimé merci d\'entrer une adresse valide';
            }
        } elseif (isset($_POST['ban']))
        {
            //Requete préparée classique pour ajouter l'email de l'utilisateur à la blacklist
            $req = $bdd->prepare('INSERT INTO blacklist (email) VALUES(?)');
            $req->execute(array(htmlspecialchars($_POST['mail'])));
            echo "Utilisateur banni";
        }
    }
}
else{
    echo 'La modération des profils est réservée aux administrateurs';
}

