<?php

require_once 'Character.php';
require_once 'Guerrier.php';
require_once 'Orc.php';

// j'ai besoin des modèles avant l'utilisation des variables de session, donc je fais appel à mes classes en premiergit a
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['action'])) {

        switch ($_POST['action']) {
            case 'create-guerrier':
                $_SESSION['guerrier']['carac'] = new Guerrier(100, 20, "Epee", 200, "Bouclier", 300);
                $_SESSION['guerrier']['name'] = "Gaston";
                break;

            case 'create-orc':
                $_SESSION['orc']['carac'] = new Orc(666, 666, 666, 666);
                $_SESSION['orc']['name'] = "Shreky";
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

// var_dump($_SESSION);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guerrier Vs Orc</title>

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
                <p class="h1 font-title ms-3 display-2">Guerrier vs Orc</p>
            </div>
        </div>
    </nav>


    <div class="row justify-content-center">

        <div class="col-lg-3 p-3 border">
            <!-- INTERFACE BOUTON -->
            <div class="d-grid gap-1">
                <form action="" method="POST">
                    <input type="hidden" name="action" value="create-guerrier">
                    <button class="btn btn-dark text-center w-100" <?= isset($_SESSION['guerrier']) ? 'disabled' : '' ?>>Créer Guerrier</button>
                </form>

                <form action="" method="POST">
                    <input type="hidden" name="action" value="create-orc">
                    <button class="btn btn-dark text-center w-100" <?= isset($_SESSION['orc']) ? 'disabled' : '' ?>>Créer Orc</button>
                </form>

                <form action="" method="POST">
                    <input type="hidden" name="action" value="decide">
                    <button class="btn btn-primary text-center w-100">Qui commence ?</button>
                </form>

                <form action="" method="POST">
                    <input type="hidden" name="action" value="battle">
                    <button class="btn btn-lg btn-outline-dark w-100">COMBAT !</button>
                </form>
                <a href="reset.php" class="btn btn-secondary mt-3">Reset</a>
            </div>
        </div>


        <div class="col-lg-3 p-3 border">
            <!-- INTERFACE GUERRIER -->
            <?php if (isset($_SESSION['guerrier'])) { ?>
                <div class="row justify-content-center">
                    <div class="rounded border border-4 border-secondary shadow m-3 bg-light p-3">
                        <div class="text-center">
                            <p class="h2"><?= $_SESSION['guerrier']['name'] ?></p>
                            <p class="h4">Classe : Guerrier</p>
                        </div>
                        <div class="text-center fs-4">
                            <i class="bi bi-heart-fill text-danger"></i> : <span class="fw-bold text-danger"><?= $_SESSION['guerrier']['carac']->getHealth() ?></span> / <i class="bi bi-droplet-fill text-primary"></i> : <span class="fw-bold text-primary"><?= $_SESSION['guerrier']['carac']->getMana() ?></span>
                        </div>
                        <div class="text-center">
                            <p class="mt-2 mb-0"><i class="bi bi-pencil-fill fs-4"></i> : <b><?= $_SESSION['guerrier']['carac']->getWeapon() ?></b> (<?= $_SESSION['guerrier']['carac']->getWeaponDamage() ?>)</p>
                            <p class="my-0"><i class="bi bi-shield-shaded fs-4"></i> : <b><?= $_SESSION['guerrier']['carac']->getShield() ?></b> (<?= $_SESSION['guerrier']['carac']->getShieldValue() ?>)</p>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <p class="text-center display-5">Il faut créer un guerrier !</p>
            <?php } ?>
        </div>

        <div class="col-lg-2 p-3 border text-center display-1">
            <!-- IMAGE COMBAT COMMENCE -->
            <i class="bi bi-lightning-fill text-warning"></i>
        </div>

        <div class="col-lg-3 p-3 border">
            <!-- INTERFACE ORC -->
            <?php if (isset($_SESSION['orc'])) { ?>
                <div class="row justify-content-center">
                    <div class="rounded border border-4 border-secondary shadow m-3 bg-light p-3">
                        <div class="text-center">
                            <p class="h2"><?= $_SESSION['orc']['name'] ?></p>
                            <p class="h4">Classe : Orc</p>
                        </div>
                        <div class="text-center fs-4">
                            <i class="bi bi-heart-fill text-danger"></i> : <span class="fw-bold text-danger"><?= $_SESSION['orc']['carac']->getHealth() ?></span> / <i class="bi bi-droplet-fill text-primary"></i> : <span class="fw-bold text-primary"><?= $_SESSION['orc']['carac']->getMana() ?></span>
                        </div>
                        <div class="text-center">
                            <p class="mt-2 mb-0"><i class="bi bi-fire fs-4"></i> : <b>Attaque</b> (<?= $_SESSION['orc']['carac']->getDamageMin() ?> - <?= $_SESSION['orc']['carac']->getDamageMax() ?>)</p>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <p class="text-center display-5">Il faut créer un orc !</p>
            <?php } ?>
        </div>

    </div>


</body>

</html>