<div style="margin-top: 2rem">
    <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <a href="<?php echo ROOT_PATH;?>shares/add" class="btn btn-success btn-share">Share Something</a>
    <?php endif;?>
    <?php foreach($viewmodel as $item) :?>
        <div class="card card-body bg-light mb-3">
            <h3><?php echo $item['title'];?></h3>
            <small><?php echo $item['create_date'];?></small>
            <hr>
            <p><?php echo $item['body'];?></p>
            <br>
            <a href="<?php echo $item['link'];?>" target="_blank" class="btn btn-default">Go to website</a>
        </div>
    <?php endforeach;?>
</div>