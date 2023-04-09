<?php   
    class Listing extends Controller {
        public function __construct(){

            //set model
            $this -> listingModel = $this -> model('ListingItem');
        }

        public function index($slug){
            $listing = $this -> listingModel -> getListingBySlug($slug);

            //redirect to 404 if no listing in db
            if(!$listing){
                $this -> view('pages/404');
            }

            else {
                $data = [
                    'listing' => $listing
                ];

                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    //process form

                    //sanitize post data
                    $_POST = filter_input_array(htmlspecialchars(INPUT_POST));

                    $form_data = [
                        'id' => trim($_POST['id']), 
                        'name' => trim($_POST['name']), 
                        'slug' => trim($_POST['slug']),
                        'image_main' => trim($_POST['image_main']), 
                        'quantity' => trim($_POST['quantity']),
                        'price' => trim($_POST['price']),
                        'quantity_error' => ''
                    ];

                    //validate quantity
                    if(empty($form_data['quantity'])){
                        $form_data['quantity_error'] = 'Please enter in your desired quantity';
                    }elseif($form_data['quantity'] > $data['listing'] -> count_in_stock){
                        $form_data['quantity_error'] = 'Sorry, only ' . $data['listing'] -> count_in_stock . ' in stock';
                    }
                    
                    //make sure errors are empty
                    if(empty($form_data['quantity_error'])){
                        //check for listing in db
                        $listing = $this -> listingModel -> getListingById($form_data['id']);
                        if($listing){
                            if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
                                //update quantity if already in cart
                                $repeat_item = $this -> listingModel -> getListingById($form_data['id']);
                                if($repeat_item == $_SESSION['cart']['form_id']){
                                    $_SESSION['cart']['quantity'] += $form_data['quantity'];
                                }else {
                                    //add listing if not in cart
                                    $_SESSION['cart'][$form_data['id']] = array('id' => $form_data['id'], 'name' => $form_data['name'], 'slug' => $form_data['slug'], 'image_main' => $form_data['image_main'], 'price' => $form_data['price'], 'quantity' => $form_data['quantity']);
                                }
                            }else {
                                //add listing to empty cart
                                $_SESSION['cart'] = array();
                                $_SESSION['cart'][$form_data['id']] = array('id' => $form_data['id'], 'name' => $form_data['name'], 'slug' => $form_data['slug'], 'image_main' => $form_data['image_main'], 'price' => $form_data['price'], 'quantity' => $form_data['quantity']);
                            }
                            redirect('cart');
                        }else {
                            die('No listing');
                        }
                    }else {
                        //load view with errors
                        $this -> view('store/listing', $data, $form_data);
                    }
                }

                else {
                    //initialize form

                    $form_data = [
                        'id' => '',
                        'name' => '', 
                        'slug' => '',
                        'image_main' => '', 
                        'price' => '',
                        'quantity' => '',
                        'quantity_error' => ''
                    ];

                    //load view
                    $this -> view('store/listing', $data, $form_data);
                }
            }
        }

        public function addToWishlist($id){
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
            }
        }

        public function sendReview($id){
            if($_SERVER['REQUEST_METHOD' == 'POST']){

            }
        }
    }