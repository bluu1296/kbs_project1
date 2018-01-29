<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of router
 *
 * @author Shadowwolf97
 */
class Router {
	
	private $_uri = [];
	private $_method = [];
	
	public function add($uri, $method = null) {
		$this->_uri[] = '/' . trim($uri, '/');
		if($method != NULL) {
			$this->_method[] = $method;
		}
	}
	
	public function submit() {
		
		$uriGetParam = isset($_GET['uri']) ? '/' . $_GET['uri'] : '/';
		
		foreach($this->_uri as $key => $value) {
			
			if(preg_match("#^$value$#", $uriGetParam)) {
				
				if(is_string($this->_method[$key])) {
					$useMethod = $this->_method[$key];
					new $useMethod;	
				} else {
//					doet basically niks...
					call_user_func($this->_method[$key]);
				}
				
			} 
			
		}
		
	}
}
