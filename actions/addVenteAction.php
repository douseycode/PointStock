<?php
include '../db/vente_db.php';

if(isset($_POST['add'])){
    if (
        !empty($_POST['id_article']) 
        && !empty($_POST['id_client'])
        && !empty($_POST['quantite'])
        && !empty($_POST['prix'])
        && !empty($_POST['total'])
    ) {
        
        $verifq = "SELECT quantite FROM produits WHERE id = ?";
        $Stmt = $connexion->prepare($verifq);
        $Stmt->execute(array($_POST['id_article']));
        $res = $Stmt->fetchColumn();
    
        if ($_POST['quantite'] <= $res) {
            
            $sql = "INSERT INTO vente (id_produit, id_client, quantite, prix,total)
                    VALUES (?, ?, ?, ?,?)";
            $req = $connexion->prepare($sql);
            $req->execute(array(
                $_POST['id_article'],
                $_POST['id_client'],
                $_POST['quantite'],
                $_POST['prix'],
                $_POST['total']
            ));
    
            if ($req->rowCount() != 0) {
                $upquatite = "UPDATE produits SET quantite = quantite - ? WHERE id = ?";
                $stm = $connexion->prepare($upquatite);
                $stm->execute(array($_POST['quantite'], $_POST['id_article']));
                $message = 'Vente ajoutée avec succès';
                header("Location: ../view/ventes.php");
                exit;
            } else {
                $errorMessage = "Erreur lors de l'ajout";
            }
        } else {
            
            $errorMessage= "Quantité demandée supérieure à la quantité disponible";
        }
    
    } else {
        $errorMessage = "Une information obligatoire est manquante";
    }
    
    
    
}