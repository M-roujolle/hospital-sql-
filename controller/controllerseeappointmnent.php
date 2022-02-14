<?php
require '../config.php';
require '../model/DataBase.php';
require '../model/patient.php';
require '../model/appointment.php';

$seeappoitments = new Appointments;

$appointments = $seeappoitments->seeAppointment();

if (isset($_POST["idrdv"], $_POST["idsupp"])) {
    $seeappoitments->deteleAppointments($_POST["idrdv"]);
    $appointments = $seeappoitments->seeAppointment(); // permet d'actualiser la page une fois la suppression faite
}
