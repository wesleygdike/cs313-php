<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Testing</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <?php 
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
        echo 'Failed Database Connection';
        //Display error with error page
    }
    echo $db;
            ?>
        </div>
    </div>
</div>

