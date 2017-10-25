<?php
require_once __DIR__ . '/database-service.php';

/*
 * INSERT new Input into database
 */
function createInput($booster, $turn, $fire){
    $db = databaseConn();
    $sql = "INSERT INTO user_input (booster, turn, fire) "
            . "VALUES ($booster, $turn, $fire);";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Create Input: ' . $e;
    }
    return $db->lastInsertId();
}

/*
 * CLEAR entire user_input table of database
 */
function clearInputs(){
    $db = databaseConn();
    $sql = "DELETE FROM user_input;";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Delete all Inputs: ' . $e;
    }
}

/*
 * CLEAR user_input from table of database WHICH has $input_id
 */
function clearInput($input_id){
    $db = databaseConn();
    $sql = "DELETE FROM user_input WHERE input_id = $input_id;";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Delete Input: ' . $input_id . $e;
    }
}

/*
 * Return ALL User Inputs
 */
function getUserInputs() {
    $db = databaseConn();
     try {
        $sql = "SELECT * FROM user_input;";
        $stmt = $db->query($sql);      
        $info = $stmt->fetchAll();
        echo $info;
    } catch (PDOException $ex) {
      //Display Error Msg.
    }
    if (is_array($info)) {
        return $info;
    } else {
        //Display Error Msg.
        exit();
    }
}

/*
 * Return User Input for $input_id
 */
function getUserInputs($input_id) {
    $db = databaseConn();
     try {
        $sql = "SELECT * FROM user_input WHERE input_id=$input_id;";
        $stmt = $db->query($sql);      
        $info = $stmt->fetchAll();
        echo $info;
    } catch (PDOException $ex) {
      //Display Error Msg.
    }
    if (is_array($info)) {
        return $info;
    } else {
        //Display Error Msg.
        exit();
    }
}

/*
 * Update User Input for $input_id
 */
function getUserInputs($input_id, $booster, $turn, $fire) {
    $db = databaseConn();
     try {
        $sql = "UPDATE user_input SET booster = $booster, turn = $turn, fire = $fire"
                . " WHERE input_id=$input_id;";
        $stmt = $db->query($sql);      
        $info = $stmt->fetchAll();
        echo $info;
    } catch (PDOException $ex) {
      //Display Error Msg.
    }
    if (is_array($info)) {
        return $info;
    } else {
        //Display Error Msg.
        exit();
    }
}