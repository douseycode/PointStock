<?php 
include '../actions/addVenteAction.php';
include '../header.php'  ;
require '../db/client_db.php';
require '../db/produit_db.php';

$produits = getProduit();
$clients = getAllClient();


?>

<style>
    .user-form {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.user-form label {
    display: block;
    margin-bottom: 10px;
}

.user-form input[type="text"],
.user-form input[type="email"],
.user-form input[type="password"] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.user-form input[type="submit"] {
    display: block;
    width: 100%;
    padding: 8px;
    margin-top: 10px;
    background-color: #337ab7;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
/* index */

</style>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Ajouter Vente</h1>
        <?php
        if (isset($errorMessage)) {
        ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <?= $errorMessage; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        }
        ?>
        <form method="POST" action=""  class="user-form">
        <label for="nom">Produit :</label>
        <select name="id_article" id="id_article">
            <option selected value="0">Séléctionner...</option>
            <?php foreach($produits as $p) {?>
                <option value="<?= $p['id'] ?>" data-prix="<?= $p['prix'] ?>">
                    <?= $p['nproduit'] . " " . $p['quantite'] . " disponible" ?>
                </option>
            <?php }?>
        </select>

        <br>

        <label for="id_client">Client</label>
        <select name="id_client" id="id_client">
            <option selected value="0">Séléctionner...</option>
            <?php foreach($clients as $c) {?>
                <option value="<?= $c['id'] ?>"><?= $c['nom'] . " " . $c['prenom'] ?></option>
            <?php }?>
        </select>
        <br>

        <label for="quantite">Quantité</label>
        <input value="" type="number" name="quantite" id="quantite">

        <br>
        
        <label for="prix_unitaire">Prix</label>
        <input type="number" name="prix" id="prix_unitaire" readonly>
        
        <br>

        <label for="">Total</label>
        <input type="number" name="total" id="total" readonly>
        
        <br>

        <input type="submit" name="add" value="Ajouter">
    </form>
    </div>
</main>
<script>
    document.getElementById('id_article').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var prix = selectedOption.getAttribute('data-prix');
        
        document.getElementById('prix_unitaire').value = prix;
    });

    var quantiteInput = document.getElementById('quantite');
    var prixUnitaireInput = document.getElementById('prix_unitaire');
    var totalInput = document.getElementById('total');

    
    quantiteInput.addEventListener('input', calculerTotal);
    prixUnitaireInput.addEventListener('input', calculerTotal);

    function calculerTotal() {
      
        var quantite = parseFloat(quantiteInput.value);
        var prixUnitaire = parseFloat(prixUnitaireInput.value);

       
        if (!isNaN(quantite) && !isNaN(prixUnitaire)) {
          
            var total = quantite * prixUnitaire;

            
            totalInput.value = total.toFixed(2);
        } else {
           
            totalInput.value = '';
        }
    }
</script>

<?php include '../footer.php'; ?>
