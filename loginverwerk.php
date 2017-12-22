<?php

//session_start();
//$_SESSION["ERROR"] = array("gebruikersnaam en/of wachtwoord niet gevonden");
include 'DB-connectie.php';
//verbinden met de database
//wachtwoord controleren\
try {
    //var_dump($_POST);
    $email = filter_input(INPUT_POST, "e-mail");
    $wachtwoord = filter_input(INPUT_POST, "wachtwoord");
//$query = new Querier();
    $resultaat = $pdo->prepare('SELECT wachtwoord FROM gebruiker WHERE email="' . $email . '"');
    $resultaat->execute();
    $actief = $pdo->prepare('SELECT actief FROM gebruiker WHERE email="' . $email . '"');
    $actief->execute();
if ($actief == 0){
      exit("Uw account is nog niet geactiveerd door de beheerder. Bij vragen neem contact op met 'email'");
}
} catch (PDOException $e) { //foutmelding als iets niet werkt
    print("Fout:" . $e->getMessage()); //geeft error message als er iets mis gaat met de DB
}
$wachtwoordverify = $resultaat->fetch();

//print_r($wachtwoordverify[0]);
//echo $email;
//echo $wachtwoord;
//$test = $wachtwoordverify['wachtwoord'];
//$hash = '$2y$10$Ss7N.f0OpuYaJShvB89g5uYPe44H/VvKQoMxKU';
//var_dump(password_verify($wachtwoord, $wachtwoordverify[0]));
if (password_verify($wachtwoord, $wachtwoordverify[0]) == TRUE) { //verifieerd wachtwoord met de hash uit de DB
//  print("geslaagd");
    header("Location: ingelogd.php");
} else {
    //print("gefaald");
    header("Location: login.php");
}