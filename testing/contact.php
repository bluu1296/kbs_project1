<?php 
//$to is de email van Admin en $from is de email van Gebruiker
//$Variabel2 stuurt een kopie naar Gebruiker.
if(isset($_POST['submit'])){
    $to = "jb.bijles@gmail.com"; 
    $from = ($_POST['email']); 
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $telnummer = $_POST['telnummer'];
    $subject = "Inschrijf formulier";
    $subject2 = "Kopie van uw bericht";
    $message =  "Gegevens" . "\n\n" . "\n" . "Voornaam: " . $first_name . "\n" . "Achternaam: " . $last_name . "\n" . "Telefoonnummer: " . $telnummer . "\n" . "Email: " . $from . " schreef het volgende:" . "\n\n" . $_POST['message'];
    $message2 = "Bijgaand ontvangt u een kopie van uw bericht " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "We hebben uw bericht ontvangen " . $first_name . ". Er wordt spoedig mogelijk contact opgenomen.";
    }
?>

<!DOCTYPE html>
<head>
<title>Contact formulier</title>
</head>
<body>

