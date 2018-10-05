<?php
/**
 * Created by PhpStorm.
 * User: hisha
 * Date: 05/10/18
 * Time: 10:25
 */
namespace Model;

require "../../app/db.php";

class checkpoint1Model{
    private $datatable ="checkpoint1"
    public function SelectAllItems(){

        $pdo = new \PDO(DSN, USER, PASS);
        $sql = "SELECT * FROM".$this->datatable;

        $resultat = $pdo->query($sql);

        return $resultat;
    }
}