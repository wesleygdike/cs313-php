 
      <div class="row">
        <div class="col-sm-6 form-group center">

    <h2>Flying Objects:</h2>"
    <!--make the table header-->
    <table>
        <tr><th>Object Id</th><th>X location</th><th>Y location</th>
        <th>X velocity</th><th>Y velocity</th><th>Rotation</th>
        <th>Is Alive</th><th>Object Type Identifier</th></tr>

        <?php foreach($db->query('SELECT * FROM flying_object;') as $row) {?>
            <!--add a row to the table for each flying_object-->
            <tr><td><?php echo $row['obj_id']; ?></td>
                <td><?php echo  $row['xloc']; ?></td>
                <td><?php echo  $row['yloc']; ?></td>
                <td><?php echo  $row['xvel']; ?></td>
                <td><?php echo  $row['yvel']; ?></td>
                <td><?php echo  $row['rotation']; ?></td>
                <td><?php echo  $row['is_alive']; ?></td>
                <td><?php echo  $row['obj_type']; ?></td></tr>
        <?php } ?>
    </table>
        </div>
      </div>
