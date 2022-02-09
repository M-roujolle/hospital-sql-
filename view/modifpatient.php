<?php
require("../controller/controllermodifpatient.php");

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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/script.js"></script>
    <title>Hospital Gallagher</title>
</head>

<body>
    <h1 class="text-center mb-5 pt-2">Modifications des patients</h1>

    <div class="container">
        <form action="#" method="POST">
            Nom : <input class="mb-2" type="text" name="nom" value="<?= $patientSolo["lastname"] ?>"><br>
            Prénom : <input class="mb-2" type="text" name="prenom" value="<?= $patientSolo["firstname"] ?>"><br>
            Date de naissance : <input class="mb-2" type="text" name="datedenaissance" value="<?= $patientSolo["birthdate"] ?>"><br>
            Téléphone : <input class="mb-2" type="text" name="telephone" value="<?= $patientSolo["phone"] ?>"><br>
            Mail : <input class="mb-2" type="text" name="mail" value="<?= $patientSolo["mail"] ?>"><br>
            <input type="hidden" name="idpatient" value="<?= $patientSolo["id"] ?>">

            <button type="submit" class="btn btn-success ms-5">
                Enregistrer
            </button>
        </form>
    </div>

    <a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/profilpatient.php"><i class="bi bi-arrow-return-left"></i> Retour</a>

    <?php if (isset($modification)) { ?>
        <span id="modifconfirm"></span>
    <?php } ?>
</body>

</html>