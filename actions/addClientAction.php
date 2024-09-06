<?php

include '../db/client_db.php';
if (isset($_POST["add"])) {
        
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $tel = $_POST["tel"];
    $adresse= $_POST['adresse'];
    

    addClient($nom, $prenom, $tel, $adresse);
    

    header("Location: ../view/clients.php");
    exit;
}