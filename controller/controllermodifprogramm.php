<?php
require '../config.php';
require '../model/DataBase.php';
require '../model/patient.php';

$arrayError = [];
$patientObj = new Patient;

$getOneuser = $patientObj->GetOnePatient($_GET["id"]);

// var_dump($_POST);

if (empty($_POST["date"]) && empty($_POST["time"])) {
    $arrayError["empty"] = "Veuillez remplir les champs";
}

// if (empty($arrayError)) {
    
// }
