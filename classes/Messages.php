<?php
class Messages{
    public static function setMsg($text, $type){
        if($type == 'error'){
            $_SESSION['errorMsg'] = $text;
        }else{
            $_SESSION['successMsg'] = $text;
        }
    }

    public static function display(){
        if(isset($_SESSION['errorMsg'])){
            echo '<div class= "alert alert-danger" style="margin-top: 2rem">'. $_SESSION['errorMsg']. '</div>';
            unset($_SESSION['errorMsg']);
        }
        if(isset($_SESSION['successMsg'])){
            echo '<div class= "alert alert-success" style="margin-top: 2rem">'. $_SESSION['successMsg']. '</div>';
            unset($_SESSION['successMsg']);
        }
    }
}
?>