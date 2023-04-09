<?php 
    class Admin extends Controller {
        public function __construct(){
            if(!isLoggedInAndAdmin()){
                redirect('');
            }

            //set models
            $this -> userModel = $this -> model('User');
            $this -> listingModel = $this -> model('ListingItem');
            $this -> bannerModel = $this -> model('Banner');
        }

        public function index(){

            $data = [
                'title' => 'Overview'
            ];

            $this -> view('admin/index', $data);
        }

        public function listingslist(){
            $mListings = $this -> listingModel -> getMListings();
            $wListings = $this -> listingModel -> getWListings();
            $uListings = $this -> listingModel -> getUListings();
    
            $data = [
                //metadata
                'title' => 'Listings List',
                //listings
                'mListings' => $mListings,
                'wListings' => $wListings,
                'uListings' => $uListings
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //sanitize post array
                $_POST = filter_input_array(htmlspecialchars(INPUT_POST));

                //upload image
                if($_FILES){
                    //$img_name = 'images/' . $_FILES['image']['name'];
                    $img_size = $_FILES['image_main']['size'];
                    $tmp_name = $_FILES['image_main']['tmp_name'];
                    $filename = $_FILES['image_main']['name'];
                    //$img_ex = pathinfo($filename, PATHINFO_EXTENSION);
                    // $img_ex_lc = strtolower($img_ex);
                    $img_upload_path = '../public/images/listings/' . $filename;
                    $img_load_path = 'images/listings/' . $filename;
                    $allowed_extensions = array('webp', 'jpg', 'jpeg', 'png', 'svg');
                }

                //check if file extension is allowed
                if(!$allowed_extensions){
                    $form_data['image_main_error'] = 'Unsupported filetype';
                }
                //check image size 
                if($img_size > 550000){
                    $form_data['image_main_error'] = 'Too large file';
                }
                move_uploaded_file($tmp_name, $img_upload_path);

                //post array
                $form_data = [
                    'name' => trim($_POST['name']),
                    'slug' => trim($_POST['slug']),
                    'description' => trim($_POST['description']),
                    'gender' => trim($_POST['gender']),
                    'gender_slug' => trim($_POST['gender_slug']),
                    'category' => trim($_POST['category']),
                    'type' => trim($_POST['type']),
                    'image_main' => $img_load_path,
                    'price' => ($_POST['price']),
                    'count_in_stock' => ($_POST['count_in_stock']),
                    'name_error' => '',
                    'slug_error' => '',
                    'description_error' => '',
                    'gender_error' => '',
                    'gender_slug_error' => '',
                    'category_error' => '',
                    'type_error' => '',
                    'image_main_error' => '',
                    'price_error' => '',
                    'count_in_stock_error' => ''
                ];

                //validate name
                if(empty($form_data['name'])){
                    $form_data['name_error'] = 'Please enter name';
                }

                //validate slug
                if(empty($form_data['slug'])){
                    $form_data['slug_error'] = 'Please enter slug';
                }elseif($this -> listingModel -> getListingBySlug($form_data['slug'])){
                    $form_data['slug_error'] = 'Another listing already has this slug';
                }

                //validate description
                if(empty($form_data['description'])){
                    $form_data['description_error'] = 'Please enter description';
                }

                //validate gender
                if(empty($form_data['gender'])){
                    $form_data['gender_error'] = 'Please enter gender';
                }

                //validate gender slug
                if(empty($form_data['gender_slug'])){
                    $form_data['gender_slug_error'] = 'Please enter gender slug';
                }

                //validate category
                if(empty($form_data['category'])){
                    $form_data['category_error'] = 'Please enter category';
                }

                //validate type
                if(empty($form_data['type'])){
                    $form_data['type_error'] = 'Please enter type';
                }

                //validate image main
                if(empty($form_data['image_main'])){
                    $form_data['image_main_error'] = 'Please upload image';
                }

                //validate price
                if(empty($form_data['price'])){
                    $form_data['price_error'] = 'Please enter price';
                }

                //validate count in stock
                if(empty($form_data['count_in_stock'])){
                    $form_data['count_in_stock_error'] = 'Please enter count in stock';
                }

                //validate token
                if(empty($_POST['token'])){
                    die('No token');
                }

                //confirm tokens
                if(!hash_equals($_SESSION['token'], $_POST['token'])){
                    die('Tokens don\'t match');
                }

                //send post if no errors
                if(empty($form_data['name_error']) && empty($form_data['slug_error']) && empty($form_data['description_error']) && empty($form_data['gender_error']) && empty($form_data['gender_slug_error']) && empty($form_data['category_error']) && empty($form_data['type_error']) && empty($form_data['image_main_error']) && empty($form_data['price_error']) && empty($form_data['count_in_stock_error']) && !empty($_POST['token']) && hash_equals($_SESSION['token'], $_POST['token'])){
                    //validated
                    if($this -> listingModel -> saveListing($form_data)){
                        flash('listing_success', 'Listing Saved!');
                        redirect('admin/listings-list');
                    }else {
                        die('Something went wrong');
                    }
                }else {
                    //load view with errors
                    $this -> view('admin/listings-list', $data, $form_data);
                }

            }else {
                $form_data = [
                    'name' => '',
                    'slug' => '',
                    'description' => '',
                    'gender' => '',
                    'gender_slug' => '',
                    'category' => '',
                    'type' => '',
                    'image_main' => '',
                    'price' => '',
                    'count_in_stock' => '',
                    'name_error' => '',
                    'slug_error' => '',
                    'description_error' => '',
                    'gender_error' => '',
                    'gender_slug_error' => '',
                    'category_error' => '',
                    'type_error' => '',
                    'image_main_error' => '',
                    'price_error' => '',
                    'count_in_stock_error' => ''
                ];
            }

            $this -> view('admin/listings-list', $data, $form_data);
        }

        public function listingsedit(){

            $data = [
                'title' => 'Edit Listing'
            ];

            $this -> view('admin/listing-edit', $data);
        }

        public function bannerslist(){
            $banners = $this -> bannerModel -> getBanners();

            $data = [
                //metadata
                'title' => 'Banners List',
                //banners
                'banners' => $banners
            ];

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //sanitize post array
                $_POST = filter_input_array(htmlspecialchars(INPUT_POST));

                //upload image
                if($_FILES){
                    //$img_name = 'images/' . $_FILES['image']['name'];
                    $img_size = $_FILES['image']['size'];
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $filename = $_FILES['image']['name'];
                    //$img_ex = pathinfo($filename, PATHINFO_EXTENSION);
                    // $img_ex_lc = strtolower($img_ex);
                    $img_upload_path = '../public/images/banners/' . $filename;
                    $img_load_path = 'images/banners/' . $filename;
                    $allowed_extensions = array('webp', 'jpg', 'jpeg', 'png', 'svg');
                }

                //check if file extension is allowed
                if(!$allowed_extensions){
                    $form_data['image_error'] = 'Unsupported filetype';
                }
                //check image size 
                if($img_size > 550000){
                    $form_data['image_error'] = 'Too large file';
                }
                move_uploaded_file($tmp_name, $img_upload_path);

                //post array
                $form_data = [
                    'image' => $img_load_path,
                    'image_description' => trim($_POST['image_description']),
                    'text' => trim($_POST['text']),
                    'image_error' => '',
                    'image_description_error' => '',
                    'text_error' => ''
                ];

                //validate image
                if(empty($form_data['image'])){
                    $form_data['image_error'] = 'Please upload image';
                }

                //validate image description
                if(empty($form_data['image_description'])){
                    $form_data['image_description_error'] = 'Please enter image description';
                }

                //validate text
                if(empty($form_data['text'])){
                    $form_data['text_error'] = 'Please upload text';
                }

                //validate token
                if(empty($_POST['token'])){
                    die('No token');
                }

                //confirm tokens
                if(!hash_equals($_SESSION['token'], $_POST['token'])){
                    die('Tokens don\'t match');
                }

                //send post if no errors
                if(empty($form_data['image_error']) && empty($form_data['image_description_error']) && empty($form_data['text_error']) && !empty($_POST['token']) && hash_equals($_SESSION['token'], $_POST['token'])){
                    //validated
                    if($this -> bannerModel -> saveBanner($form_data)){
                        flash('banner_success', 'Banner Saved!');
                        redirect('admin/banners-list');
                    }else {
                        die('Something went wrong');
                    }
                }else {
                    //load view with errors
                    $this -> view('admin/banners-list', $data, $form_data);
                }

            }else {
                $form_data = [
                    'image' => '',
                    'image_description' => '',
                    'text' => '',
                    'image_error' => '',
                    'image_description_error' => '',
                    'text_error' => ''
                ];
            }

            $this -> view('admin/banners-list', $data, $form_data);
        }

        public function bannersedit(){

            $data = [
                'title' => 'Edit Banner'
            ];

            $this -> view('admin/banner-edit', $data);
        }

    }