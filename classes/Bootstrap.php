<?php
class Bootstrap{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {
        //print_r($request);
        $this->request = $request;
        if($this->request['controller'] == ""){
            $this->controller = 'home';
        }else {
            $this->controller = $this->request['controller'];
        }

        if($this->request['action'] == ""){
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }

        //echo 'this.controller= '.$this->controller. '<br/>';
        //echo "<br/>----------------------<br/>";
        //echo 'this.action= '.$this->action. '<br/>';
        //echo "<br/>----------------------<br/>";
    }

    public function createController(){
        // Check Class
        if(class_exists(($this->controller))){
            //echo 'class exists '.$this->controller.'<br/>';
            //echo "<br/>----------------------<br/>";
            $parents = class_parents(($this->controller));
            
            //echo 'parents: ';
            //print_r($parents);

            //echo "<br/>----------------------<br/>";

            // Check Extend
            if(in_array("Controller", $parents)){
                if(method_exists($this->controller, $this->action)){
                    return new $this->controller($this->action, $this->request);
                }else {
                    // Method Does Not Exist
                    echo '<h1>Method does not exist</h1>';
                    return;
                }
            }else {
                // Base Controller Does Not Exist
                echo '<h1>Base Controller Does Not Exist</h1>';
                return;
            }
        }else {
            // Controller Class Does Not Exist
            echo '<h1>Controller Class Does Not Exist</h1>';
            return;
        }
    }
}

?>