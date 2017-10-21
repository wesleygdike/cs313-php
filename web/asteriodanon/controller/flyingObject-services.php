<?php
require_once __DIR__ . '/database-services.php';
function getFlyingObj() {
    $db = databaseConn();
    //return $db->query('SELECT * FROM flying_object;');
     try {
        $sql = "SELECT * FROM flying_Object";
        $stmt = $db->query($sql);      
        $info = $stmt->fetchAll();
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

