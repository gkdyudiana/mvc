<?php

class Barang_model extends Databases
{

    public function getBarang()
    {
        $query = $this->dbh->prepare("SELECT * FROM barang");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
