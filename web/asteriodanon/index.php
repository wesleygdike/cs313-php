<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Asteriodanon</title>
    <script src="astroScript.js"></script>
    </head>
    <body onload="startGame()">
        <div id="canvasholder">
            <!-- Canvas will go here -->
        </div>
        <?php
        $dbUrl = getenv('DATABASE_URL');

        $dbopts = parse_url($dbUrl);

        $dbHost = $dbopts["host"];
        $dbPort = $dbopts["port"];
        $dbUser = $dbopts["user"];
        $dbPassword = $dbopts["pass"];
        $dbName = ltrim($dbopts["path"], '/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        echo "<h2>FlyingObjects:</h2>";

        foreach ($db->query('SELECT * FROM flying_object') as $row)
        {
                echo '<div><b>' . $row['book'] . ' '. $row['chapter'] . ":" . $row['verse'] . '</b> - "' . $row['content'] . '"';
        }
        ?>
        <input type="submit" value="Move" name="moveRightBtn" />
    </body>
</html>
