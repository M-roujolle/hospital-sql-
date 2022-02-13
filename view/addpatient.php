<?php
require("../controller/controlleraddpatient.php");
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


    <h1 class="text-center">Ajouter un patient</h1>

    <div class="row m-0">
        <div class="d-flex justify-content-center">
            <div class=" col-lg-6 mt-5">
                <div class="d-flex justify-content-center">


                    <form action="addpatient.php" method="POST" class="ps-3 pe-3">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom : </label><span class="text-danger">
                                <?=
                                $arrayError["nom"] ?? " ";
                                ?>
                            </span>
                            <input value="<?= isset($_POST["nom"]) ? htmlspecialchars($_POST["nom"]) : "" ?>" name="nom" type="text" class="form-control w-75 " id="nom" placeholder="Ex : Balkany...">

                            <label for="prenom" class="form-label mt-1">Prénom : </label><span class="text-danger">
                                <?=
                                $arrayError["prenom"] ?? " ";
                                ?>
                            </span>
                            <input value="<?= isset($_POST["prenom"]) ? htmlspecialchars($_POST["prenom"]) : "" ?>" name=" prenom" type="text" class="form-control w-75" id="prenom" placeholder="Ex : Patrick...">

                            <label for="datedenaissance" class="form-label">Date de naissance : </label><span class="text-danger">
                                <?=
                                $arrayError["datedenaissance"] ?? " ";
                                ?>
                            </span>
                            <input value="<?= isset($_POST["datedenaissance"]) ? htmlspecialchars($_POST["datedenaissance"]) : "" ?>" name="datedenaissance" type="date" class="form-control w-75" id="datedenaissance" placeholder="Ex : JJ/MM/AA">

                            <label for="telephone" class="form-label">Téléphone : </label><span class="text-danger">
                                <?=
                                $arrayError["telephone"] ?? " ";
                                ?>
                            </span>
                            <input value="<?= isset($_POST["telephone"]) ? htmlspecialchars($_POST["telephone"]) : "" ?>" name="telephone" type="text" class="form-control w-75" id="telephone" placeholder="Ex : 0660547813">


                            <label for="mail" class="form-label mt-1 ">Mail : </label><span class="text-danger ">
                                <?=
                                $arrayError["mail"] ?? " ";
                                ?>
                            </span>
                            <input value="<?= isset($_POST["mail"]) ? htmlspecialchars($_POST["mail"]) : "" ?>" name=" mail" type="mail" class="form-control w-75" id="mail" placeholder="Ex : patrick.balkany@lasante.fr">
                        </div>
                        <span class="text-danger">
                            <?=
                            $arrayError["reCaptcha"] ?? " ";
                            ?>
                        </span>
                        <div class="g-recaptcha" data-sitekey="6LfaAmMeAAAAAMQKQfAzVbHsaglJhSAbd447GRFU"></div>

                        <button type="submit" class="btn btn-primary mb-5 ms-1">Créer</button>
                    </form>


                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-danger mt-2 mb-5 ms-2" href="../view/home.php"><i class="bi bi-arrow-return-left"></i> Retour</a>


    <?php if (isset($confirmation)) { ?>
        <span id="alertconfirm"></span>
    <?php } ?>

</body>


</html>