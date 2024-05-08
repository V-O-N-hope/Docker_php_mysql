
<?php

include_once ("../app/Exceptions/Database_Errors/ConnectionError.php");

/**
 * @throws ConnectionError
 */
try {
    $db = new PDO('mysql:host=mysql;dbname=task_1', 'task_1', 'task_1');

    echo "We are in";
}catch (PDOException $e){
    throw new ConnectionError("Could not connect to database. Reason: " . $e->getMessage() , $e->getCode());
}

$db = null;