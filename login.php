<html>
    <body>
        <h2>Inloggen</h2>
        <form method="POST"> 
            <h4>Email</h4><br>
            <input type="text" name="email" placeholder="iemand@example.com" required><br>
            <h4>Wachtwoord</h4><br>
            <input type="password" name="password" placeholder="geheim" required><br>
            <button type="submit">Inloggen</button>
        </form>
    </body>
</html>
<?php
//verbinden met de database
include 'DB-connectie.php';
//wachtwoord controleren\
$email = $filter_input(POST, email);
$wachtwoord = $filter_input(POST, password);
$stmt_wachtwoord = $pdo->prepare("select 'password' from 'gebruiker' where 'email' = emaillogin)
            VALUES  (:emaillogin)"); //gegevens uit DB halen
            $stmt->bindParam(':emaillogin', $email);
$stmt->execute();
if(password_verify($wachtwoord, $stmt_wachtwoord) == TRUE){
    session_start($email);
    echo "<script> window.location.assign('index.php'); </script>";
}
else{
    print("De combinatie van E-mail en wachtwoord is niet gevonden");
}

?>