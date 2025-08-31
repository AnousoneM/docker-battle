<?php

session_start();

unset($_SESSION);
session_destroy();

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

    <div class="text-center mt-5">
        <p class="h2">Les données de l'ancien combat ont été effacées, vous pouvez lancer un nouveau combat</p>
        <a href="index.php" class="btn btn-lg btn-primary my-3">Nouveau COMBAT</a>
    </div>

</body>

</html>