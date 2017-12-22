<div class="container">
<h2>Aanmaken nieuwe gebruiker</h2>
	<form method="POST">
		<h4>Voornaam</h4>
        <input type="text" name="voornaam" placeholder="Voornaam" required>
        <h4>Achternaam</h4>
        <input type="text" name="achternaam" placeholder="Achternaam" required>
        <h4>E-mailadres</h4>
        <input type="email" name="E-mail" placeholder="iemand@example.com" required autofocus> 
        <h4>Wachtwoord</h4>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord" required> 
        <h4>Herhaal wachtwoord</h4>
        <input type="password" name="wachtwoord_herhalen" placeholder="Wachtwoord" required>
        <h4> Geboortedatum </h4> 
        <input type="date" name="geboortedatum" required>
        <h4> Telefoonnummer </h4> 
        <input type="tel" name="telefoonnummer" placeholder="06-12345678">
        <h4> Adres </h4> 
        <input type="text" name="adres" placeholder="straat, huisnummer, woonplaats" required>
        <h4> postcode </h4> 
        <input type="text" name="postcode" placeholder="1234AB" required><br>
        <button type="submit">Gebruiker aanmaken</button>
	</form>
</div>