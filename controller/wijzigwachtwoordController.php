<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class wijzigWachtwoord {

    public function __construct() {
        require_once './pages/wijzigwachtwoord.php';

        $this->_other();
    }

    public function _other() {
        include 'DB-connectie.php';
        include 'loginController.php';



        if ($_SESSION['logged_in'] == false) {
            header('Location: /kbs_Project1/index.php');
        } else {
            
            $oudWW = filter_input(FILTER_POST, INPUT_POST['oudww']);
            $nieuwWW = filter_input(FILTER_POST, INPUT_POST['nieuwww']);
            $nieuwWWh = filter_input(FILTER_POST, INPUT_POST['nieuwwwh']);

            $resultaat = $pdo->prepare('SELECT wachtwoord FROM gebruiker WHERE email="' . $_SESSION['id'] . '"');
            $resultaat->execute();
            $wachtwoordverify = $resultaat->fetch();

            if (strlen($nieuwWW) < '8') {
                $wachtwoordError = "Zorg dat uw wachtwoord minstens 8 tekens bevat.";
                exit($wachtwoordError);
            } elseif (!preg_match("#[0-9]+#", $nieuwWW)) {
                $wachtwoordError = "Zorg dat uw wachtwoord minstens één cijfer bevat.";
                exit($wachtwoordError);
            } elseif (!preg_match("#[A-Z]+#", $nieuwWW)) {
                $wachtwoordError = "Zorg dat uw wachtwoord minstens één hoofdletter bevat";
                exit($wachtwoordError);
            } elseif (!preg_match("#[a-z]+#", $nieuwWW)) {
                $wachtwoordError = "Zorg dat uw wachtwoord minstens één kleine letter bevat";
                exit($wachtwoordError);
            } elseif (!preg_match("#[\W]+#", $nieuwWW)) {
                $wachtwoordError = "Zorg dat uw wachtwoord minstens één speciaal teken bevat";
                exit($wachtwoordError);
            } elseif ($nieuwWW !== $nieuwWWh) {
                $wachtwoordError = "Zorg dat u twee keer het zelfde wachtwoord invoert.";
                exit($wachtwoordError);
            } else {
                $wachtwoordError = "Uw wachtwoord is goed!";
            }

            if (password_verify($oudwWW, $wachtwoordverify[0]) && $nieuwWW === $nieuwWWh) {
                $password_hash = password_hash($nieuwWW, PASSWORD_BCRYPT);
                $resultaat = $pdo->prepare('UPDATE gebruiker SET wachtwoord = ' . $password_hash . ' WHERE email="' . $_SESSION['id'] . '"');
                $resultaat->execute();                  // Wijzigt het wachtwoord
            }
        }
    }

}
