<?php
try{
    $db = "mysql:host=localhost;dbname=bijlesguru;port=3306";
$user = "root";
$pass = "";
$pdo = new PDO($db, $user, $pass); 
} catch (Exception $e) {
    print("Fout:" . $e->getMessage());
}
?>
