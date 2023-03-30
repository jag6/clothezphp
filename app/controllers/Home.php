<?php 
    class Home extends Controller {
        public function __construct(){
            
            //set models
            $this -> bannerModel = $this -> model('Banner');
            $this -> listingModel = $this -> model('ListingItem');
        }

        public function index(){
            $banners = $this -> bannerModel -> getBanners();
            $mListings = $this -> listingModel -> getMListings();
            $wListings = $this -> listingModel -> getWListings();
            $uListings = $this -> listingModel -> getUListings();

            $data = [
                //metadata
                'title' => 'Home',
                'meta_title' => 'Best Quality Clothing Items at Reasonable Prices',
                'meta_description' => 'Come and browse our selection of high quality, yet reasonably priced goods. We specialize in making our clothing, the very best that it can possibly be.',
                'meta_url' => '',
                'meta_image' => 'woman-sunglasses.webp',
                //css
                'css_other' => '',
                //banners
                'banners' => $banners,
                'mListings' => $mListings,
                'wListings' => $wListings,
                'uListings' => $uListings
            ];

            $this -> view('store/index', $data);
        }
    }