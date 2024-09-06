<?php
require '../header.php';
require '../db/vente_db.php';

$ventes = getallVente();


?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ventes</h1>
        <a href="add_vente.php">
            <button type="button" class="float-end mb-2 btn btn-primary">
                Effectuer une vente
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
            </button>
        </a>
        <?php
        if (isset($message)) {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        
        <table border="1" class="table"  style="width:100%">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Nom</th>
                    <th>Quantité</th>
                    <th>prix unitaire</th>
                    <th>Total</th>
                    <th>Date d'Ajout</th>
                    <th>Reçu</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach($ventes as $v) {?>
                <tr>
                    <td><?= $v['nom_produit'] ?></td>
                    <td><?= $v['nom_client'] . " " . $v['prenom_client']?></td>
                    <td><?= $v['quantite'] ?></td>
                    <td><?= $v['prixU'] ?></td>
                    <td><?= $v['total'] ?></td>
                    <td><?= $v['date_vente'] ?></td>
                    <td>
                        <a href="recuVente.php?id=<?= $v['id']?>">Imprimer</a>
                    </td>
                    
                </tr>
            <?php }?>
            </tbody>
        </table>
        
    </div>
</main>


<?php require '../footer.php'; ?>
