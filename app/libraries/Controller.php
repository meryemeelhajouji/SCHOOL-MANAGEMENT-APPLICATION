<?php

// The Controller Class = Helps To load models and views from other controllers
// Every Controller will extends This class

class Controller
{
  // 1 - Create model method That return The current model
  public function model($model)
  {
    require_once "../app/models/$model.php";
    return new $model();
  }

  // 2 - Create View method That return The current View
  public function view($view, $data = [])
  {
    if (file_exists("../app/views/$view.php")) {
      require_once "../app/views/$view.php";
    } else {
      die('View does not exist');
    }
  }
}
