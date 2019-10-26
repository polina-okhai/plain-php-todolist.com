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
      case '/':
        (new PagesController)->main();
        break;
      case '/registration':
        (new RegistrationController)->index();
        break;
      case '/users':
        (new UsersController)->index();
        break;
      case '/projects':
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
