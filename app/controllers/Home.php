<?php 
    class Home extends Controller {
        public function __construct(){
            
        }

        public function index(){
            $banners;

            $data = [
                //metadata
                'title' => 'Home',
                'meta_title' => 'Best Quality Clothing Items at Reasonable Prices',
                'meta_description' => 'Come and browse our selection of high quality, yet reasonably priced goods. We specialize in making our clothing, the very best that it can possibly be.',
                'meta_url' => '',
                'meta_image' => 'woman-sunglasses.webp',
                //css
                'css_other' => '',
                //banners
                'banners' => $banners
            ];

            $this -> view('store/index', $data);
        }
    }