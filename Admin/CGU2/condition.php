<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
?>
<?php
$age=16;

switch ($age)
{
	case 4:
		echo "tu as 4 ans ";
		break;
	case 16:
		echo" tu as 16ans";
}

?>