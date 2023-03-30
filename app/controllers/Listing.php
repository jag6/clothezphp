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
    
                $this -> view('store/listing', $data);
            }
        }

        public function addToCart($id){
            if($_SERVER['REQUEST_METHOD' == 'POST']){

            }
        }

        public function sendReview($id){
            if(isset($_SESSION['user_id'])){
                if($_SERVER['REQUEST_METHOD' == 'POST']){

                }
            }
        }
    }