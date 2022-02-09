<?php
require '../config.php';
require '../model/DataBase.php';
require '../model/patient.php';


$regexNom = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð '-]{2,30}$/u";
// $rexgexMail = "/^([a-z.-]+)@([a-z]+).([a-z]){2,4}$/u";
$regexPhone = "/^^[0-9]{10}$/u"; // comprend les chiffre de 0 à 9 et pas plus de 10 chiffres
// $addPatientOk = false;

function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}



$arrayError = [];

if (!empty($_POST)) {
    if (isset($_POST["nom"])) {
        if (empty($_POST["nom"])) {
            $arrayError["nom"] = "Veuillez saisir votre nom";
        } elseif (!preg_match($regexNom, $_POST["nom"])) {
            $arrayError["nom"] = "Format invalide";
        }
    }


    // captcha ---------------------------------------------------------------->

    if (empty($_POST['g-recaptcha-response'])) {
        $arrayError['reCaptcha'] = 'Veuillez valider le reCAPTCHA';
    } else {
        // Mise en place des paramètres pour l'analyse du reCaptcha
        $captcha = $_POST['g-recaptcha-response'];
        $secretKey = '6LfaAmMeAAAAANLJL9zCmkflDaWGkNTwsDWasFZY';
        $ip = $_SERVER['REMOTE_ADDR'];

        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response, true);

        if (!$responseKeys["success"]) {
            $arrayError['reCaptcha'] = 'Bots interdit sur ce site';
        }
    }
    // captcha -------------------------------------------------------------------->

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

    $patientMail = new Patient();
    if (isset($_POST["mail"])) {
        if (empty($_POST["mail"])) {
            $arrayError["mail"] = "Veuillez saisir votre mail";
        } elseif (!filter_var($_POST["mail"], FILTER_VALIDATE_EMAIL)) {;
            $arrayError["mail"] = "Format invalide";
        } elseif (!$patientMail->checkFreeMail($_POST['mail'])) {
            $arrayError["mail"] = "Cette adresse mail est déjà utilisée";
        }
    }

    if (empty($arrayError)) {
        $insert = new Patient;
        $insert->InsertPatient($_POST["nom"], $_POST["prenom"], $_POST["datedenaissance"], $_POST["telephone"], $_POST["mail"],);
        $confirmation = "";
    }
}
