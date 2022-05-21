<?php

class Teachers extends Controller
{

  public function __construct()
  {
    $this->teachertModel = $this->model('teacherModel');
  }


  public function index()
  {
    $teachers = $this->teachertModel->get_teachers();

    $data = [
       'title' => 'List teacher',
      'teachers' => $teachers
    ];

    $this->view('teachers/index', $data);
  }


  public function add()
  {
          
      if(isset($_POST['submit'])) {
        $nom = $_POST['nom'];
        $gender = $_POST['gender'];
        $subject = $_POST['subject'];
        $phone = $_POST['phone'];

        $this->teachertModel->insertTeacher($nom, $gender, $subject, $phone);
        header('location: ../Home.php');
      
      }

      $data = [
        'title' => 'add a teacher'
      ];
 
      $this->view('teachers/add', $data);
   
  }
  
  public function delete()
  {
            if(isset($_GET['id'])){
              $id = $_GET['id'];
              $teachers = $this->teachertModel->delete_Teacher($id);

              header('location: ../Home.php');
        }else{
            echo"error";
        }
    
  }

  public function update()
  {
    echo "The Delete Method";
  }


}