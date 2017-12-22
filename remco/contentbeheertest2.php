<html>
    <body>
        <form method="POST">
            <h4>Tarief voor vak A</h4>
            <?php print($prijs_A); ?>
            <input type="text" name="Tarief_A">
            <button type="submit">Prijs bevestigen</button> <!-- waarde van variable updaten -->
        </form>
<?php
    include'DB-connectie.php';
    $prijs_A = filter_input(input_POST, "Tarief_A"); //tarief opslaan in variable
    $stmt = $pdo->prepare("insert into 'tarief' ('vak_id', 'tarief') 
            VALUES  (A, '" . $prijs_A . "')"); //tarief in DB zetten
            $stmt->bindParam('vak_id', 'A');
            $stmt->bindParam('tarief', '€10/uur');
?>    
        </body>
</html>