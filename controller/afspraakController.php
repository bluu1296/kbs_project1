<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of afspraak
 *
 * @author binh_
 */
class Afspraak {

    public function __construct() {
        require_once './pages/afspraak.php';
        $this->_other();
    }

    protected function _other() {
        include 'DB-connectie.php';

        $vak = filter_input(INPUT_POST, "vak");
        $email = filter_input(INPUT_POST, "email");
        $begintijd = filter_input(INPUT_POST, "begintijd");
        $eindtijd = filter_input(INPUT_POST, "eindtijd");


        $transStart = $pdo->prepare("START TRANSACTION"); //start transactie

        $afspraakmakenA = $pdo->prepare("INSERT INTO `afspraak` (gebruiker_id) SELECT gebruiker_id FROM gebruiker WHERE email = " . $email . "");
        $afspraakmakenB = $pdo->prepare("INSERT INTO `afspraak` (vak_id) SELECT vak_id FROM vak WHERE naam = " . $vak . "");
        $afspraakmakenC = $pdo->prepare("INSERT INTO `afspraak` (begintijd, eindtijd) VALUES (" . $begintijd . ", " . $eindtijd . "");
        $afspraakmakenD = $pdo->prepare("SELECT * FROM gebruiker");

        $transCommit = $pdo->prepare("COMMIT"); //commit

        $transStart->execute();
        $afspraakmakenA->execute();
        $afspraakmakenB->execute();
        $afspraakmakenC->execute();
        $afspraakmakenD->execute();
        $transCommit->execute();
        
        print_r($afspraakmakenD);
    }

}
