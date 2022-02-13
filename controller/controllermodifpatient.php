<?php
require '../config.php';
require '../model/DataBase.php';
require '../model/patient.php';


$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '-]{2,30}$/u";
// $rexgexMail = "/^([a-z.-]+)@([a-z]+).([a-z]){2,4}$/u";
$regexPhone = "/^^[0-9]{10}$/u"; // comprend les chiffre de 0 à 9 et pas plus de 10 chiffres

$patient = new Patient;
$arrayError = [];

// var_dump($_POST);

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

if (isset($_GET["id"])) {
    $patientSolo = $patient->GetOnePatient($_GET["id"]);
}

if (isset($_POST["idpatient"])) {

    if (!empty($_POST)) {
        if (isset($_POST["nom"])) {
            if (empty($_POST["nom"])) {
                $arrayError["nom"] = "Veuillez saisir votre nom";
            } elseif (!preg_match($regexNom, $_POST["nom"])) {
                $arrayError["nom"] = "Format invalide";
            }
        }
    }
    if (isset($_POST["prenom"])) {
        if (empty($_POST["prenom"])) {
            $arrayError["prenom"] = "Veuillez saisir votre prenom";
        } elseif (!preg_match($regexNom, $_POST["prenom"])) {
            $arrayError["prenom"] = "Format invalide";
        }
    }
    if (isset($_POST["datedenaissance"])) {
        if (empty($_POST["datedenaissance"])) {
            $arrayError["datedenaissance"] = "Veuillez saisir votre date de naissance";
        } elseif (!validateDate($_POST['datedenaissance'], 'Y-m-d')) {
            $arrayError["datedenaissance"] = "Format invalide";
        }
    }

    if (isset($_POST["telephone"])) {
        if (empty($_POST["telephone"])) {
            $arrayError["telephone"] = "Veuillez saisir votre telephone";
        } elseif (!preg_match($regexPhone, $_POST["telephone"])) {
            $arrayError["telephone"] = "Numéro invalide";
        }
    }


    if (empty($arrayError)) {
        $insert = new Patient;
        $insert->ModifyPatient($_POST["nom"], $_POST["prenom"], $_POST["datedenaissance"], $_POST["telephone"], $_POST["mail"], $_POST["idpatient"]);
        $modification = 1;
    }


    $patientSolo = $patient->GetOnePatient($_GET["id"]);
}
