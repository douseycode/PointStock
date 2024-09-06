<?php
include 'config.php';

function getAllClient(){
    global $connexion;
    $sql = "SELECT * FROM clients";
    $req = $connexion->prepare($sql);
    $req->execute();
    return $req->fetchAll();
}

function addClient($nom, $prenom, $tel, $adresse) {
    global $connexion;

    $query = "INSERT INTO clients(nom, prenom, tel, adresse) VALUES(?,?,?,?)";
    $stmt = $connexion->prepare($query);
    $stmt->execute(array($nom,$prenom, $tel, $adresse));
    $stmt->closeCursor();
}

function getCountClients() {
    global $connexion;
    $query = "SELECT COUNT(*) as count FROM clients";
    $resultat = $connexion->query($query);
    $row = $resultat->fetch(PDO::FETCH_ASSOC);
    return $row['count'];
}
