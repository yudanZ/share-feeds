<div class="card" style="margin-top: 5rem;width: 180rem;">
    <h5 class="card-header">Share Something!</h5>
  <div class="card-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
        <div class="form-group">
            <label for="">Share Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Body</label>
            <textarea type="text" name="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="">Link</label>
            <input type="text" name="link" class="form-control">
        </div>
        <input type="submit" name="submit" id="" class="btn btn-primary" value="Submit">
        <a class="btn btn-danger" href="<?php echo ROOT_PATH?>"shares>Cancel</a>
    </form>
  </div>
</div>
