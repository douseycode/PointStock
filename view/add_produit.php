<?php 

include '../header.php'  ;

include_once '../db/categorie_db.php';
$categories = getAllCategories();
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
        <h1 class="mt-4">Ajouter Produit</h1>
        <form method="POST" action="../actions/addProduitAction.php"  class="user-form">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <br>

        <label for="prenom">Quantite :</label>
        <input type="number" name="quantite" required>

        <br>

        <label for="telephone">prix :</label>
        <input type="number" name="prix" required>

        <br>

        <label for="">Categorie</label>
        <select name="id_categorie" id="">
            <option selected value="0">Séléctionner...</option>
            <?php while ($c = $categories->fetch(PDO::FETCH_OBJ)) : ?>
                <option value="<?= $c->id ?>"><?= $c->name ?></option>
            <?php endwhile; ?>
        </select>
        

        <br>

        <input type="submit" name="add" value="Ajouter">
    </form>
    </div>
</main>


<?php include '../footer.php'; ?>
