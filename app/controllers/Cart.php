<?php   
    class Cart extends Controller {
        public function __construct(){
            $this -> listingModel = $this -> model('ListingItem');
        }

        public function index(){

            $cart_listings = $_SESSION['cart'];

            $data = [
                //metadata
                'title' => 'Cart',
                'meta_title' => 'Cart',
                'meta_description' => 'View your cart items and proceed to checkout',
                'meta_url' => '/cart',
                'meta_image' => 'woman-sunglasses.webp',
                //css
                'css_other' => 'cart.css',
                //listings
                'cart_listings' => $cart_listings
            ];

            $this -> view('store/cart', $data);
        }

        public function delete($id){

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $listing = $this -> listingModel -> getListingById($id);

                if(!$listing){
                    die('No listing');
                }

                if(isset($_SESSION['cart'][$listing -> id])){
                    unset($_SESSION['cart'][$listing -> id]);
                    redirect('cart');
                }else {
                    die('Something went wrong');
                }
            }

            else {
                redirect('cart');
            }
        }
    }