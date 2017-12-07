<html>
    <body>
        <h2>Aanmaken nieuwe gebruiker</h2>
        <form method="POST">
            <h4>Voornaam</h4>
            <input type="text" name="voornaam" placeholder="Piet" required>
            <h4>Achternaam</h4>
            <input type="text" name="achternaam" placeholder="Hendriks" required>
            <h4>E-mail addres</h4>
            <input type="email" name="E-mail" placeholder="iemand@example.com" required autofocus> 
            <h4>Wachtwoord</h4>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required> 
            <h4>Herhaal wachtwoord</h4>
            <input type="password" name="wachtwoord_herhalen" placeholder="Wachtwoord" required>
            <h4> Geboortedatum </h4> 
            <input type="date" name="geboortedatum" required>
            <h4> Telefoonnummer </h4> 
            <input type="tel" name="telefoonnummer" placeholder="06-12345678">
            <h4> Adress </h4> 
            <input type="text" name="adres" placeholder="straat, huisnummer, woonplaats" required>
            <h4> postcode </h4> 
            <input type="text" name="postcode" placeholder="1234AB" required><br>
            <button type="submit">Gebruiker aanmaken</button>
        </form>
    </body>
</html>
<?php
//DB gegevens
$db = "mysql:host=localhost;dbname=kbs1;port=3306";
$user = "root";
$pass = "";
$pdo = new PDO($db, $user, $pass); 

//van array variable maken om in DB te zetten.
$email = $_POST["E-mail"];
$geboortedatum = $_POST["geboortedatum"];
$tel = $_POST["telefoonnummer"];
$adres = $_POST["adres"];
$postcode = $_POST["postcode"];
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$wachtwoord = $_POST["wachtwoord"];
$herhaalwachtwoord = $_POST["wachtwoord_herhalen"];

//wachtwoord en herhaalwachtwoord controleren als klopt wachtwoord hashen.
if ($wachtwoord === $herhaalwachtwoord) {
    $password_hash = password_hash($wachtwoord, PASSWORD_BCRYPT);
} else {
    print("Zorg dat u twee keer het zelfde wachtwoord invoerd."); //foutmelding als wachtwoorden niet gelijk zijn
}
//check of account al bestaat
$emailcheck = $pdo->prepare("select from 'gebruiker' 'email'");
$email->execute();
if($email == $emailcheck){
    print("Dit account bestaat al");
}
//push to DB
try{ //'try' zodat er foutmelding gegeven wordt als het niet lukt met de catch
$registreer = $pdo->prepare("insert into gebruiker (email, password, telefoonnummer, adres, voornaam, achternaam)
        VALUES   (:email, : password, :telefoonnummer, :adres, :voornaam, :achternaam)"); //SQL Querry
        $stmt->bindParam(':email', $email); //email
        $stmt->bindParam(':password', $password_hash); //hashed password
        $stmt->bindParam(':telefoonnummer', $tel); //telefoonnummer
        $stmt->bindParam(':adres', $adres); //adres
        $stmt->bindParam(':voornaam', $achternaam); //achternaam
        $stmt->bindParam(':achternaam', $achternaam); //voornaam
$stmt->execute(); //execute order 66

    print("account succesvol aangemaakt!");
    }
 catch(PDOException $e) //foutmelding als iets niet werkt
 {
    print("Fout:" . $e->getMessage());
 }
?>