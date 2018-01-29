<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author binh_
 */


class Login {

    public function __construct() {
        require_once './pages/login.php';

        $this->_other();
    }

    public function _other() {
        include 'DB-connectie.php';
        
//        Remco zijn check voor een actieve gebruiker
//            $actief = $pdo->prepare('SELECT actief FROM gebruiker WHERE email="' . $email . '"');
//            $actief->execute(); 
//            if ($actief == 0) {
//                exit("Uw account is nog niet geactiveerd door de beheerder. Bij vragen neem contact op met 'email'");
//            }
		
        $email = filter_input(INPUT_POST, "email");
        $wachtwoord = filter_input(INPUT_POST, "wachtwoord");

        $resultaat = $pdo->prepare('SELECT wachtwoord FROM gebruiker WHERE email="' . $email . '"');
        $resultaat->execute();
        $wachtwoordverify = $resultaat->fetch();
		
        if(isset($_POST['email'])) {
			if (password_verify($wachtwoord, $wachtwoordverify[0]) == TRUE) { //verifieerd wachtwoord met de hash uit de DB
				session_start($email);
				header("Location: index.php");
			} else {
				echo 'Login failed';
			}
		}
    }

}
