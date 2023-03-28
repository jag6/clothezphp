<?php
    /*App Core Class
        - Creates Url and loads core controller
        - URL FORMAT: /controller/method/params
    */

    class Core {
        protected $currentController = 'Home';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct(){
            //print_r($this -> getUrl());

            $url = $this -> getUrl();

            //look in controllers for first value
            if(isset($url[0]) && file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
                //if exists then set as controller
                $this -> currentController = ucwords($url[0]);
                //unset 0 index
                unset($url[0]);
            }elseif($this -> currentController && isset($url[0]) && !file_exists('../app/controllers/' . ucwords($url[0]). '.php')){
                http_response_code(404);
                include(APPROOT . '/views/pages/404.php');
                die();
            }

            //require controller
            require_once '../app/controllers/' . $this -> currentController . '.php';

            //instantiate controller class
            $this -> currentController = new $this -> currentController;

            //check for second part of url
            if(isset($url[1])){
                //check to see if method exists in controller
                if(method_exists($this -> currentController, $url[1])){
                    $this -> currentMethod = $url[1];
                    //unset 1 index
                    unset($url[1]);
                }else{
                    http_response_code(404);
                    include(APPROOT . '/views/pages/404.php');
                    die();
                }
            }
            
            //get params
            $this -> params = $url ? array_values($url) : [];

            //call a callback with array of params
            call_user_func_array([$this -> currentController, $this -> currentMethod], $this -> params);
        }

        public function getUrl(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                $url = str_replace('listings-list', 'listingslist', $url);
                $url = str_replace('listing-edit', 'listingedit', $url);
                $url = str_replace('banners-list', 'bannerslist', $url);
                $url = str_replace('banner-edit', 'banneredit', $url);
                return $url;
            }
        }
    }