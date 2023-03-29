<?php
    class Login extends Controller {

        public function index(){

            $data = [
                //metadata
                'title' => 'Login',
                'meta_title' => 'Login',
                'meta_description' => 'Log in to your account',
                'meta_url' => '/login',
                'meta_image' => '',
                //css
                'css_other' => ''
            ];

            $this -> view('users/login', $data);
        }
    }