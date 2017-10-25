<?php
require_once __DIR__ . '/database-service.php';

/*
 * INSERT new FlyingObject into database
 */
function createFlyingObj($x, $y, $vx, $vy, $isAlive, $rotation, $obj_type){
    $db = databaseConn();
    $sql = "INSERT INTO flying_object (xloc, yloc, xvel, yvel, rotation, is_alive, obj_type) "
            . "VALUES ($x, $y, $vx, $vy, $isAlive, $rotation, $obj_type);";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Create Flying Object: ' . $e;
    }
    return $db->lastInsertId();
}

/*
 * CLEAR entire flying_object table of database
 */
function clearFlyingObjs(){
    $db = databaseConn();
    $sql = "DELETE FROM flying_object;";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Delete all Flying Objects: ' . $e;
    }
}

/*
 * CLEAR FlyingObject from table of database WHICH has $flyingObj_id
 */
function clearFlyingObj($flyingObj_id){
    $db = databaseConn();
    $sql = "DELETE FROM flying_object WHERE obj_id = $flyingObj_id;";
    try{
    $db->exec($sql);
    }
 catch (PDOException $e){
        echo 'NOT Able To Delete Flying Object: ' . $flyingObj_id . $e;
    }
}

function getFlyingObj() {
    $db = databaseConn();
    //return $db->query('SELECT * FROM flying_object;');
     try {
        $sql = "SELECT * FROM flying_Object;";
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
 * Update FlyingObject for $obj_id
 */
function getUserInputs($obj_id, $x, $y, $vx, $vy, $isAlive, $rotation, $obj_type) {
    $db = databaseConn();
     try {
        $sql = "UPDATE flying_Object SET xloc = $x, yloc = $y, xvel = $vx, "
                . "yvel = $vy, rotation = $rotation, is_alive = $isAlive, obj_type = $obj_type "
                . "WHERE input_id=$obj_id;";
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

function getAsteroid() {
    $db = databaseConn();
    return $db->query('SELECT * FROM asteroid;');
}

