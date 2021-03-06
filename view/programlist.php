<?php
require("../controller/controllerprogram.php");
// var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="fr">
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 2px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 3px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #45a049;
        color: white;
        padding: 10px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 10px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/script.js"></script>

    <title>Hospital Gallagher</title>
</head>

<body>
    <!-- navabar-------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./home.php">Hospital Gallagher</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/addpatient.php">Ajouter /</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/listpatient.php">Lister - Modifier /</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/programlist.php">Programmer /</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/seeappointment.php">Voir les rdv</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search-heart"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <h1 class="text-center mb-5">Programmer un rendez vous</h1>

    <div class="d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body d-flex justify-content-center">

                <form action="" method="POST">
                    <select class="mb-3" name="idpatient" id="selectpatient">
                        <option class="text-center" value="">-- Choix du patient --</option>

                        <?php foreach ($patients as $patient) { ?>
                            <option value="<?= $patient["id"] ?>"><?= $patient["lastname"] ?> <?= $patient["firstname"] ?></option>
                        <?php } ?>
                    </select>
                    <div>
                        <input class="mb-3 col-12" name="date" type="date"><br>
                        <input class="mb-3 col-12" name="time" type="time"><br>
                    </div>
                    <input value="Enregistrer" name="recordBtn" type="submit" class="btn btn-success col-12">
                </form>
            </div>
        </div>
    </div>

</body>
<a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/listpatient.php"><i class="bi bi-arrow-return-left"></i> Retour</a>

</html>