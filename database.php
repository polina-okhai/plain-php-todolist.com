<?php
class Database
{
  const HOST = 'localhost';
  const DATABASE = 'plain_php_todolist';
  const USER = 'root';
  const PASSWORD = '351695';

  public function __construct()
  {
    $this->connection = mysqli_connect(self::HOST, self::USER, self::PASSWORD, self::DATABASE) or
    die('Connection error: ' . mysql_error());
  }

  public function query($sql)
  {
    mysqli_query($this->connection, $sql);
  }
}
?>
