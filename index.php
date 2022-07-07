<?php

class Tasks
{
    public $id ;
    public $description ;
    public $completed ;
}

  require '_init.php' ;
  
  $tasks =  QueryBuilder::get('tasks'); // this return array of data (obj)





foreach($tasks as $task){
    echo "<pre>";
    echo $task->description ;
    echo "</pre>";

}
