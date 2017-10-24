<div class="row">
  <div class="col-sm-6 form-group center">
      <h2>Users:</h2>
      <!--make the table header-->
      <table>
          <tr><th>User Id</th><th>User Name</th><th>Score</th>
          <th>Flying Object ID</th><th>Bullet Count</th><th>User Input ID</th>
          <th>User State</th></tr>

          <?php foreach($db->query('SELECT * FROM users;') as $row) {?>
              <!--add a row to the table for each flying_object-->
              <tr><td><?php echo $row['user_id']; ?></td>
                  <td><?php echo  $row['user_name']; ?></td>
                  <td><?php echo  $row['score']; ?></td>
                  <td><?php echo  $row['flyingObject']; ?></td>
                  <td><?php echo  $row['bullets']; ?></td>
                  <td><?php echo  $row['user_input_id']; ?></td>
                  <td><?php echo  $row['user_state']; ?></td>
              </tr>
          <?php } ?>
      </table>
  </div>
</div>