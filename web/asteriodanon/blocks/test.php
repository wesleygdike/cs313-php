<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Testing</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <?php 
            include __DIR__ . '/../controller/database-service.php';
            $db = databaseConn();
        echo "<h2>FlyingObjects:</h2>";
        //make the table header
        echo '<div>
            <table>
            <tr>
            <th>Object Id</th>
            <th>X location</th> 
            <th>Y location</th>
            <th>X velocity</th>
            <th>Y velocity</th>
            <th>Rotation</th>
            <th>Is Alive</th>
            <th>Object Type Identifier</th>
          </tr>';

        foreach ($db->query('SELECT * FROM flying_object;') as $row)
        {
            //add a row to the table for each flying_object
                echo '<tr><td>' . $row['obj_id'] . '</td>'. 
                        '<td>' . $row['xloc'] . '</td>'.
                        '<td>' . $row['yloc'] . '</td>'.
                        '<td>' . $row['xvel'] . '</td>'.
                        '<td>' . $row['yvel'] . '</td>'.
                        '<td>' . $row['rotation'] . '</td>'.
                        '<td>' . $row['is_alive'] . '</td>'.
                        '<td>' . $row['obj_type'] . '</td></tr>';
        }
        ?>
        </div>
    </div>
</div>

