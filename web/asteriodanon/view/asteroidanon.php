<?php 
//Test User Name Input
require __DIR__ . '/../controller/user-service.php';
$userName = validateUserInput($_POST['name']);
createUser($userName);
?>

<!DOCTYPE html>
<html lang="en-us">
<?php include __DIR__ . '/../blocks/head.php';?>
    <body>
        <!-- Header Section -->
        <?php include __DIR__ . '/../blocks/header.php'; ?>
        <!-- Game info / canvas -->
        <?php include __DIR__ . '/../blocks/test.php'; ?>
        <?php include __DIR__ . '/../blocks/footer.php'; ?>        
    </body>
</html>