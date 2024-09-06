<?php
include 'config.php';

function getProduit(){
    global $connexion;
    $sql = "SELECT produits.*, categories.name AS category_name 
    FROM produits 
    INNER JOIN categories ON categories.id = produits.id_categorie
    ";
    $req = $connexion->prepare($sql);
    $req->execute();
    return $req->fetchAll();
}

function addProduit($nom, $quantite, $prix, $id_categorie) {
    global $connexion;

    $query = "INSERT INTO produits(nproduit, quantite, prix, id_categorie) VALUES(?,?,?,?)";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($nom, $quantite, $prix, $id_categorie));
    $stmt->closeCursor();
}

function getCountProduits() {
    global $connexion;
    $query = "SELECT COUNT(*) as count FROM produits";
    $resultat = $connexion->query($query);
    $row = $resultat->fetch(PDO::FETCH_ASSOC);
    return $row['count'];
}
