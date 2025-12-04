<?php

include "../db_connect.php";
$name = $_POST['name'];
$description = $_POST['description'];
$sql = "insert into habitat (NomHab, Description_Hab) values ('$name', '$description')";
$resultat = $cennect->query($sql);

if ($resultat) {
    echo "Habitat ajouté avec succès";
} else {
    echo "Erreur ";
}

header("Location: ../gestion_des_habitats.php");


exit();
