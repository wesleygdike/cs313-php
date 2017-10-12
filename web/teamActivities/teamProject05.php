<html>
    <head>
        <title>Week05 Team Activity</title>
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

echo "<h2>Scripture Resources</h2>";

foreach ($db->query('SELECT * FROM scriptures') as $row)
{
	echo '<div><b>' . $row['book'] . ' '. $row['chapter'] . ":" . $row['verse'] . '</b> - "' . '"';
}
?>

    </body>    
</html>
