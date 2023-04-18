<?php

require 'app/database/DBConnection.php';
require 'app/database/QueryBuilder.php';
require 'app/controller/TaskController.php';
require 'route/web.php';
require 'request/request.php';
require 'config.php';


  QueryBuilder::make(DBConnection::make($config)); 