<?php

require_once __DIR__ . '/../controller/database-service.php';

function createUser($userName){
    $db = databaseConn();
    $sql = "INSERT INTO users (user_name, score, user_state) VALUES ('" .
            $userName. "', 10, 1);";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Create User: ' . $userName . $e;
    }
}

function clearUser(){
    $db = databaseConn();
    $sql = "DELETE FROM users;";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Delete User: ' . $userName . $e;
    }
}

function validateUserInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}