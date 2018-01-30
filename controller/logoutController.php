<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of loginController
 *
 * @author binh_
 */


class Logout {

    public function __construct() {
        require_once './pages/logout.php';

        $this->_other();
    }

    public function _other() {
        session_destroy();
        
        header("Location: index.php");
    }

}
