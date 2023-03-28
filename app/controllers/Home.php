<?php 
    class Home extends Controller {
        public function __construct(){
            
        }

        public function index(){
            $data = [
                //metadata
                'title' => '',
                'meta_title' => '',
                'meta_description' => '',
                'meta_url' => '',
                'meta_image' => '',
                //css
                'css_other' => ''
            ];

            $this -> view('store/index', $data);
        }
    }