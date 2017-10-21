<?php include __DIR__ . '../info.php;' ?>
<div class="container-fluid bg-3 text-center">
    <form action="view/asteroidanon.php" method="post">
    <h3 class="margin">Login</h3><br>
      <div class="row">
        <div class="col-sm-6 form-group center">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default" type="submit">Send</button>
        </div>
      </div>
    </form>
</div>