<?php 
    class Wishlist extends Controller {
        public function __construct(){

            //set model
            $this -> listingModel = $this -> model('ListingItem');
        }

        public function index(){

            $wishlist_listings = $_SESSION['wishlist'];

            $data = [
                //metadata
                'title' => 'Wishlist',
                'meta_title' => 'Wishlist',
                'meta_description' => 'View your wishlist items.',
                'meta_url' => '/wishlist',
                'meta_image' => 'woman-sunglasses.webp',
                //css
                'css_other' => 'cart.css',
                //listings
                'wishlist_listings' => $wishlist_listings
            ];

            $this -> view('store/wishlist', $data);
        }

        public function delete($id){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                //check for listing in db
                $listing = $this -> listingModel -> getListingById($id);

                if(!$listing){
                    die('No listing');
                }

                //remove listing from wishlist
                if(isset($_SESSION['wishlist'][$listing -> id])){
                    unset($_SESSION['wishlist'][$listing -> id]);
                    redirect('wishlist');
                }else {
                    die('Something went wrong');
                }
            }

            else {
                redirect('wishlist');
            }
        }

        public function addToCart($id){

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

                //add listing to cart
                $_SESSION['cart'][$listing -> id] = ['id' => $listing -> id, 'name' => $listing -> name, 'slug' => $listing -> slug, 'image_main' => $listing -> image_main, 'price' => $listing -> price, 'quantity' => (int) 1]; 

                //remove listing from wishlist
                if(isset($_SESSION['wishlist'][$listing -> id])){
                    unset($_SESSION['wishlist'][$listing -> id]);
                    redirect('cart');
                }else {
                    die('Something went wrong');
                }
            }

            else {
                redirect('wishlist');
            }
        }
    }