<?php
try {

    $pdo = new PDO('mysql:host:localhost;dbname:tasks', 'root' , '00001996');
} catch (PDOException $e) {
    die("Errour when try to  connection with db");
}