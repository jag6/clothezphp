<?php  
    class Logout extends Controller {
        public function index(){
            unset($_SESSION['user_id']);
            unset($_SESSION['user_username']);
            unset($_SESSION['user_email']);
            unset($_SESSION['user_status']);
            unset($_SESSION['token']);
            session_destroy();
            redirect('login');
        }
    }