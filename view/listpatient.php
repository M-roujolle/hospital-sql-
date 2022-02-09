<?php
require("../controller/controllerlistpatient.php");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <title>Hospital Gallagher</title>
</head>

<body>
    <h1 class="text-center mb-5 pt-2">Liste des patients</h1>
    <div class="container">
        <table class="table table-dark table-striped">
            <thead>


                <tr>
                    <th class="text-info" scope="col">#</th>
                    <th class="text-info" scope="col">Nom</th>
                    <th class="text-info" scope="col">Prénom</th>
                    <th class="text-info" scope="col">Détails</th>
                    <th class="text-info" scope="col">Supprimer</th>
                </tr>
            </thead>


            <tbody>
                <?php foreach ($patients as $patient) { ?>
                    <tr>
                        <th class="text-warning" scope="row"><?= $patient["id"] ?></th>
                        <td><?= $patient["lastname"] ?></td>
                        <td><?= $patient["firstname"] ?></td>
                        <td>

                            <!-- methode post -->
                            <form action="profilpatient.php" method="POST">
                                <input name="id" type="hidden" value="<?= $patient["id"] ?>">
                                <input name="idpatient" type="submit" value="Plus d'infos" class="btn btn-primary btn-sm"></input>
                            </form>

                        </td>



                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Etes vous certain de vouloir supprimer ce patient ?
                                    </div>
                                    <div class="modal-footer">
                                        <a href="http://php.net/HospitalProject/view/listpatient.php?id=<?= $patient["id"] ?>" class="btn btn-danger btn-sm">Supprimer</a>
                                        <a href="listpatient.php" class="btn btn-primary btn-sm">Retour</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Supprimer
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/home.php"><i class="bi bi-arrow-return-left"></i> Retour</a>
</body>

</html>