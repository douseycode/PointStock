<?php
include 'config.php';

function getallVente(){
    global $connexion;
    $sql = "SELECT v.*, p.nproduit AS nom_produit, c.nom AS nom_client, c.prenom AS prenom_client, p.prix AS prixU
            FROM vente v
            JOIN produits p ON v.id_produit = p.id
            JOIN clients c ON v.id_client = c.id";
    $req = $connexion->prepare($sql);
    $req->execute();
    $vente = $req->fetchAll();

    return $vente;
    
}

function getRecu($id){
    global $connexion;
    $sql = "SELECT v.*, p.nproduit AS nom_produit, c.tel AS telephone, c.adresse AS adresse, c.nom AS nom_client, c.prenom AS prenom_client, p.prix AS prixU
    FROM vente v, clients AS c, produits AS p WHERE v.id_produit=p.id AND v.id_client=c.id AND v.id= ?";
    
    $req = $connexion->prepare($sql);
    $req->execute(array($id));
    return $req->fetch();
}

function getCountVentes() {
    global $connexion;
    $query = "SELECT COUNT(*) as count FROM vente";
    $resultat = $connexion->query($query);
    $row = $resultat->fetch(PDO::FETCH_ASSOC);
    return $row['count'];
}