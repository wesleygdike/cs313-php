<?php

require_once __DIR__ . '/../controller/database-service.php';

function createUser($userName){
    $db = databaseConn();
    $sql = "INSERT INTO users (user_name, score, state) VALUES ($userName, \"10\", \"1\")";
    if ($db->query($sql) === TRUE) {
        echo 'User Created: ' . $userName;
    } else {
        echo 'NOT Able To Create User: ' . $userName;
    }
}

function validateUserInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}