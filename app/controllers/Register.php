<?php 
    class Register extends Controller {
        public function __construct(){
            $this -> userModel = $this -> model('User');

            //re-direct away from page if logged in
            noLoginRegister();

            //set post token
            csrfToken();
        }

        public function index(){
            $data = [
                //metadata
                'title' => 'Register',
                'meta_title' => 'Register',
                'meta_description' => 'Log in to your account',
                'meta_url' => '/register',
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
                    'first_name' => trim($_POST['first_name']),
                    'last_name' => trim($_POST['last_name']),
                    'username' => trim($_POST['username']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'first_name_error' => '',
                    'last_name_error' => '',
                    'username_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                ];

                //validate first name
                if(empty($form_data['first_name'])){
                    $form_data['first_name_error'] = 'Please enter first name';
                }elseif(strlen($form_data['first_name']) < 2){
                    $form_data['first_name_error'] = 'First name must be more than 1 letter';
                }

                //validate last name
                if(empty($form_data['last_name'])){
                    $form_data['last_name_error'] = 'Please enter last name';
                }elseif(strlen($form_data['last_name']) < 2){
                    $form_data['last_name_error'] = 'Last name must be more than 1 letter';
                }

                //validate username
                if(empty($form_data['username'])){
                    $form_data['username_error'] = 'Please enter username';
                }elseif(strlen($form_data['username']) < 4){
                    $form_data['username_error'] = 'Username must be more than 4 letters';
                }elseif($this -> userModel -> findUserByUsername($form_data['username'])){
                        $form_data['username_error'] = 'Username already taken';
                }

                //validate email
                if(empty($form_data['email'])){
                    $form_data['email_error'] = 'Please enter email';
                }elseif(!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)){
                    $form_data['email_error'] = 'Invalid email format';
                }elseif($this -> userModel -> findUserByEmail($form_data['email'])){
                        $form_data['email_error'] = 'Email already taken';
                }

                //validate password
                if(empty($form_data['password'])){
                    $form_data['password_error'] = 'Please enter password';
                }elseif(strlen($form_data['password'] < 8)){
                    $form_data['password_error'] = 'Password must be at least 8 characters long';
                }

                //validate register token
                if(empty($_POST['csrf_token'])){
                    die('No token');
                }

                //confirm tokens
                if(!hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
                    die('Tokens don\t match');
                }

                ////make sure errors are empty
                if(empty($form_data['first_name_error']) && empty($form_data['last_name_error']) && empty($form_data['username_error']) && empty($form_data['email_error']) && empty($form_data['password_error']) && !empty($_POST['csrf_token']) && hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])){
                    //validated

                    //hash password
                    $form_data['password'] = password_hash($form_data['password'], PASSWORD_DEFAULT);

                    //register user
                    if($this -> userModel -> register($form_data)){
                        unset($_SESSION['csrf_token']);
                        flash('register_success', 'Success! You\'re now registered and can log in');
                        redirect('/login');
                    }else {
                        die('Sorry, something went wrong. Please try again');
                    }
                }else {
                    //load view with errors
                    $this -> view('users/register', $data, $form_data);
                }

            }else {
                //initialize form

                $form_data = [
                    'first_name' => '',
                    'last_name' => '',
                    'username' => '',
                    'email' => '',
                    'password' => '',
                    'first_name_error' => '',
                    'last_name_error' => '',
                    'username_error' => '',
                    'email_error' => '',
                    'password_error' => '',
                ];

                //load view
                $this -> view('users/register', $data, $form_data);
            }
        }
    }