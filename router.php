<?php
class Router
{
  public function __construct($url)
  {
    $this->url = $url;
  }

  public function call()
  {
    echo $this->url;
  }
}
?>
