<?php
include 'router.php';
include 'app/controllers/users_controller.php';
include 'app/controllers/projects_controller.php';
include 'app/controllers/tasks_controller.php';

$router = new Router($_SERVER['REQUEST_URI']);
$router->call();
?>
