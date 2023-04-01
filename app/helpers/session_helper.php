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

    function isLoggedIn(){
        if(isset($_SESSION['user_id'])){
            return true;
        }else {
            return false;
        }
    }

    function isLoggedInAndAdmin(){
        if(isset($_SESSION['user_id']) && $_SESSION['user_status'] == 'admin'){
            return true;
        }else {
            return false;
        }
    }