<?php
    class Login extends Controller {
        public function __construct(){
            $this -> userModel = $this -> model('User');
        }

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

            //check for post request
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //process form

                //login token
                $login_token = bin2hex(random_bytes(32));

                //sanitize post data
                $_POST = filter_input_array(htmlspecialchars(INPUT_POST));

                $form_data = [
                    'login_token' => $login_token,
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'email_error' => '',
                    'password_error' => ''
                ];

                //validate email
                if(empty($form_data['email'])){
                    $form_data['email_error'] = 'Please enter email';
                }else {
                    //check for email in database
                    if($this -> userModel -> findUserByEmail($form_data['email'])){
                    }else {
                        $form_data['email_error'] = 'User not found';
                    }
                }

                //validate password
                if(empty($form_data['password'])){
                    $form_data['password_error'] = 'Please enter password';
                }

                //validate login token
                if(empty($_POST['login_token'])){
                    die('No token');
                }

                //make sure errors are empty
                if(empty($form_data['email_error']) && empty($form_data['password_error']) && !empty($_POST['login_token'])){
                    //check and set logged in user
                    $loggedInUser = $this -> userModel -> login($form_data['email'], $form_data['password']);
                    if($loggedInUser){
                        //create session
                        $this -> createUserSession
                        ($loggedInUser);
                    }else {
                        $form_data['password_error'] = 'Password incorrect';
                        $this -> view('users/login', $data, $form_data);
                    }
                }else {
                    //load view with errors
                    $this -> view('users/login', $data, $form_data);
                }
            }

            else {
                //initialize form
    
                $login_token = bin2hex(random_bytes(32));
    
                $form_data = [
                    'login_token' => $login_token,
                        'email' => '',
                        'password' => '',
                        'email_error' => '',
                        'password_error' => ''
                ];
    
                //load view
                $this -> view('users/login', $data, $form_data);
            }

            $this -> view('users/login', $data);
        }

        public function createUserSession($user){
            $_SESSION['user_id'] = $user -> id;
            $_SESSION['user_username'] = $user -> username;
            $_SESSION['user_email'] = $user -> email;
            $_SESSION['user_status'] = $user -> status;
            $_SESSION['token'] = bin2hex(random_bytes(32));
            if($_SESSION['user_status'] == 'admin'){
                redirect('admin');
            }else {
                redirect('users');
            }
        }
        
    }