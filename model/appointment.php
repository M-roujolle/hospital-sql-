<?php

class Appointments extends DataBase
{
    public function recordAppointments(string $dateHour, int $idPatient)
    {
        $db = $this->connectDb();
        $sql = "INSERT INTO appointments (dateHour,idPatients) VALUES (:dateHour,:idPatient);";
        $query = $db->prepare($sql);
        $query->bindValue(":dateHour", $dateHour, PDO::PARAM_STR);
        $query->bindValue(":idPatient", $idPatient, PDO::PARAM_INT);
        $query->execute();
    }

    public function seeAppointment()
    {
        // appointments.id ne doit pas avoir de magic quote, lui mettre un alias "AS" entre simple quote
        $db = $this->connectDb();
        $sql = "SELECT appointments.id AS 'idrdv',`lastname`, `firstname`, `dateHour`
        FROM `appointments`
        INNER JOIN `patients`
        ON appointments.idPatients = patients.id";
        return $db->query($sql)->fetchAll();
    }

    public function deteleAppointments($id)
    {
        $db = $this->connectDb();
        $sql = "DELETE FROM appointments WHERE id = :id;";
        $requete = $db->prepare($sql);
        $requete->bindValue(":id", $id, PDO::PARAM_INT);
        $requete->execute();
    }
}
