
<?php

require_once("db_creation.php");

try {
    $db = mysqli_connect('mysql', 'task_1', 'task_1', 'task_1');

    $query = "SELECT * FROM users;";

    $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        // Вывод результата
        var_dump($row);
    }

    mysqli_close($db);
} catch (mysqli_sql_exception $e) {
    exit($e->getMessage());
}