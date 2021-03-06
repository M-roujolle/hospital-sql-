<?php
require("../controller/controllerprofil.php");

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
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
    <h1 class="text-center mb-5 pt-2">Profil du patient <?= $patientSolo["lastname"] ?> <?= $patientSolo["firstname"] ?></h1>

    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <i class="bi bi-person-square text-center" style="font-size: 100px"></i>
            <div class="card-body">
                <h5 class="card-title text-center">Patient N?? <?= $patientSolo["id"] ?> </h5>
                <p class="card-text">Nom : <?= $patientSolo["lastname"] ?></p>
                <p class="card-text">Pr??nom : <?= $patientSolo["firstname"] ?></p>
                <p class="card-text">Date de naissance : <?= $patientSolo["birthdate"] ?></p>
                <p class="card-text">T??l??phone : <?= $patientSolo["phone"] ?></p>
                <p class="card-text">Mail : <?= $patientSolo["mail"] ?></p>
                <a class="btn btn-primary col-12" href="modifpatient.php?id=<?= $patientSolo["id"] ?>">
                    Modifier
                </a>
            </div>
        </div>
    </div>

    <a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/listpatient.php"><i class="bi bi-arrow-return-left"></i> Retour</a>


</body>


</html>