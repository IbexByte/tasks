<?php 

require '_init.php';




 Route::make()
 ->get('',[TaskController::class , 'index'])
 ->post('create/task',[TaskController::class , 'create'])
 ->resolve(Request::uri(), Request::method());

  
  

