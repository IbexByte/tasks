<?php 

class TaskController
{
  public function index(){
    $tasks = QueryBuilder::get('tasks');

    require './resources/view/index.php';
  }   
  public function create(){
    QueryBuilder::insert('tasks',[
        'description' => Request::get('description'),
        ]);
        
    header('Location: '.'/tasks');
  }   
}