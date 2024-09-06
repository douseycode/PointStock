<?php
include 'config.php';

function getAllCategories(){
    global $connexion;
    $query = "SELECT * FROM categories";
    $resultat = $connexion->query($query);
    return $resultat;
}