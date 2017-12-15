<?php
//verbinden met DB
include 'DB-connectie.php';

//van array variable maken om in DB te zetten.
$email = filter_input(INPUT_POST, "E-mail"); //filtert dingen er uit maakt het veiliger
//$geboortedatum = filter_input(INPUT_POST, "geboortedatum");
$tel = filter_input(INPUT_POST, "telefoonnummer");
$adres = filter_input(INPUT_POST, "adres");
$postcode = filter_input(INPUT_POST, "postcode");
$voornaam = filter_input(INPUT_POST, "voornaam");
$achternaam = filter_input(INPUT_POST, "achternaam");
$wachtwoord = filter_input(INPUT_POST, "wachtwoord");
$herhaalwachtwoord = filter_input(INPUT_POST, "wachtwoord_herhalen");

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
$registreer = $pdo->prepare("START TRANSACTION INSERT INTO gebruiker(telefoonnummer, adres, voornaam, achternaam, postcode)
        VALUES   (telefoonnummer, adres, voornaam, achternaam, postcode) INSERT INTO inlog (email, wachtwoord) VALUES (email, wachtwoord) commit"); //SQL Querry gebruik makent van een transactie zodat data pas opgeslagen wordt als de hele querry uitgevoerd is.
        $registreer->bindValue('email', $email); //email
        $registreer->bindValue('wachtwoord', $password_hash); //hashed password
        $registreer->bindValue('telefoonnummer', $tel); //telefoonnummer
        $registreer->bindValue('adres', $adres); //adres
        $registreer->bindValue('voornaam', $achternaam); //achternaam
        $registreer->bindValue('achternaam', $achternaam); //voornaam
        $registreer->bindValue('postcode', $postcode); //postcode
$registreer->execute(); //execute order 66
    }
    
 catch(PDOException $e) //foutmelding als iets niet werkt
 {
    print("Fout:" . $e->getMessage());
    
 }
 header("Location: index.php")
?>
