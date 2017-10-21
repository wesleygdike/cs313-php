<?php 
require_once __DIR__ . '/../controller/info.php';
$flyingObj = getFlyingObj();
?>

<!DOCTYPE html>
<html lang="en-us">
<?php include __DIR__ . '/../blocks/head.php';?>
    <body>
        <!-- Header Section -->
        <?php include __DIR__ . '/../blocks/header.php'; ?>
        <!-- Game info / canvas -->
        <?php echo $flyingObj; ?>
        <?php include __DIR__ . '/../blocks/footer.php'; ?>        
    </body>
</html>