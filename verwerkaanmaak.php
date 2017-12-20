<?php
//verbinden met DB
include 'DB-connectie.php';

//van array variable maken om in DB te zetten.
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
//wachtwoord en herhaalwachtwoord controleren als klopt wachtwoord hashen.
if ($wachtwoord === $herhaalwachtwoord) {
    $password_hash = password_hash($wachtwoord, PASSWORD_BCRYPT);
} else {
    print("Zorg dat u twee keer het zelfde wachtwoord invoerd."); //foutmelding als wachtwoorden niet gelijk zijn
}
//check of account al bestaat
$emailcheck = $pdo->prepare("select from 'gebruiker', 'email'");
$emailcheck->execute();
if($email == $emailcheck){
    print("Dit account bestaat al");
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

}
 catch(PDOException $e) //foutmelding als iets niet werkt
 {
    print("Fout:" . $e->getMessage());
   $transRolback->execute(); //rollback uitvoeren
 }
 //var_dump($registreerB);
header("Location: index.php");
?>