<?php
include '../controller/DB-connectie.php';
$tebevestigenGebruiker = $pdo->prepare("SELECT email FROM gebruiker WHERE actief = `0` LIMIT 1"); //haalt gebruiker die nog niet bevestigd zijn op uit DB
$tebevestigenGebruiker->execute();
$result = $tebevestigenGebruiker->fetch(PDO::FETCH_ASSOC);
?>
<html>
    <body>
        <form action="accountBevestig.php" method="POST">
        <table>
            <tr>
                <th>E-mail</th>
                <th>Actie</th>
                <th>Verzenden</th>
            </tr>
            <tr>
                <td><?php print($result) ?></td>
                <td><select name="bevestig">
                        <option value="Bevestig">Bevestig</option>
                        <option value="Verwijder">Verwijder</option>
                        </select></td>
                <td><input type="submit" value="Verzenden"></td>
            </tr>
        </table>
        </form>
    </body>

<?php //'back-end'

$bevestigen = filter_input(INPUT_POST, "bevestigen");
if(isset($bevestigen)){
    $bevestig = $pdo->prepare("UPDATE gebruiker SET actief = `1` WHERE email = ` . $email . `");
    $verwijderA = $pdo->prepare("DELETE * FROM adres WHERE email = ` . $email . `");
    $verwijderB = $pdo->prepare("DELETE * FROM gebruiker WHERE email = ` . $email . `");
    $startTrans = $pdo->prepare("START TRANS");
    $Rolback = $pdo->prepare("ROLLBACK");
    $Commit = $pdo->prepare("COMMIT");
}
if($bevestigen == "bevestig") {
    $bevestig->execute();
}
elseif($bevestigen == "verwijder") {
    try{
    $startTrans->execute(); //begint transactie.
    $verwijderA->execute(); //verwijdert alle gegevens uit tabel adres van specefieke gebruiker.
    $verwijderB->execute(); //verwijdert alle gegevens uit tabel gebruiker van specefieke gebruiker.
    
}
catch(PDOException $e) //vangt foutmeldingen van PDO op en slaat die op in var '$e'
{
    $Rolback->execute(); //voert rollback uit bij foutmelding.
    die($e->getMessage()); //stopt code en geeft foutmelding weer.
}
$Commit->execute(); //slaat wijzegingen op.
}
//header("Refresh:0");