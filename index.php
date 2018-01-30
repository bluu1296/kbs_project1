<?php

require_once 'config.php';

include 'resources/library/router.php';
include 'controller/homeController.php';
include 'controller/vakController.php';
include 'controller/afspraakController.php';
include 'controller/contactController.php';
include 'controller/loginController.php';
include 'controller/logoutController.php';
include 'controller/registreerController.php';


require_once TEMPLATES_PATH . '/header.php';

$route = new Router();




$route->add('/', 'Home');
$route->add('/vak', 'Vak');
$route->add('/afspraak', 'Afspraak');
$route->add('/contact', 'Contact');
$route->add('/login', 'Login');
$route->add('/logout', 'Logout');
$route->add('/registreer', 'Registreer');



echo '<div class="content">';
$route->submit();
echo '</div>';




require_once TEMPLATES_PATH . '/footer.php';
