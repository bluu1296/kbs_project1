<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author binh_
 */
class Home {

	public function __construct() {
		require_once './pages/home.php';
		$this->_other();
	}

	public function _other() {
            
            print_r($_SESSION);
	}

}
