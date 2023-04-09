<?php
    class Login extends Controller {
        public function __construct(){
            $this -> userModel = $this -> model('User');

            if(isLoggedInAndAdmin()){
                redirect('admin');
            }elseif(isLoggedIn()){
                redirect('users');
            }

            loginToken();
        }

        public function index(){

            $data = [
                //metadata
                'title' => 'Login',
                'meta_title' => 'Login',
                'meta_description' => 'Log in to your account',
                'meta_url' => '/login',
                'meta_image' => 'woman-sunglasses.webp',
                //css
                'css_other' => ''
            ];

            //check for post request
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //process form

                //sanitize post data
                $_POST = filter_input_array(htmlspecialchars(INPUT_POST));

                $form_data = [
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

                //confirm tokens
                if(!hash_equals($_SESSION['login_token'], $_POST['login_token'])){
                    die('Tokens don\'t match');
                }

                //make sure errors are empty
                if(empty($form_data['email_error']) && empty($form_data['password_error']) && !empty($_POST['login_token']) && hash_equals($_SESSION['login_token'], $_POST['login_token'])){
                    //check and set logged in user
                    $loggedInUser = $this -> userModel -> login($form_data['email'], $form_data['password']);
                    if($loggedInUser){
                        //create session
                        unset($_SESSION['login_token']);
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
    
                $form_data = [
                        'email' => '',
                        'password' => '',
                        'email_error' => '',
                        'password_error' => ''
                ];
    
                //load view
                $this -> view('users/login', $data, $form_data);
            }
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