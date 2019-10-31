<?php
class CreateUsersTable
{
  public function up()
  {
    $sql =
    'CREATE TABLE users(
      id INT AUTO_INCREMENT PRIMARY KEY,
      email VARCHAR(255) UNIQUE,
      password VARCHAR(255) NOT NULL
    )';

    (new Database)->query($sql);
    }

    public function down()
    {
      $sql = 'DROP TABLE users';
      
      (new Database)->query($sql);
    }
  }
  ?>
