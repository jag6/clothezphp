<?php 
    class Admin extends Controller {
        public function __construct(){
            //if(!isLoggedInAndAdmin()){
              //  redirect('');
            //}

            //$this -> userModel = $this -> model('User');
        }

        public function index(){

            $data = [
                'title' => 'Overview'
            ];

            $this -> view('admin/index', $data);
        }

        public function listingslist(){

            $data = [
                'title' => 'Listings List'
            ];

            $this -> view('admin/listings-list', $data);
        }

        public function listingsedit(){

            $data = [
                'title' => 'Edit Listing'
            ];

            $this -> view('admin/listing-edit', $data);
        }

        public function bannerslist(){

            $data = [
                'title' => 'Banners List'
            ];

            $this -> view('admin/banners-list', $data);
        }

        public function bannersedit(){

            $data = [
                'title' => 'Edit Banner'
            ];

            $this -> view('admin/banner-edit', $data);
        }

    }