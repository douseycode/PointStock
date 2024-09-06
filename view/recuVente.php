<?php 

include '../header.php'  ;
require '../db/vente_db.php';
if(!empty($_GET['id'])){
    $vente = getRecu($_GET['id']);
}
?>
<style>
 
        @page {
            size: A4;
            margin: 0;
        }

@media print {
   

    .container {
        border: initial;
        border-radius: initial;
        width: initial;
        min-height: initial;
        box-shadow: initial;
        background: initial;
        page-break-after: always;
    }
}

    </style>
<main>
    <button id="btnPrint" class="btn btn-primary mt-3" style="position: relative; left:45%">Imprimer</button>
    <div class="container">
        <div class="header">
            <h1>Facture</h1>
        </div>
        <div class="info">
            <p>Reçu N° #: <?= $vente['id']?></p>
            <p>Date : <?= date('d/m/Y ', strtotime($vente['date_vente'])); ?></p>
            <p>Nom: <?= $vente['nom_client'] . " " . $vente['prenom_client'] ?></p>
            <p>Téléphone: <?= $vente['telephone']?></p>
            <p>Adresse: <?= $vente['adresse']?></p>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>Designation</th>
                    <th>Quantité</th>
                    <th>Prix unitaire</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $vente['nom_produit'] ?></td>
                    <td><?= $vente['quantite'] ?></td>
                    <td><?= $vente['prix'] ?></td>
                    <td><?= $vente['total'] ?></td>
                </tr>
            </tbody>
        </table>
        <div class="total">
            Total: <?= $vente['total'] ?>
        </div>
      
    </div>

    <script>
        let btnPrint = document.getElementById("btnPrint");
        btnPrint.addEventListener('click', () =>{
            window.print();
        });
    </script>
</main>



<?php include '../footer.php'; ?>
