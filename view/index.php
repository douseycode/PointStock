<?php 

include '../header.php';
include '../db/produit_db.php';
include '../db/client_db.php';
include '../db/vente_db.php';

$produits = getCountProduits();
$clients = getCountClients();
$ventes = getCountVentes();

?>

<main>
    <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <br>
    <div class="row">
            <!-- Card for Products -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Produits
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $produits ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-box fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card for Clients -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Clients
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $clients ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card for Sales -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                    Ventes
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ventes ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<?php include '../footer.php'; ?>
