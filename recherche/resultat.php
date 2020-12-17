<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
$stmt = $bdd->prepare("SELECT prenom, nom, age, roole, mail FROM utilisateur where mail = ?");
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