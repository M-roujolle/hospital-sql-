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
    <h1 class="text-center mb-5 pt-2">Profil des patients</h1>
    <div class="container">
        <div class="card " style="width: 18rem;">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nom : <?= $patientSolo["lastname"] ?> </li>
                <li class="list-group-item">Prénom : <?= $patientSolo["firstname"] ?></li>
                <li class="list-group-item">Date de naissance : <?= $patientSolo["birthdate"] ?></li>
                <li class="list-group-item">Numéro de téléphone : <?= $patientSolo["phone"] ?></li>
                <li class="list-group-item">Mail : <?= $patientSolo["mail"] ?></li>
                <!-- Button trigger modal -->
                <a class="btn btn-primary" href="modifpatient.php?id=<?= $patientSolo["id"] ?>">
                    Modifier
                </a>
            </ul>
        </div>
    </div>


    <a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/listpatient.php"><i class="bi bi-arrow-return-left"></i> Retour</a>


</body>


</html>