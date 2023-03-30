<?php 
    class Users extends Controller {
        public function __construct(){
            if(!isLoggedIn()){
                redirect('');
            }
            $this -> userModel = $this -> model('User');
        }

        public function index(){

            $data = [
                //metadata
                'title' => 'Your Profile'
            ];

            $this -> view('users/index', $data);
        }
    }