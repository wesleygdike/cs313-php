<?php
/*
 * contains functions for working with and displaying database inforamtion
 */
/* Returns a connection PDO object */
function databaseConn() {
    $dbUrl = getenv('DATABASE_URL');

    $dbopts = parse_url($dbUrl);

    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"], '/');

    try{
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    }
    catch (PDOException $ex) {
        //Display error with error page
    }
    return $db;
}

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

function getGame() {
    $db = databaseConn();
    return $db->query('SELECT * FROM game;');
}

function getUserInfo() {
    $db = databaseConn();
    return $db->query('SELECT * FROM users;');
}

function createUser($userName) {
    $db = databaseConn();
    
    try {
    $sql = "INSERT INTO \"users\" (\"user_name\", \"score\") VALUES (:user_name, :score)";
    $stmt = $db->prepare($sql);
    $stmt->execute(array(':userName' => $userName, ':score' => 0));
    $count = (int)$stmt->rowCount();
    $stmt->closeCursor();
  } catch (PDOException $ex) {
      //Display error message
  }
  if ($count > 0) {
    return true;
  } else {
    return false;
  }
}

function getUserInput() {
    $db = databaseConn();
    return $db->query('SELECT * FROM \"user\";');
}

function displayFlyingObj() {
    echo "<h2>FlyingObjects:</h2>";
    echo '<div><table><tr><th>Object Id</th><th>X location</th> 
        <th>Y location</th><th>X velocity</th><th>Y velocity</th>
        <th>Rotation</th><th>Is Alive</th><th>Object Type Identifier</th>
    </tr>';
    foreach ((getFlyingObj()) as $row)
    {
        echo '<tr><td>' . $row['obj_id'] . '</td>'. 
                '<td>' . $row['xloc'] . '</td>'.
                '<td>' . $row['yloc'] . '</td>'.
                '<td>' . $row['xvel'] . '</td>'.
                '<td>' . $row['yvel'] . '</td>'.
                '<td>' . $row['rotation'] . '</td>'.
                '<td>' . $row['is_alive'] . '</td>'.
                '<td>' . $row['obj_type'] . '</td></tr>';
    }
}

function displayGame() {
    echo "<h2>Game:</h2>";
    //make the table header
    echo '<div>
        <table>
        <tr>
        <th>Game ID</th>
        <th>Ship Count</th> 
        <th>Asteroid Count</th>
        <th>Status</th>
        <th>User count</th>
      </tr>';

    foreach ((getGame()) as $row)
    {
        //add a row to the table for each flying_object
            echo '<tr><td>' . $row['game_id'] . '</td>'. 
                    '<td>' . $row['ship_count'] . '</td>'.
                    '<td>' . $row['asteroid_count'] . '</td>'.
                    '<td>' . $row['status'] . '</td>'.
                    '<td>' . $row['user_count'] . '</td></tr>';
    }
}

function displayUserInput() {
    echo "<h2>User Input:</h2>";
    //make the table header
    echo '<div>
        <table>
        <tr>
        <th>Input ID</th>
        <th>Booster</th> 
        <th>Turn</th>
        <th>Fire</th>
      </tr>';

    foreach ((getUserInput()) as $row)
    {
        //add a row to the table for each flying_object
            echo '<tr><td>' . $row['input_id'] . '</td>'. 
                    '<td>' . $row['booster'] . '</td>'.
                    '<td>' . $row['turn'] . '</td>'.
                    '<td>' . $row['fire'] . '</td></tr>';
    }
}