<?php
require '../controller/controllerseeappointmnent.php';
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

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


    <h1 class="text-center mb-5 pt-2">Liste des rendez-vous</h1>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th class="text-info" scope="col">Id</th>
                    <th class="text-info" scope="col">Nom</th>
                    <th class="text-info" scope="col">Prénom</th>
                    <th class="text-info" scope="col">Date et heure de rdv</th>
                    <th class="text-info" scope="col">Supprimer</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $rdv) { ?>
                    <tr>
                        <td><?= $rdv["idrdv"] ?></td>
                        <td><?= $rdv["lastname"] ?></td>
                        <td><?= $rdv["firstname"] ?></td>
                        <td><?= $rdv["dateHour"] ?></td>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?= $rdv["idrdv"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Etes vous certain de vouloir supprimer ce patient ?
                                    </div>
                                    <div class="modal-footer">

                                        <!-- il faut faire un form en POST pour recupérer l'id -->
                                        <form action="" method="POST">
                                            <!-- faire un input caché pour recup la valeur -->
                                            <input type="hidden" value="<?= $rdv["idrdv"] ?>" name="idrdv">
                                            <!-- on créer un bouton pour confirmer la suppression -->
                                            <button type="submit" name="idsupp" class="btn btn-danger">Supprimer</button>
                                        </form>
                                        <a href="seeapointment.php" class="btn btn-primary btn-sm">Retour</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $rdv["idrdv"] ?>">
                                <i class="bi bi-trash"></i> </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/programlist.php"><i class="bi bi-arrow-return-left"></i> Retour</a>
</body>

</html>