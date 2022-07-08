<?php
class DataBaseServer{
  private $server = "localhost:3307";
  private $database = "utom";
  private $username = "root";
  private $password = "";
  private $connection;

  public function getConnection(){
    $this->connection = null;
    try {
      $this->connection = mysqli_connect($this->server, $this->username, $this->password, $this->database);
      //echo "Connected with server BD.";
    } catch (Exception $error) {
      echo "Error: " . $error->getMessage();
    }
    return $this->connection;
  }

  public function closeConnection($connection){
    $connection->close();
  }

}





?>