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
}
