<?php

require_once __DIR__ . '/../controller/database-service.php';

function createUser($userName){
    echo 'User Created!';
}

function validateUserInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}