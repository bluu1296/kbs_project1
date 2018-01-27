<?php

include './controller/DB-connectie.php';
include '';

class securityCheck {

    function rolCheck($minRol) {

        $rol = $pdo->prepare("SELECT rol FROM gebruiker WHERE email = '" . $email . "'");
               $rol->execute();

        if ($minRol <= $rol) {
            header("Location: index.php");
            exit();
        }
    }

}
