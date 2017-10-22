<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Testing</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <!-- Display Flying Object table -->
            <?php require __DIR__ . '/../controller/database-service.php';
            $db = databaseConn(); 
            ?>
            <?php include __DIR__ . '/../controller/user-service.php'; ?>

        </div>
    </div>
</div>

