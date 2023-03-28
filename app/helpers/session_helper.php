<?php 
    session_start();

    //flash message helper
    //example - flash('register_success', 'You are now registered');
    //display in view - echo flash('register_success');
    function flash($username = '', $message = '', $class = 'alert-success'){
        if(!empty($username)){
            if(!empty($message) && empty($_SESSION[$username])){
                if(!empty($_SESSION[$username])){
                    unset($_SESSION[$username]);
                }

                if(!empty($_SESSION[$username. '_class'])){
                    unset($_SESSION[$username. '_class']);
                }

                $_SESSION[$username] = $message;
                $_SESSION[$username . '_class'] = $class;
            }elseif(empty($message) && !empty($_SESSION[$username])){
                $class = !empty($_SESSION[$username. '_class']) ? $_SESSION[$username. '_class'] : '';
                echo '<div class ="'.$class.'" id="msg-flash">'.$_SESSION[$username].'</div>';
                unset($_SESSION[$username]);
                unset($_SESSION[$username. '_class']);
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