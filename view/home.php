<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Hospital Gallagher</title>
</head>

<body>


    <!-- navabar-------------------------------------------------------------- -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Hospital Gallagher</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/addpatient.php">Ajouter / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/listpatient.php">Lister-Modifier / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/programlist.php">Programmer / </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="../view/seeappointment.php">Voir les rdv </a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search-heart"></i></button>
                </form>
            </div>
        </div>
    </nav>
    <div class="principalepict">
    </div>

    <!-- navabr -------------------------------------------------------------->

    <!-- card ---------------------------------------------------------------->
    <div class=" d-flex justify-content-center">
        <div class="card w-75 mt-5 text-center">
            <div class="card-body">
                <h5 class="card-title">Ajouter un ou plusieurs patient</h5>
                <p class="card-text">Hospital Gallagher vous accompagne dans la connaissance de l'historique de vos patients en créant des fiches patients correspondantes, comprenant les données personnelles du patient.</p>
                <a href="../view/addpatient.php" class="btn btn-primary col-3">Ajouter</a>
            </div>
        </div>
    </div>

    <div class=" d-flex justify-content-center">
        <div class="card w-75 mt-5 text-center">
            <div class="card-body">
                <h5 class="card-title">Lister ou modifier un patient</h5>
                <p class="card-text">Hospital Gallagher vous accompagne dans la modification de l'historique de vos patients.</p>
                <a href="../view/listpatient.php" class="btn btn-primary col-3">Voir</a>
            </div>
        </div>
    </div>

    <div class=" d-flex justify-content-center">
        <div class="card w-75 mt-5 text-center">
            <div class="card-body">
                <h5 class="card-title">Programmer un rendez vous</h5>
                <p class="card-text">Hospital Gallagher vous accompagne dans la programmation des rendez vous patient.</p>
                <a href="../view/programlist.php" class="btn btn-primary col-3">Programmer</a>
            </div>
        </div>
    </div>

    <div class=" d-flex justify-content-center mb-5">
        <div class="card w-75 mt-5 text-center">
            <div class="card-body">
                <h5 class="card-title">Voir les rendez-vous</h5>
                <p class="card-text">Hospital Gallagher vous propose de lister et de modifier vos rendez vous.</p>
                <a href="../view/seeappointment.php" class="btn btn-primary col-3">Voir</a>
            </div>
        </div>
    </div>
    <!-- card ---------------------------------------------------------------->

    <!-- footer -------------------------------------------------------------->
    <div class="footer-basic bg-dark text-white">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>


</html>