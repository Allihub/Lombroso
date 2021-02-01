<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<?php

function direbonjour($nom)
{
echo'bonjour  ' .$nom;
}

direbonjour('Marie');

?>