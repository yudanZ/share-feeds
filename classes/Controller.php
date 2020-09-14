<?php
abstract class Controller{
    protected $request;
    protected $action;

    public function __construct($action, $request)
    {   //echo 'new shares class created';
        $this->action = $action;
        //echo $this->action;
        $this->request = $request;
        //print_r($this->request) ;
    }

    public function executeAction(){
        return $this->{$this->action}();
    }

    protected function returnView($viewmodel, $fullview){
        //echo "2.1";
        $view = 'views/'.strtolower(get_class($this)).'/'.strtolower($this->action).'.php';
        //$view = 'views/home/index.php';
        //echo "2.2";
        if($fullview){
            //echo "2.3";
            //echo $view;
            require('views/main.php');
            //echo "2.3A";
        }else {
            //echo "2.4";
            require($view);
        }
        //echo "2.5";
    }
}




?>