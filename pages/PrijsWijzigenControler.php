<?php
include '../controller/DB-connectie.php';
$PrijsNieuw = filter_input(INPUT_POST, "tariefNieuw");
if(!preg_match("#[0-9]+#", $PrijsNieuw)){
    die("Voer alleen cijfers in");
}
elseif (preg_match("#[A-Z]#", $PrijsNieuw)) {
    die("Voer alleen cijfers in");
}
elseif (preg_match("#[a-z]#", $PrijsNieuw)) {
    die("Voer alleen cijfers in");
}
elseif (preg_match("#[\W]#", $PrijsNieuw)) {
    die("Voer alleen cijfers in");
}
else{
    $startTrans = $pdo->prepare("START TRANSACTION");
    $PrijsInvoeren = $pdo->prepare("UPDATE `vak` SET tarief = ` . $PrijsNieuw . ` WHERE 1=1");
    $Commit = $pdo->prepare("COMMIT");
    $Rolback = $pdo->prepare("ROLLBACK");
    try{
    $startTrans->execute();
    $PrijsInvoeren->execute();
    } catch (PDOException $e) {
        $Rolback->execute();
        print($e->getMessage());
        die("Er is een fout opgetreden, probeer het later opnieuw.");
    }
    $Commit->execute();
}
header("Location: ../pages/PrijsWijzigen"); //stuurt gebruiker terug naar PrijsWijzigen.php