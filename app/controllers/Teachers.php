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
      'teachers' => $teachers
    ];

    $this->view('teachers/index', $data);
  }


  public function add()
  {
      $model = $this->model('TeacherModel');
      
      if(isset($_POST['submit'])) {
        $teacher = $_POST['teacher'];
        $this->teachertModel->insertTeacher($teacher);
        header('location: ../index.php');
      }

      $data = [
        'title' => 'add a teacher'
      ];

      $this->view('add', $data);
   
  }

  public function update()
  {
    echo "The Delete Method";
  }

  public function delete()
  {
    echo "The Delete Method";
  }
}