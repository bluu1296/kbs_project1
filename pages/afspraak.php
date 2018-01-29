<div class="container">
    <h2>Afspraak maken</h2>
    <form action="" method="post">
        <h4>Vak</h4>
        <select name="vak">
            <option value="1">Wiskunde</option>
            <option value="2">Bedrijfskunde</option>
            <option value="3">Economie</option>
        </select>
        <h4>E-mail adres</h4>
        <input name="email" value="<?php echo $_SESSION['id'] ?>" disabled>
        <h4>Begin tijd</h4>
        <input type="datetime-local" name="begintijd" placeholder="" required>
        <h4>Eind tijd</h4>
        <input type="datetime-local" name="eindtijd" placeholder="" required>
        <br><input type="submit" value="Afspraak maken">
    </form>
</div>