<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Registreer
 *
 * @author binh_
 */


class Registreer {
	public function __construct() {
		require_once './pages/registreer.php';
		 
		$this->_other();
	}
	public function _other() {
		include 'DB-connectie.php';
		
		$email = filter_input(INPUT_POST, "E-mail"); //filtert dingen er uit maakt het veiliger
		//$geboortedatum = filter_input(INPUT_POST, "geboortedatum");
		$tel = filter_input(INPUT_POST, "telefoonnummer");
		$straatnaam = filter_input(INPUT_POST, "straatnaam");
		$postcode = filter_input(INPUT_POST, "postcode");
		$voornaam = filter_input(INPUT_POST, "voornaam");
		$achternaam = filter_input(INPUT_POST, "achternaam");
		$wachtwoord = filter_input(INPUT_POST, "wachtwoord");
		$herhaalwachtwoord = filter_input(INPUT_POST, "wachtwoord_herhalen");
		$huisnummer = filter_input(INPUT_POST, "huisnummer");
		$toevoeging = filter_input(INPUT_POST, "toevoeging");
		$plaatsnaam = filter_input(INPUT_POST, "plaatsnaam");
		// standaard rol
		$standaardRol = '0';
		//wachtoord validatie op hoofdletter cijfer speciaal teken en minimaal 8 letters.
		
		if(isset($_POST['wachtwoord'])) {
			if(strlen($wachtwoord) < '8') {
				$wachtwoordError = "Zorg dat uw wachtwoord minstens 8 tekens bevat.";
				exit($wachtwoordError);
			} elseif(!preg_match("#[0-9]+#", $wachtwoord)) {
				$wachtwoordError = "Zorg dat uw wachtwoord minstens één cijfer bevat.";
				exit($wachtwoordError);
			} elseif(!preg_match("#[A-Z]+#", $wachtwoord)) {
				$wachtwoordError = "Zorg dat uw wachtwoord minstens één hoofdletter bevat";
				exit($wachtwoordError);
			}elseif(!preg_match("#[a-z]+#", $wachtwoord)) {
				$wachtwoordError = "Zorg dat uw wachtwoord minstens één kleine letter bevat"; 
				exit($wachtwoordError);
			}elseif(!preg_match("#[\W]+#", $wachtwoord)) {
				$wachtwoordError = "Zorg dat uw wachtwoord minstens één speciaal teken bevat";
				exit($wachtwoordError);
			}
			 elseif ($wachtwoord !== $herhaalwachtwoord) {
				$wachtwoordError = "Zorg dat u twee keer het zelfde wachtwoord invoert.";
				exit($wachtwoordError);
			} else {
				$wachtwoordError = "Uw wachtwoord is goed!";
			}
		
		
//		wachtwoord en herhaalwachtwoord controleren als klopt wachtwoord hashen.
			if ($wachtwoord === $herhaalwachtwoord) {
				$password_hash = password_hash($wachtwoord, PASSWORD_BCRYPT);
			}
			//check of account al bestaat
			$emailcheck = $pdo->prepare("select email from `gebruiker`");
			$emailcheck->execute();
			if($email == $emailcheck){
				exit("Dit account bestaat al");
			}
			
			//push to DB
			try{ //'try' zodat er foutmelding gegeven wordt als het niet lukt met de catch
				$transStart = $pdo->prepare("START TRANSACTION"); //start transactie
				$registreerA = $pdo->prepare("INSERT INTO `gebruiker` (`voornaam`, `achternaam`, `email`, `telefoonnummer`, `wachtwoord`, `actief`, `rol`) 
					VALUES ('" . $voornaam . "', '" . $achternaam . "', '" . $email . "', '" . $tel . "', '" . $password_hash . "', '1', '". $standaardRol . "')"); //SQL Querry gebruik makent van een transactie zodat data pas opgeslagen wordt als de hele querry uitgevoerd is.

				$registreerB = $pdo->prepare("INSERT INTO `adres` (`email`, `straatnaam`, `huisnummer`, `plaatsnaam`, `postcode`, `toevoeging`)
					   VALUES ('" . $email . "', '" . $straatnaam . "', '" . $huisnummer . "', '" . $plaatsnaam . "', '" . $postcode . "', '" . $toevoeging . "')");
				$transRolback = $pdo->prepare("ROLLBACK");
				$TransCommit = $pdo->prepare("COMMIT"); //voorbereiden transactie
				$transStart->execute(); //start transactie
				$registreerA->execute();//start querry A
				$registreerB->execute();//start querry B
				$TransCommit->execute();//beindig transactie

				header("Location: /kbs_Project1/index.php");
				die();
			}
			 catch(PDOException $e) //foutmelding als iets niet werkt
			{
				print("Fout:" . $e->getMessage());
			   $transRolback->execute(); //rollback uitvoeren
			}
		}
	}
}
