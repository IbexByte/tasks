<?php

require 'database/DBConnection.php';
require 'database/QueryBuilder.php';


  QueryBuilder::make(DBConnection::make()); 