<?php
include __DIR__ . '/../../controller.flyingObject-service.php';
$objs = getFlyingObj();
?>
<div class="container-fluid bg-3 text-center">
    <h2>Flying Objects:</h2>
    <div>
        <table><tr><th>Object Id</th><th>X location</th> 
        <th>Y location</th><th>X velocity</th><th>Y velocity</th>
        <th>Rotation</th><th>Is Alive</th><th>Object Type Identifier</th>
    </tr>

    <?php foreach ($objs as $row){ ?>
        <tr><td><?php $row['obj_id'] ?> </td>
        <tr><td><?php $row['xloc'] ?> </td>
        <tr><td><?php $row['yloc'] ?> </td>
        <tr><td><?php $row['xvel'] ?> </td>
        <tr><td><?php $row['yvel'] ?> </td>
        <tr><td><?php $row['rotation'] ?> </td>
        <tr><td><?php $row['is_alive'] ?> </td>
        <tr><td><?php $row['obj_type'] ?> </td>
    <?php } ?>
        </table>
    </div>
</div>