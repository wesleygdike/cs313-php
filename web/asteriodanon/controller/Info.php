<?php
/*
 * contains functions for working with and displaying database inforamtion
 */

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