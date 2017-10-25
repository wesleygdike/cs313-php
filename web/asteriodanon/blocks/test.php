<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Testing</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <!-- Display Flying Object table -->
            <?php require_once __DIR__ . '/../controller/database-service.php';
            $db = databaseConn(); 
            ?>
            <?php include __DIR__ . '/../blocks/tables/input-table.php'; ?>
            <?php include __DIR__ . '/../blocks/tables/user_flyingObject-table.php'; ?>
            <?php include __DIR__ . '/../blocks/tables/users-table.php'; ?>
            <?php $_SESSION['clear'] = "users"; ?>
            <input type="button" value="Reset Users" id="testerBTN" />
        </div>
    </div>
</div>

