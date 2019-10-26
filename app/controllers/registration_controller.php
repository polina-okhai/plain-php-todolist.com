<?php
class RegistrationController
{
  public function index()
  {
    include_once('app/views/registration/index.php');
  }

  public function registrate($post)
  {
    var_dump($post);
  }
}
?>
