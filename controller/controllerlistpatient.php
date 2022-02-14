<?php
require '../config.php';
require '../model/DataBase.php';
require '../model/patient.php';

$getPatients = new Patient;
// var_dump($getPatients->GetAllPatients());


// var_dump($_GET);

if (isset($_GET["id"])) {
    $getPatients->DeletePatient($_GET["id"]);
}

$patients = $getPatients->GetAllPatients();

// var_dump($_POST);
