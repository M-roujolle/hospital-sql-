<?php
require '../config.php';
require '../model/DataBase.php';
require '../model/appointment.php';
require '../model/patient.php';

$patientObj = new Patient;
$patients = $patientObj->GetAllPatients();



if (isset($_POST["recordBtn"])) {
    $id = htmlspecialchars(trim($_POST["idpatient"]));
    $date = htmlspecialchars(trim($_POST["date"]));
    $time = htmlspecialchars(trim($_POST["time"]));
    $dateHour = $date . " " . $time;
    var_dump($id, $dateHour);
    $appointmentObj = new Appointments;
    $appointmentObj->recordAppointments($dateHour, $id);
}
