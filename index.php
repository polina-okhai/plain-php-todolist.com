<?php
include 'router.php';
include 'database.php';
include 'db/migrations/create_users_table.php';
include 'app/controllers/pages_controller.php';
include 'app/controllers/registration_controller.php';
include 'app/controllers/users_controller.php';
include 'app/controllers/projects_controller.php';
include 'app/controllers/tasks_controller.php';

$router = new Router($_SERVER['REQUEST_URI']);
$router->call();
?>
