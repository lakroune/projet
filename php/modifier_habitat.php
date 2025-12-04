<?php

include "../db_connect.php";
$name = $_POST['name'];
$description = $_POST['description'];
$idHab = $_POST['idHab'];
$sql = "update Habitat set NomHab = '" . $name . "' ,Description_Hab ='" . $description . "' where idHab=" . $idHab;
$resultat = $cennect->query($sql);

if ($resultat) {
    echo "Habitat modifier avec succès";
} else {
    echo "Erreur ";
}

header("Location: ../gestion_des_habitats.php");


exit();
