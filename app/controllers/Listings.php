<?php 
    class Listings extends Controller {
        public function __construct(){

            //set model
            $this -> listingModel = $this -> model('ListingItem');
        }

        public function index($gender_slug){
            $listings = $this -> listingModel -> getListingsByGenderSlug($gender_slug);

            $tops = $this -> listingModel -> getListingsByTops($gender_slug);
            $shirts = $this -> listingModel -> getListingsByShirts($gender_slug);
            $jackets = $this -> listingModel -> getListingsByJackets($gender_slug);
            $skirts = $this -> listingModel -> getListingsBySkirts($gender_slug);
            $pants = $this -> listingModel -> getListingsByPants($gender_slug);
            $shoes = $this -> listingModel -> getListingsByShoes($gender_slug);
            $socks = $this -> listingModel -> getListingsBySocks($gender_slug);


            //redirect to 404 if no gender slug in db
            if(!$listings){
                $this -> view('pages/404');
            }

            else {
                $data = [
                    //metadata
                    'title' => $gender_slug,
                    'meta_description' => 'Log in to your account',
                    'meta_url' => '/' . $gender_slug,
                    'meta_image' => 'woman-sunglasses.webp',
                    //css
                    'css_other' => '',
                    //listings
                    'listings' => $listings,
                    'tops' => $tops,
                    'shirts' => $shirts,
                    'jackets' => $jackets,
                    'skirts' => $skirts,
                    'pants' => $pants,
                    'shoes' => $shoes,
                    'socks' => $socks
                ];

                $this -> view('store/listings', $data);
            }
        }
    }