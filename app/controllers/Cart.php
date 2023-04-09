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
    }