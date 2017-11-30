<html>
    <body>
        <h2>Aanmaken nieuwe gebruiker</h2>
        <form method="POST" action="./verwerk.php">
            <h4>E-mail addres</h4>
            <input type="email" name="E-mail" placeholder="iemand@example.com" required autofocus> 
            <h4>Wachtwoord</h4>
            <input type="password" name="wachtwoord" placeholder="Wachtwoord" required> 
            <h4>Herhaal wachtwoord</h4>
            <input type="password" name="wachtwoord Herhalen" placeholder="Wachtwoord" required>
            <h4> Geboortedatum </h4> 
            <input type="date" name="geboortedatum" placeholder="1-1-2000" required>
            <h4> Telefoonnummer </h4> 
            <input type="tel" name="telefoonnummer" placeholder="06-12345678">
            <h4> Adress </h4> 
            <input type="text" name="adres" placeholder="straat, huisnummer, woonplaats" required>
            <h4> postcode </h4> 
            <input type="text" name="postcode" placeholder="1234AB" required>
            <button type="submit">Gebruiker aanmaken</button>
        </form>
    </body>
</html>
<?php
//verbinding maken met DB
$db = "mysql:host=localhost;dbname=kbs1;port=3306";
$user = "root";
$pass = "";
$pdo = new PDO($db, $user, $pass);
//wachtwoord en herhaalwachtwoord controleren
if (_post["wachtwoord"] == _post["Wachtwoord Herhalen"]) {
    password_hash($_post["wachtwoord"], $wachtwoord);
} else {
    print("Zorg dat uw wachtwoord gelijk is.");
}
//van array variable maken om in DB te zetten.
$email = $_post["E-mail"];
$geboortedatum = $_post["geboortedatum"];
$tel = $_post["telefoonnummer"];
$adres = $_post["adres"];
$postcode = $_post["postcode"];
//push to DB
//$stmt = $pdo->prepare("insert into 'gebruiker' $email, $wachtwoord, $geboortedatum, $Telfoonnummer, $adres, $postcode");
$stmt = $pdo->prepare("select * from gebruiker");
?>