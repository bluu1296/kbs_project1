<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Account {

    public function __construct() {
        require_once './pages/accountbeheer.php';

        $this->_other();
    }

    public function _other() {
        include 'DB-connectie.php';
        include 'loginController.php';

        if (isset(INPUT_POST['voornaam'])) {
            $voornaam = filter_input(FILTER_POST, INPUT_POST['voornaam']);

            $resultaat = $pdo->prepare('UPDATE gebruiker SET voornaam = ' . $voornaam . '');
            $resultaat->execute();
        }
        if (isset(INPUT_POST['achternaam'])) {
            $achternaam = filter_input(FILTER_POST, INPUT_POST['achternaam']);

            $resultaat = $pdo->prepare('UPDATE gebruiker SET achternaam = ' . $achternaam . '');
            $resultaat->execute();
        }
        if (isset(INPUT_POST['telefoonnummer'])) {
            $telefoonnummer = filter_input(FILTER_POST, INPUT_POST['telefoonnummer']);

            $resultaat = $pdo->prepare('UPDATE gebruiker SET telefoonnummer = ' . $telefoonnummer . '');
            $resultaat->execute();
        }
        if (isset(INPUT_POST['email'])) {
            $email = filter_input(FILTER_POST, INPUT_POST['email']);

            $resultaat = $pdo->prepare('UPDATE gebruiker SET email = ' . $email . '');
            $resultaat->execute();
        }
        if (isset(INPUT_POST['postcode'])) {
            $postcode = filter_input(FILTER_POST, INPUT_POST['postcode']);

            $resultaat = $pdo->prepare('UPDATE adres SET postcode = ' . $postcode . '');
            $resultaat->execute();
        }
        if (isset(INPUT_POST['straat'])) {
            $straat = filter_input(FILTER_POST, INPUT_POST['straat']);

            $resultaat = $pdo->prepare('UPDATE adres SET straat = ' . $straat . '');
            $resultaat->execute();
        }
        if (isset(INPUT_POST['huisnummer'])) {
            $huisnummer = filter_input(FILTER_POST, INPUT_POST['huisnummer']);

            $resultaat = $pdo->prepare('UPDATE adres SET huisnummer = ' . $huisnummer . '');
            $resultaat->execute();
        }
        if (isset(INPUT_POST['plaats'])) {
            $plaats = filter_input(FILTER_POST, INPUT_POST['plaats']);

            $resultaat = $pdo->prepare('UPDATE adres SET plaats = ' . $plaats . '');
            $resultaat->execute();
        }
    }
}        