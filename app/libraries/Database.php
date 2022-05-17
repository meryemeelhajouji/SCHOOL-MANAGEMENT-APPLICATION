<?php
class Database
{
  private $db_host = 'localhost';
  private $db_name = 'school_app';
  private $db_user = 'root';
  private $db_password = '';

  private $connection;
  private $stmt;

  public function __construct()
  {
    $dsn = "mysql:host=$this->db_host;dbname=$this->db_name";
    $this->connection = new PDO($dsn, $this->db_user, $this->db_password);
  }

  // Todo::@Agra

  // 1 - Prepare Query Method

  public function prepare($sql){
    $this->stmt=$this->connection->prepare($sql);
  }

  public function execute (){
    $this->stmt=$this->stmt ->execute();
  }

  public function getAll(){
    $this->stmt=$this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

  public function getOne(){
    $this->stmt= $this->stmt-> fetch(PDO::FETCH_OBJ);
  }
  
  // 2 - Execute Query Method

  // 3 - Get All Results Method

  // 4 - Get Single Result Method
}
