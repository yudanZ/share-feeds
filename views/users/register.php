<div class="card" style="margin-top: 5rem;width: 180rem;">
    <h5 class="card-header">Register User</h5>
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control">
        </div>
        <input type="submit" name="submit" id="" class="btn btn-primary" value="Submit">
        <a class="btn btn-danger" href="<?php echo ROOT_PATH?>"shares>Cancel</a>
    </form>
  </div>
</div>
