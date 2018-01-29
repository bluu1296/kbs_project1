<div class="container">
    <h2>Afspraak maken</h2>
    <form action="../controller/afspraakController.php" method="post">
        <input type="text" name="vak" placeholder="Wiskunde" required>
        <h4>E-mail adres</h4>
        <input type="email" name="email" placeholder="iemand@example.com" required autofocus> 
        <h4>Begin tijd</h4>
        <input type="datetime-local" name="begintijd" placeholder="" required>
        <h4>Eind tijd</h4>
        <input type="datetime-local" name="eindtijd" placeholder="" required>
        <br><input type="submit" value="Afspraak maken">
    </form>
</div>
