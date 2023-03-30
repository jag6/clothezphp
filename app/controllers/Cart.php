<?php   
    class Cart extends Controller {
        public function __construct(){
            $this -> listingModel = $this -> model('ListingItem');
        }

        public function index(){

            $data = [
                //metadata
                'title' => 'Cart',
                'meta_title' => 'Cart',
                'meta_description' => 'View your cart items and proceed to checkout',
                'meta_url' => '/cart',
                'meta_image' => 'woman-sunglasses.webp',
                //css
                'css_other' => 'cart.css',
            ];

            $this -> view('store/cart', $data);
        }
    }