<?php

require_once __DIR__ . '/../controller/database-service.php';

/*
 * Create a new User from POST['name'] Input
 */
function addUser(){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['name'] != NULL){
            $userName = validateUserInput($_POST['name']); 
            $_SESSION['user_id'] = createUser($userName);
            return TRUE;
        }
        else {
            echo 'Error: POST[name] value not found';
        }
    } else {
        echo 'Error: No Post value found';
    }
    echo 'User Not Created';
}

/*
 * INSERT new User into database
 */
function createUser($userName){
    $db = databaseConn();
        $sql = "INSERT INTO user_input (booster, turn, fire) "
                . "VALUES (FALSE, 0, FALSE);";
    $db->exec($sql);
    $userInput_id = $db->lastInsertId();
        $sql = "INSERT INTO flying_object (xloc, yloc, xvel, yvel, rotation, is_alive, obj_type) "
                . "VALUES (0, 0, 0, 0, 90, TRUE, 0);";
    $db->exec($sql);
    $flyingObj_id = $db->lastInsertId();
    $sql = "INSERT INTO users (user_name, score, user_state, flyingobject, user_input_id) "
            . "VALUES ('" .$userName. "', 0, 1, " . $flyingObj_id. "," . $userInput_id . ");";
    $db->exec($sql);
    $_SESSION['user_id'] = $db->lastInsertId();
}

/*
 * CLEAR entire user table of database
 */
function clearUsers(){
    $db = databaseConn();
    $sql = "DELETE FROM users;";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Delete all Users: ' . $e;
    }
    return $db->lastInsertId();
}

/*
 * CLEAR user from table of database WHICH has $user_id
 */
function clearUser($user_id){
    $db = databaseConn();
    $sql = "DELETE FROM users WHERE user_id = $user_id;";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Delete User: ' . $userName . $e;
    }
    return $db->lastInsertId();
}


/*
 * Formats user input
 */
function validateUserInput($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}