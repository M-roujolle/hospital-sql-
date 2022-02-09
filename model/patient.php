<?php

class Patient extends DataBase
{
    public function InsertPatient($nom, $prenom, $datedenaissance, $telephone, $mail)
    {
        $db = $this->connectDb();
        $query = "INSERT INTO `patients` (`lastname`, `firstname`,`birthdate`,`phone`,`mail`) VALUES (:lastname, :firstname,:birthdate,:phone,:mail)";
        $requete = $db->prepare($query);
        $requete->bindValue(":lastname", $nom, PDO::PARAM_STR);
        $requete->bindValue(":firstname", $prenom, PDO::PARAM_STR);
        $requete->bindValue(":birthdate", $datedenaissance, PDO::PARAM_STR);
        $requete->bindValue(":phone", $telephone, PDO::PARAM_STR);
        $requete->bindValue(":mail", $mail, PDO::PARAM_STR);
        return $requete->execute();
    }

    public function GetAllPatients()
    {
        $db = $this->connectDb();
        $query = "SELECT * FROM `patients`";
        return $db->query($query)->fetchAll();
    }

    public function DeletePatient($id)
    {
        $db = $this->connectDb();
        $query = "DELETE FROM `patients` WHERE id = :id";
        $requete = $db->prepare($query);
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        return $requete->execute();
    }

    public function GetOnePatient($id)
    {
        $db = $this->connectDb();
        $query = "SELECT * FROM `patients` WHERE id = :id";
        $requete = $db->prepare($query);
        $requete->bindValue(":id", $id, PDO::PARAM_STR);
        $requete->execute();

        return $requete->fetch();
    }

    public function ModifyPatient($lastname, $firstname, $birthdate, $phone, $mail, $id)
    {
        $db = $this->connectDb();
        $query = 'UPDATE `patients` 
        SET `lastname` = :lastname, `firstname` = :firstname, `birthdate` = :birthdate, `phone` = :phone, `mail` = :mail 
        WHERE  `id`= :id';
        $requete = $db->prepare($query);
        $requete->bindValue(":lastname", $lastname, PDO::PARAM_STR);
        $requete->bindValue(":firstname", $firstname, PDO::PARAM_STR);
        $requete->bindValue(":birthdate", $birthdate, PDO::PARAM_STR);
        $requete->bindValue(":phone", $phone, PDO::PARAM_STR);
        $requete->bindValue(":mail", $mail, PDO::PARAM_STR);
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        return $requete->execute();
    }

    // fonction pour voir si le mail est deja existant
    public function checkFreeMail(string $mail): bool
    {
        $db = $this->connectDb();
        $sql = "SELECT `mail`FROM `patients` WHERE `mail` = :mail";
        $query = $db->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();

        if (count($result) == 0) {
            return true;
        } else {
            return false;
        }
    }
}
