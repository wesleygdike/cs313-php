<?php
require __DIR__ . '/database-service.php';
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

function getAsteroid() {
    $db = databaseConn();
    return $db->query('SELECT * FROM asteroid;');
}

