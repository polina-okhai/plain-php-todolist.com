<?php
include 'router.php';
include 'app/controllers/users_controller.php';

$router = new Router($_SERVER['REQUEST_URI']);
$router->call();
?>
