<?php 
    session_start();

    //flash message helper
    //example - flash('register_success', 'You are now registered');
    //display in view - echo flash('register_success');
    function flash($name = '', $message = '', $class = 'alert-success') {
        if(!empty($name)){
            //create new flash message
            if(!empty($message)){
                //unset previous values
                if(!empty($_SESSION[$name])) {
                    unset($_SESSION[$name]);
                }
                if(!empty($_SESSION[$name. '_class'])) {
                    unset($_SESSION[$name. '_class']);
                }
                //set new values
                $_SESSION[$name] = $message;
                $_SESSION[$name. '_class'] = $class;
            }
            //display flash
            elseif(!empty($_SESSION[$name])){
                echo '<div class="' . $_SESSION[$name. '_class'] . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
                //unset
                unset($_SESSION[$name]);
                unset($_SESSION[$name. '_class']);
            }
        }
    }


    //check authentication
    function isLoggedInUser(){
        $user = isset($_SESSION['user_id']) && $_SESSION['user_status'] == '';
        return $user;
    }

    function isLoggedInAdmin(){
        $admin = isset($_SESSION['user_id']) && $_SESSION['user_status'] == 'admin';
        return $admin;
    }


    //re-direct unless authenticated 
    function notAdminRedirect(){
        if(!isLoggedInAdmin()){
            redirect('');
        }
    }

    function notUserRedirect(){
        if(!isLoggedInUser()){
            redirect('');
        }
    }


    //re-direct away from login and register pages if authenticated
    function noLoginRegister(){
        if(isLoggedInAdmin()){
            redirect('admin');
        }elseif(isLoggedInUser()){
            redirect('users');
        }
    }

    
    //post token for register, login, add to cart, add to wishlist
    function csrfToken(){
        if(empty($_SESSION['csrf_token'])){
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
    }