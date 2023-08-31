<?php   
    class Listing extends Controller {
        public function __construct(){

            //set model
            $this -> listingModel = $this -> model('ListingItem');

            //set post token
            csrfToken();
        }

        public function index($slug){
            $listing = $this -> listingModel -> getListingBySlug($slug);

            //re-direct to 404 if no listing in db
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
                        'quantity' => trim($_POST['quantity']),
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
                        if(!$listing){
                            die('No listing');
                        }    
                        if($listing == $_SESSION['cart']['form_id']){
                            //update quantity if already in cart
                            $_SESSION['cart']['quantity'] += $form_data['quantity'];
                                          
                        }else {
                            //add listing if not in cart  
                            $_SESSION['cart'][$form_data['id']] = ['id' => $form_data['id'], 'name' => $listing -> name, 'slug' => $listing -> slug, 'image_main' => $listing -> image_main, 'price' => $listing -> price, 'quantity' => (int) $form_data['quantity']];
                        }
                        redirect('cart');
                    }else {
                        //load view with errors
                        $this -> view('store/listing', $data, $form_data);
                    }
                }

                else {
                    //initialize form

                    $form_data = [
                        'id' => '',
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
                //process form

                //sanitize post data
                $form_data = [
                    'id' => trim(htmlspecialchars($_POST['id']))
                ];

                //check for listing in db
                $listing = $this -> listingModel -> getListingById($form_data['id']);
                if(!$listing){
                    die('No listing');
                }

                //add listing to wishlist
                $_SESSION['wishlist'][$listing -> id] = ['id' => $listing -> id, 'name' => $listing -> name, 'slug' => $listing -> slug, 'image_main' => $listing -> image_main, 'price' => $listing -> price];

                redirect('wishlist');
            }

            else {
                redirect('listing');
            }
        }

        public function sendReview($id){
            if($_SERVER['REQUEST_METHOD' == 'POST']){

            }
        }
    }