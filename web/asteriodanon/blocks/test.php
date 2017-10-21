<div class="container-fluid bg-3 text-center">
    <h3 class="margin">Testing</h3><br>
    <div class="row">
        <div class="col-sm-4">
            <?php 
            include __DIR__ . '/../controller/database-service.php';
            $db = databaseConn();
            include __DIR__ . '/../blocks/tables/flyingObject-table.php';
            ?>
        </div>
    </div>
</div>

