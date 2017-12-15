<?php

require_once 'config.php';

require_once TEMPLATES_PATH . '/header.php';


//$page = trim($_SERVER['REQUEST_URI'], '/');



include 'pages/home.php';
//include 'pages/contact.php';


require_once TEMPLATES_PATH . '/footer.php';
