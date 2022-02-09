<?php

require '../config.php';
require '../model/DataBase.php';
require '../model/patient.php';

$patient = new Patient;
$arrayError = [];


var_dump($_POST);

if (isset($_GET['id'])) {
    $patientSolo = $patient->GetOnePatient($_GET["id"]);
}

if (isset($_POST["idpatient"])) {

    if (empty($arrayError)) {
        $insert = new Patient;
        $insert->ModifyPatient($_POST["nom"], $_POST["prenom"], $_POST["datedenaissance"], $_POST["telephone"], $_POST["mail"], $_POST["idpatient"]);
    }

    $patientSolo = $patient->GetOnePatient($_GET["id"]);
    $modification = 1;
}
