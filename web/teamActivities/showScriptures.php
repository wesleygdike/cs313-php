<html>
    <head>
        <title>Week06 Team Activity</title>
    </head>

    </head>
    <body>
<?php
//<!-- Validate input into local var -->
// define variables and set to empty values
$book = $chapter = $verse = $content = "";
$topics;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $book = test_input($_POST["book"]);
  $chapter = test_input($_POST["chapter"]);
  $verse = test_input($_POST["verse"]);
  $content = test_input($_POST["content"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

//<!-- Add the scripture into the databse-->
//Establish database connection
$dbUrl = getenv('DATABASE_URL');

$dbopts = parse_url($dbUrl);

$dbHost = $dbopts["host"];
$dbPort = $dbopts["port"];
$dbUser = $dbopts["user"];
$dbPassword = $dbopts["pass"];
$dbName = ltrim($dbopts["path"], '/');


try {
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO scriptures(book, chapter, verse, content)
    VALUES($book, $chapter, $verse, $content)";
    // use exec() because no results are returned
    $db->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$db = null;
//<!-- For each scripture add it to a table-->

echo "<h2>Current Scriptures:</h2>";
        //make the table header
        echo '<div>
            <table>
            <tr>
            <th>Scripture ID</th>
            <th>Book Chapter:Verse</th> 
            <th>Content</th>
          </tr>';

        foreach ($db->query('SELECT * FROM scriptures;') as $row)
        {
            //add a row to the table for each flying_object
                echo '<tr><td>' . $row['id'] . '</td>'. 
                        '<td>' 
                        . $row['book'] . ' ' . $row['chapter'] 
                        . ':' . $row['verse'] . 
                        '</td>'.
                        '<td>' . $row['content'] . '</td></tr>';
        }
?>
    </body>
</html>