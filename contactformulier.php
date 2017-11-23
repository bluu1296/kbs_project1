<?php 
if(isset($_POST['submit'])){
    $to = "jb.bijles@gmail.com"; // Email adres van de admin
    $from = ($_POST['email']); // Email adres van de gebruiker
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Inschrijf formulier";
    $subject2 = "Kopie van uw bericht";
    $message = $first_name . " " . $last_name . " " . $from . " schreef het volgende:" . "\n\n" . $_POST['message'];
    $message2 = "Bijgaand ontvangt u een kopie van uw bericht " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // Kopie naar Gebruiker
    echo "We hebben uw bericht ontvangen. Hartelijk dank " . $first_name . ", we nemen zo spoedig mogelijk contact met u op.";
    }
?>

<!DOCTYPE html>
<head>
<title>Contact formulier</title>
</head>
<body>

<form action="" method="post">
Voornaam: <input type="text" name="first_name"><br>
Achternaam: <input type="text" name="last_name"><br>
E-mail: <input type="text" name="email"><br>
Uw bericht:<br><textarea rows="5" name="message" cols="30"></textarea><br>
<input type="submit" name="submit" value="Verzenden">
</form>