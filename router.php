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

      default:
        // code...
        break;
    }
  }
}
?>
