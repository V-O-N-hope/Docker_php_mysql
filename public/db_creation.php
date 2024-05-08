<?php

use Exceptions\Database_Errors\ConnectionError;

/**
 * @throws ConnectionError
 */
try {
    $db = new PDO('mysql:host=mysql;dbname=task_1', 'task_1', 'task_1');
}catch (PDOException $e){
    throw new ConnectionError("Could not connect to database");
}

//try {
//    $db = mysqli_connect('mysql', 'task_1', 'task_1', 'task_1');
//
//    $query = "
//create table if not exists `users`(
//    id   INT not null auto_increment,
//    name text,
//    PRIMARY KEY (id)
//);";
//
//    $result = mysqli_query($db, $query);
//
//    $query = "INSERT INTO `users` (name) VALUES ('Mikita'), ('Dasha'), ('Vanya');";
//
//    $result = mysqli_query($db, $query);
//
//    mysqli_close($db);
//} catch (mysqli_sql_exception $e) {
//    exit($e->getMessage());
//}