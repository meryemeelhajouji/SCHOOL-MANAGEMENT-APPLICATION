<?php



class teacherModel
{
  private $db;

  public function __construct()
  {
    $this->db = new Database;
  }

  public function get_teachers()
  {
    $this->db->prepare('SELECT * FROM teachers');
    $this->db->execute();
    return $this->db->getAll();
  }

  public function insertTeacher($teacher)
  {
   
    $this->stat =  $this->db->prepare("INSERT INTO teachers (teacher_name) VALUES (:teacher)");
      $this->db->stat->bindParam(':teacher', $teacher);
      $this->db->execute();
  
  }

  public function update_parent()
  {
  }

  public function delete_parent()
  {
  }
}

























// require_once ('../require.php');
//   class Teacher extends Database {
  
//     private $db;
//     private $results;

//     public function __construct(){
//           $this->db = new Database;
//     }
//     public function getAllTeacher(){
//           $this->results= $this->db->preparee("SELECT *FROM teachers");
//           $this->results=$this->db->execute();
//           $this->results=$this->db->getAll();
//           // var_dump($this->results);
//     }
 
//   }
//   $teacher= new Teacher();
//   $teacher->getAllTeacher();

?>  