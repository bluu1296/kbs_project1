<?php
 
 
$config = array(
    "db" => array(
        "db1" => array(
            "dbname" => "winkel",
            "username" => "root",
            "password" => "",
            "host" => "localhost"
        ),
    ),
    "paths" => array(
        "resources" => "/resources",
		"style" => "public_html/css/style.css",
                "image" => "public_html/img",
		"bootstrap" => "public_html/js/bootstrap.js",
        "images" => $_SERVER["DOCUMENT_ROOT"] . "/img/",
        
    )
);
define('TEMPLATES_PATH', realpath(dirname(__FILE__) . '/resources/templates'));
defined("LIBRARY_PATH")
    or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));
     
//defined("TEMPLATES_PATH")
//    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/resources/templates'));

ini_set("error_reporting", "true");
error_reporting(E_ALL|E_STRCT);
