<?php

function getFlyingObj() {
    $db = databaseConn();
    //return $db->query('SELECT * FROM flying_object;');
     try {
        $sql = "SELECT * FROM \"flying_object\"";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $info = $stmt->fetchAll();
        $stmt->closeCursor();
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

