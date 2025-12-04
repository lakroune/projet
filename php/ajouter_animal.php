<?php

include "../db_connect.php";
if ($_SERVER['REQUEST_METHOD'] === "POST") { // && isset(  $_POST['type-regime'], $_POST['nomAnimal'], $_POST['idHab'])) {


    $Url_image = "";
    if (!empty($_FILES['image']['name'])) {   /////  NB pourquoi
        $Url_image = "../images/" . time() . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $Url_image);
        echo  "uplaoded";
    } else
        echo "dnt uploaded";

    $sql = " insert into  Animal (NomAnimal, Type_alimentaire, Url_image, IdHab) value ('" . $_POST['nomAnimal'] . "' ,'" . $_POST['type-regime'] . "','" . $Url_image . "'," . $_POST['idHab'] . ")";

    try {
        $resultat = $cennect->query($sql);
    } catch (Exception $e) {
        print('Erreur de connexion à la base de données.');
    }
}