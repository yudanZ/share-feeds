<?php

//Start Session
session_start();
// Include Config

require('config.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');
require('classes/Messages.php');

require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

require('models/home.php');
require('models/share.php');
require('models/user.php');

//print_r($_GET);

//echo "<br/>----------------------<br/>";

$bootstrap = new Bootstrap($_GET);



$controller = $bootstrap->createController();
//var_dump($controller);

if($controller){
    $controller->executeAction();
}

?>