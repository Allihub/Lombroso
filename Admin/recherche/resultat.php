<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=ProjetA1;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$stmt = $bdd->prepare("SELECT email, Nom, Age, email, Type FROM utilisateur where email = ?");
$stmt->execute(array($_POST['recherche']));
$user = $stmt->fetch();
echo "Mail: " . $user["mail"]."<br>". "Nom: " . $user["prenom"]. " " . $user["nom"]."<br>"."Age: ". $user['age']." ans"."<br>"."Rôle : ". $user['roole']."<br>";

/*while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
}
/*while ($donnees = $reponse->fetch())
{
    echo '<p>' .$donnees['prenom'].' '.$donnees['nom']. '</p>';
}*/
?>