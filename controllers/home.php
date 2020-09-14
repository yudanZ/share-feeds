<?php
class Home extends Controller{
    protected function Index(){
        //echo "1 ";
        $viewmodel = new HomeModel();
        //echo "2 ";
        $this->ReturnView($viewmodel->Index(),true);
        //echo "3 ";
    }
}
?>