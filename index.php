<?php

class Tasks
{
    public $id ;
    public $description ;
    public $completed ;
}

try {

    $pdo = new PDO('mysql:host=localhost;dbname=tasks;charset=utf8', 'root' , '00001996');
    $pdo->exec('set names utf8');
    
} catch (PDOException $e) {
    die("Errour when try to  connection with db");
}

$query = $pdo->prepare('SELECT * FROM tasks');
$query->execute();
$tasks = $query->fetchAll(PDO::FETCH_CLASS , 'Tasks');

