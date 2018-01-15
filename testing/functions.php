<?php

include './controller/DB-connectie.php';


class securityCheck {

    public function rolCheck($minRol) {

        $rol = $pdo->prepare("SELECT rol FROM gebruiker WHERE email = '" . $email . "'");
               $rol->execute();
               

        if ($minRol <= $rol) {
            header("Location: index.php");
            exit();
        }
    }

}
