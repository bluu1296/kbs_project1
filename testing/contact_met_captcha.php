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
<title>
    <h3 style="margin-bottom: 25px; text-align: 125%;"> Contactformulier</h3></title>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>

<form action="" method="post">
Voornaam: <br><input type="text" name="first_name"><br><br>
Achternaam: <br><input type="text" name="last_name"><br><br>
Telefoonnummer: <br><input type="text" name="telnummer"><br><br>
E-mail: <br><input type="text" name="email"><br><br>
<br>
Uw bericht:<br><textarea rows="5" name="message" cols="30"></textarea><br>

<div class="g-recaptcha" data-sitekey="6Lcbwj8UAAAAALC-fcDk9s1ZzWcAJbsCOyBoaE13"></div>
					<button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Verzenden</button>
</form>
