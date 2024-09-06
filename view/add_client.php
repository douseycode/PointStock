<?php 

include '../header.php'  ;


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
        <h1 class="mt-4">Ajouter Client</h1>
        <form method="POST" action="../actions/addClientAction.php"  class="user-form">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required>

        <br>

        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom" required>

        <br>

        <label for="telephone">Telephone :</label>
        <input type="number" name="tel" required>

        <br>
        
        <label for="">Adresse :</label>
        <input type="text" name="adresse" required>
        
        <br>

        <input type="submit" name="add" value="Ajouter">
    </form>
    </div>
</main>


<?php include '../footer.php'; ?>
