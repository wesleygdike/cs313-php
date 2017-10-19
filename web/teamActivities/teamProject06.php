<html>
    <head>
        <title>Week06 Team Activity</title>
    </head>

    </head>
    <body>
        
        <?php
            $dbUrl = getenv('DATABASE_URL');

            $dbopts = parse_url($dbUrl);

            $dbHost = $dbopts["host"];
            $dbPort = $dbopts["port"];
            $dbUser = $dbopts["user"];
            $dbPassword = $dbopts["pass"];
            $dbName = ltrim($dbopts["path"], '/');

            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
        ?>
        <h1>ENTER SCRIPTURE DATA</h1>
        <div>
            <form action="showScriptures.php" method="POST">
                Book:<input type="text" name="book"><br/>
                Chapter:<input type="number" name="chapter"><br/>
                Verse:<input type="number" name="verse"><br/>
                Content:<input type="text" name="content"><br/>
                
                Select Topics that apply:<br/>
                <?php
                    foreach ($db->query('SELECT * FROM topic;') as $checkbox)
                    {
                        echo '<input type="checkbox" name="topic" value="' . $checkbox . '"> $checkbox<br/>';
                    }
                ?>
                
                <input type="submit">
            </form>
        </div>
    </body>    
</html>