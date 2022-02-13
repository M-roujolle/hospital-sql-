<?php
require("../controller/controllermodifprogramm.php");
// var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="fr">

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
                        <a class="nav-link active text-primary" aria-current="page" href="../view/addpatient.php">Ajouter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/listpatient.php">Lister / Modifier</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/programlist.php">Programmer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="#">Voir</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search-heart"></i></button>
                </form>
            </div>
        </div>
    </nav>

    <h1 class="text-center mb-5">Programmer un rendez vous pour <?= $getOneuser["lastname"] ?> <?= $getOneuser["firstname"] ?> </h1>


    <div class="container d-flex justify-content-center mt-5 pb-3">
        <div class="card" style="width: 18rem;">
            <i class="bi bi-person-square text-center" style="font-size: 100px"></i>

            <h5 class="card-title text-center">Patient N° <?= $getOneuser["id"] ?> </h5>
            <p class="card-text ps-2">Nom : <?= $getOneuser["lastname"] ?> </p>
            <p class="card-text ps-2">Prénom : <?= $getOneuser["firstname"] ?> </p>
            <p class="card-text ps-2">Téléphone : <?= $getOneuser["phone"] ?> </p>
            <p class="card-text ps-2">Mail : <?= $getOneuser["mail"] ?> </p>
            <form action="" method="POST">
                <input class="mb-3" type="date" name="date">
                <input class="mb-2" type="time" name="time">

                <!-- Button trigger modal -->
                <button type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Enregistrer
                </button>
            </form>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body ps-5">
                            Enregistrement effectué
                            <i class="bi bi-check2-circle ps-2" style="font-size: 30px"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


</body>
<a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/programlist.php"><i class="bi bi-arrow-return-left"></i> Retour</a>

</html>