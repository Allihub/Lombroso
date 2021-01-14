<?php
// Lancement de la session et récupération des données utilisateur

session_start();/*
$mail=$_SESSION['mail'];
$prenom=$_SESSION['prenom'];
$nom=$_SESSION['nom'];
$age=$_SESSION['age'];
$role=$_SESSION['role']; */
$role = 'administrateur';


try {
    $bdd = new PDO('mysql:dbname=ProjetA1;host=localhost;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}



// Insertion
$mailcheck= $bdd->prepare('SELECT * FROM utilisateur WHERE mail= ?');
$mailcheck->execute(array(htmlspecialchars($_POST['mail'])));
$result = $mailcheck->fetch();
$mailcheck = $result[0];

$prenom=htmlspecialchars($_POST['prenom']);
$nom=htmlspecialchars($_POST['nom']);
$age=htmlspecialchars($_POST['age']);
$roole=htmlspecialchars($_POST['role']);
$mail=htmlspecialchars($_POST['mail']);

if ($role == 'administrateur')
{

    if (isset($_POST['ajouter']))
    {
        if ($mailcheck == 0) {
            // Ajout de l'utilisateur à l'aide d'une requête préparée
            $req = $bdd->prepare('INSERT INTO utilisateur (prenom, nom, mdp, age, mail, roole) VALUES(?, ?, ?, ?, ?, ?)');
            $req->execute(array(htmlspecialchars($_POST['prenom']), htmlspecialchars($_POST['nom']), htmlspecialchars(password_hash($_POST['mdp'], PASSWORD_DEFAULT)), htmlspecialchars($_POST['age']), htmlspecialchars($_POST['mail']), htmlspecialchars($_POST['role'])));

            echo 'L\'utilisateur a bien été ajouté !';
        } else {
            echo 'Cette adresse mail est déja utilisé merci d\'utiliser une adresse valide';
        }
    }
    elseif (isset($_POST['modifier']))
    {
        if ($mailcheck == 0)
        {
            echo 'Vous ne pouvez pas modifier un profil inexistant';
        }
        else
        {
            $req = $bdd->prepare('UPDATE utilisateur SET prenom = :nvprenom, nom = :nvnom, age = :nvage, roole= :nvroole  WHERE mail=:mail');

            $req->execute(array(

                'nvprenom' => $prenom,

                'nvnom' => $nom,

                'nvage' => $age,

                'nvroole' => $roole,

                'mail' => $mail
            ));

            echo 'Profil édité avec succès';

        }
    }
    elseif (isset($_POST['supprimer']))
    {
        if ($mailcheck !== 0) {
            // Suppression de l'utilisateur à l'aide d'une requête préparée
            $req = $bdd->prepare('DELETE FROM utilisateur WHERE mail= ?');
            $req->execute(array(htmlspecialchars($_POST['mail'])));
            $req->closeCursor();
            echo 'Utilisateur supprimé !';
        }
    else {
            echo 'Ce profil n\'est pas attribué il ne peut donc pas être supprimée merci d\'entrer une adresse valide';
        }
    }
}
else{
    echo 'La modération des profils est réservée aux administrateur';
}

