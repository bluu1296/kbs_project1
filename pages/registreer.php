<div class="container">
    <h2>Aanmaken nieuwe gebruiker</h2>
    <form action="registreerController.php" method="post">
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
        <h4> Telefoonnummer </h4> 
        <input type="tel" name="telefoonnummer" placeholder="06-12345678">
        <h4> Straatnaam </h4> 
        <input type="text" name="straatnaam" placeholder="middenweg" required>
        <h4> Huisnummer </h4> 
        <input type="text" name="huisnummer" placeholder="1" required>
        <h4> Toevoeging </h4> 
        <input type="text" name="toevoeging" placeholder="B">
        <h4> Plaatsnaam </h4> 
        <input type="text" name="Plaatsnaam" placeholder="Zwolle" required>
        <h4> postcode </h4> 
        <input type="text" name="postcode" placeholder="1234AB" required><br>
        <input type="submit" value="Account aanmaken">
    </form>
</div>