<?php

require_once 'user-service.php';
require_once 'flyingObject-service.php';
require_once 'input-service.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if ($_GET['clear'] != NULL){
            $tableName = validateUserInput($_GET['clear']); 
        } elseif ($_SESSION['clear'] != NULL) {
            $tableName = validateUserInput($_SESSION['clear']); 
        }
        else {
            echo 'Error: POST[name] value not found';
            return FALSE;
        }
        if ($tableName != NULL) {
                switch ($tableName) {
                case "users":             clearUsers(); break;
                case "user_input":        clearFlyingObjs(); break;
                case "flying_object":     clearUsers(); break;
            }

            return TRUE;
        }
    } else {
        echo 'Error: No Post value found';
        return FALSE;
    }
    echo 'User Not Created';
    return FALSE;



