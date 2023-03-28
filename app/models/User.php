<?php   
    class User {
        private $db;

        public function __construct(){
            $this -> db = new Database;
        }

        //register user
        public function register($form_data){
            $this -> db -> query('INSERT INTO users (first_name, last_name, username, email, phone_number, password) VALUES (:first_name, :last_name, :username, :email, :password');
            //bind values
            $this -> db -> bind(':first_name', $form_data['first_name']);
            $this -> db -> bind(':last_name', $form_data['last_name']);
            $this -> db -> bind(':username', $form_data['username']);
            $this -> db -> bind(':phone_number', $form_data['phone_number']);
            $this -> db -> bind(':password', $form_data['password']);

            //execute
            if($this -> sb -> execute()){
                return true;
            }else {
                return false;
            }
        }

        //log in user
        public function login($email, $password){
            $this -> db -> query('SELECT * FROM users WHERE email = :email');
            $this -> db -> bind(':email', $email);

            $row = $this -> db -> single();

            $hashed_password = $row -> password;
            if(password_verify($password, $hashed_password)){
                return $row;
            }else {
                return false;
            }
        }

        //find user by email
        public function findUserByEmail($email){
            $this -> db -> query('SELECT * FROM users WHERE email = :email');
            //bind value
            $this -> db -> bind(':email', $email);

            $row = $this -> db -> single();

            //check row
            if($this -> db -> rowCount() > 0){
                return true;
            }else {
                return false;
            }
        }

        //find user by username
        public function findUserByUsername($username){
            $this -> db -> query('SELECT * FROM users WHERE username = :username');
            //bind value
            $this -> db -> bind(':username', $username);

            $row = $this -> db -> single();

            //check row
            if($this -> db -> rowCount() > 0){
                return true;
            }else {
                return false;
            }
        }

        //get user by id
        public function getUserById($id){
            $this -> db -> query('SELECT * FROM users WHERE id = :id');
            //bind value
            $this -> db -> bind(':id', $id);

            $row = $this -> db -> single();

            return $row;
        }

        //change user details
        public function updateUser($form_data){
            $this -> db -> query('UPDATE users SET username = :username, email = :email, phone_number = :phone_number, password = :password WHERE id = :id');
            //bind values
            $this -> db -> bind(':id', $form_data['id']);
            $this -> db -> bind(':username', $form_data['username']);
            $this -> db -> bind(':email', $form_data['email']);
            $this -> db -> bind(':phone_number', $form_data['phone_number']);
            $this -> db -> bind(':password', $form_data['password']);

            //execute
            if($this -> db -> execute()){
                return true;
            }else {
                return false;
            }
        }
    }