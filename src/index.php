<?php

session_start();

require_once 'Character.php';
require_once 'Guerrier.php';
require_once 'Orc.php';

var_dump($_POST);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {

        switch ($_POST['action']) {
            case 'create-warrior':
                $warrior;
                break;

            case 'create-orc':
                $orc;
                break;

            case 'decider':
                $decide = true;
                break;

            case 'battle':
                $battle = true;
                break;

                // pas de defaut :)

        }
    }
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercices Fonctions</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- fonts google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">

    <!-- feuille de style -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="bg-light">

    <nav class="navbar navbar-expand-lg border border-dark bg-white shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="img-logo" alt="logo du site"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <p class="h1 font-title mx-auto display-2">Guerrier vs Orc</p>
            </div>
        </div>
    </nav>


    <div class="row justify-content-center">

        <div class="col-lg-3 p-3 border">
            <!-- INTERFACE BOUTON -->
            <div class="d-grid gap-1">
                <form action="" method="POST">
                    <input type="hidden" name="action" value="create-warrior">
                    <button class="btn btn-dark text-center w-100">Créer Guerrier</button>
                </form>

                <form action="" method="POST">
                    <input type="hidden" name="action" value="create-orc">
                    <button class="btn btn-dark text-center w-100">Créer Orc</button>
                </form>

                <form action="" method="POST">
                    <input type="hidden" name="action" value="decide">
                    <button class="btn btn-primary text-center w-100">Qui commence ?</button>
                </form>

                <form action="" method="POST">
                    <input type="hidden" name="action" value="battle">
                    <button class="btn btn-lg btn-outline-dark w-100">COMBAT !</button>
                </form>
            </div>
        </div>


        <div class="col-lg-3 p-3 border">
            <!-- INTERFACE GUERRIER -->
            <div class="row justify-content-center">
                <div class="rounded border border-4 border-secondary shadow m-3 bg-light p-3">
                    <div class="text-center">
                        <p class="h2">Conan</p>
                        <p class="h4">Classe : Guerrier</p>
                    </div>
                    <div class="text-center fs-4">
                        <i class="bi bi-heart-fill text-danger"></i> : <span class="fw-bold text-danger">500</span> / <i class="bi bi-droplet-fill text-primary"></i> : <span class="fw-bold text-primary">200</span>
                    </div>
                    <div class="text-center">
                        <p class="mt-2 mb-0"><i class="bi bi-pencil-fill fs-4"></i> : <b>Muramana</b> (150)</p>
                        <p class="my-0"><i class="bi bi-shield-shaded fs-4"></i> : <b>Super Shield</b> (50)</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-lg-2 p-3 border text-center display-1">
            <!-- IMAGE COMBAT COMMENCE -->
            <i class="bi bi-lightning-fill text-warning"></i>
        </div>

        <div class="col-lg-3 p-3 border">
            <!-- INTERFACE ORC -->
            <div class="row justify-content-center">
                <div class="rounded border border-4 border-secondary shadow m-3 bg-light p-3">
                    <div class="text-center">
                        <p class="h2">Conan</p>
                        <p class="h4">Classe : Guerrier</p>
                    </div>
                    <div class="text-center fs-4">
                        <i class="bi bi-heart-fill text-danger"></i> : <span class="fw-bold text-danger">500</span> / <i class="bi bi-droplet-fill text-primary"></i> : <span class="fw-bold text-primary">200</span>
                    </div>
                    <div class="text-center">
                        <p class="mt-2 mb-0"><i class="bi bi-pencil-fill fs-4"></i> : <b>Muramana</b> (150)</p>
                        <p class="my-0"><i class="bi bi-shield-shaded fs-4"></i> : <b>Super Shield</b> (50)</p>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>

</html>