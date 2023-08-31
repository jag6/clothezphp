<?php
    class Search extends Controller {
        public function __construct(){

            //set model
            $this -> listingModel = $this -> model('ListingItem');
        }

        public function index(){
            if($_SERVER['REQUEST_METHOD'] == 'GET'){
                $form_data = [
                    'q' => $_GET['q']
                ];

                $search_results = $this -> listingModel -> getQListings($form_data['q']);
                $categories = $this -> listingModel -> getCategories();
                $types = $this -> listingModel -> getTypes();
                $genders = $this -> listingModel -> getGenders();

                $data = [
                    //metadata
                    'title' => 'Search',
                    'meta_title' => 'Search',
                    'meta_description' => 'Search for listings.',
                    'meta_url' => '/search',
                    'meta_image' => 'woman-sunglasses.webp',
                    //css
                    'css_other' => '',
                    //search results
                    'search_results' => $search_results,
                    'categories' => $categories,
                    'types' => $types,
                    'genders' => $genders
                ];

                //load view
                $this -> view('store/search', $data, $form_data);
            }
        }
    }