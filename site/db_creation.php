<?php

try {
    $db = mysqli_connect('mysql', 'task_1', 'task_1', 'task_1');

    $query = "
create table if not exists `users`(
    id   INT not null auto_increment,
    name text,
    PRIMARY KEY (id)
);";

    $result = mysqli_query($db, $query); // Выполнение запроса

    var_dump($result);

    $query = "INSERT INTO `users` (name) VALUES ('Mikita'), ('Dasha'), ('Vanya');";

    $result = mysqli_query($db, $query); // Execute the query

    var_dump($result);

    mysqli_close($db);
} catch (mysqli_sql_exception $e) {
    exit($e->getMessage());
}