
<div class="row">
  <div class="col-sm-6 form-group center">
      <h2>User Inputs:</h2>
      <!--make the table header-->
      <table>
          <tr><th>Input Id</th><th>Booster</th><th>Turn</th>
          <th>Fire</th></tr>

          <?php foreach($db->query('SELECT * FROM user_input;') as $row) {?>
              <!--add a row to the table for each flying_object-->
              <tr><td><?php echo $row['input_id']; ?></td>
                  <td><?php echo  $row['booster']; ?></td>
                  <td><?php echo  $row['turn']; ?></td>
                  <td><?php echo  $row['fire']; ?></td>
              </tr>
          <?php } ?>
      </table>
  </div>
</div>
