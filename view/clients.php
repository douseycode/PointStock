<?php
require '../header.php';
require '../db/client_db.php';

$clients = getAllClient();

?>

<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Clients</h1>
        <a href="add_client.php">
            <button type="button" class="float-end mb-2 btn btn-primary">
                Nouveau
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                </svg>
            </button>
        </a>
        <table border="1" class="table"  style="width:100%">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>Adresse</th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach($clients as $c) {?>
                <tr>
                    <td><?= $c['nom'] ?></td>
                    <td><?= $c['prenom'] ?></td>
                    <td><?= $c['tel'] ?></td>
                    <td><?= $c['adresse'] ?></td>
                    
                </tr>
            <?php }?>
            </tbody>
        </table>
        
    </div>
</main>


<?php require '../footer.php'; ?>
