<?php 
    class Users extends Controller {
        public function __construct(){
            //re-direct if not authenticated
            notUserRedirect();

            //set model
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