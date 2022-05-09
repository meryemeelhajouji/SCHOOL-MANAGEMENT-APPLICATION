<?php
// The Database class = Contains methods to connect and perform CRUD operations on The database
class Database
{
  private $db_host = 'localhost';
  private $db_name = 'school_app';
  private $db_user = 'root';
  private $db_password = '';

  private $db_handler;
  private $stmt;
  private $error;

  public function __construct()
  {
    $dsn = "mysql:host=$this->db_host;dbname=$this->db_name";

    $options = [
      PDO::ATTR_PERSISTENT => true,
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->db_handler = new PDO($dsn, $this->db_user, $this->db_password, $options);
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;
    }
  }

  public function query($sql)
  {
    $this->stmt = $this->db_handler->prepare($sql);
  }

  public function bind($param, $value, $type = null)
  {
    if (is_null($type)) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default:
          $type = PDO::PARAM_STR;
      }
    }

    $this->stmt->bindValue($param, $value, $type);
  }

  public function execute()
  {
    return $this->stmt->execute();
  }

  public function result_set()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }

  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
  }

  public function row_count()
  {
    return $this->stmt->rowCount();
  }
}
