<?php
include '../controller/DB-connectie.php';
$prijsStmt = $pdo->prepare("SELECT `tarief` FROM `vak` LIMIT 1");
$prijsStmt->execute();
$prijs = $prijsStmt->fetch(PDO::FETCH_ASSOC);
?>
<html>
    <body>
        <h2>Prijs Wijzigen</h2>
        <?php
        print('Oude prijs per uur:€');
        print_r($prijs["tarief"]);
        ?>
        <form action="../controller/PrijsWijzigenControler.php" method="POST">
            Nieuwe prijs per uur:<br>
            <input type="text" name="tariefNieuw" placeholder="Alleen cijfers invoeren!" required><br>
            <input type="submit" value="submit">
        </form>
    </body>
</html>