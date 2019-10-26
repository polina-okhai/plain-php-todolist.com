<?php
class Router
{
  public function __construct($url)
  {
    $this->url = $url;
  }

  public function call()
  {
    switch ($this->url) {
      case '/users':
      (new UsersController)->index();
    break;

      case '/prodjects':
      (new ProjectsController)->index();
    break;
    
      case '/tasks':
      (new TasksController)->index();
    break;

      default:
      // code...
      break;
    }
  }
}
?>
