<?php
class Users extends Controller{
    protected function register(){
        $viewModel = new UserModel();
        $this->returnView($viewModel->register(), true);
    }

    protected function login(){
        $viewModel = new UserModel();
        $this->returnView($viewModel->login(), true);
    }

    protected function logout(){
        unset($_SESSION['is_Logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();

        //Redirect
        header('Location: '.ROOT_URL);
    }
}
?>