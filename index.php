<?php
include 'router.php';

$router = new Router($_SERVER['REQUEST_URI']);
$router->call();
?>
