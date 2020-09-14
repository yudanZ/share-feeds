<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://yudan.ch/shareboard/assets/css/style.css">
    
    <title>shareboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">shareboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>">Home </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>shares">Shares </a>
                </li>
      
            </ul>

            <ul class="navbar-nav  navbar-right">
                <?php if(isset($_SESSION['is_logged_in'])) : ?>
                    <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>">Welcom <?php echo $_SESSION['user_data']['name'];?> </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>users/logout">Logout </a>
                </li>
                <?php else :?>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>users/login">Login </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="<?php echo ROOT_URL;?>users/register">Register </a>
                </li>
                <?php endif;?>
            </ul>
    
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
          
            <?php Messages::display();?>
            <?php require($view);?>
        </div>
    </div>
</body>
</html>