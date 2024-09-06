<?php

include '../db/produit_db.php';
if (isset($_POST["add"])) {
        
    $nom = $_POST["nom"];
    $quantite = $_POST["quantite"];
    $prix = $_POST["prix"];
    $id_categorie= $_POST['id_categorie'];
    

    addProduit($nom, $quantite, $prix, $id_categorie);
    

    header("Location: ../view/produits.php");
    exit;
}