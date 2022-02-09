<?php
require '../config.php';
require '../model/DataBase.php';
require '../model/patient.php';

$patient = new Patient;

if ((isset($_POST["id"]) && isset($_POST["idpatient"]))) {
    $patientSolo = $patient->GetOnePatient($_POST["id"]);
} else {
    header('Location: listpatient.php');
    exit();
}
