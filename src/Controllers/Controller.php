<?php
/**
 * Created by PhpStorm.
 * User: hisha
 * Date: 05/10/18
 * Time: 10:25
 */
namespace Controller;

use Model\checkpoint1Model;

class checkpoint1Controller{

    public function index(){


        $objetcheckpoint1 = new checkpoint1Model();


        $toutesmesvaleurs = $objetcheckpoint1->SelectAllItems();

        require'../Views/View.php'


        return $toutesmesvaleurs;
    }
}