<?php

class Home  extends Controller
{
  public function index()
  {
    
    $data = [
      'title' => 'home page',
     
    ];
    $this->view('index', $data);
  }

}