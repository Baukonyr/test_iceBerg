<?php

// Reg auto load
require __DIR__.'/vendor/autoload.php';
session_start();


// start 
$router = new router();
$router->start();
?>