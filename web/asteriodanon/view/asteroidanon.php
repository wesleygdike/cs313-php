<!DOCTYPE html>
<html>
<?php include __DIR__ . '/../blocks/head.php';?>
    <body>
        <!-- Header Section -->
        <?php include __DIR__ . '/../asteriodanon/blocks/header.php' ?>
        <!-- Game info / canvas -->
        <?php 
        include __DIR__ . '/../controller/info.php'; 
        displayFlyingObj();
        include __DIR__ . '/../blocks/footer.php';
        ?>
        
    </body>
</html>