<?php
    class ListingItem {
        private $db;

        public function __construct(){
            $this -> db = new Database;
        }


        //GET ... LISTINGS
        
        //search by
        public function getQListings($q){
            $this -> db -> query('SELECT * FROM listings WHERE name = :q ORDER BY listings.name DESC');
            //bind value
            $this -> db -> bind(':q', $q);

            $results = $this -> db -> resultSet();

            return $results;
        }
        // $this -> db -> query("SELECT * FROM listings WHERE CONCAT(name, ' ', description, ' ', category, ' ', type, ' ', gender) LIKE '%" . ':q' . "%' ORDER BY listings.name DESC");

        //category without duplicates
        public function getCategories(){
            $this -> db -> query('SELECT DISTINCT category FROM listings');

            $results = $this -> db -> resultSet();

            return $results;
        }
        //type without duplicates
        public function getTypes(){
            $this -> db -> query('SELECT DISTINCT type FROM listings');

            $results = $this -> db -> resultSet();

            return $results;
        }
        //gender without duplicates
        public function getGenders(){
            $this -> db -> query('SELECT DISTINCT gender FROM listings');

            $results = $this -> db -> resultSet();

            return $results;
        }

        //men's
        public function getMListings(){
            $this -> db -> query('SELECT * FROM listings WHERE gender = "Men\'s" ORDER BY listings.created_at DESC');

            $results = $this -> db -> resultSet();

            return $results;
        }

        //women's
        public function getWListings(){
            $this -> db -> query('SELECT * FROM listings WHERE gender = "Women\'s" ORDER BY listings.created_at DESC');

            $results = $this -> db -> resultSet();

            return $results;
        }

        //unisex
        public function getUListings(){
            $this -> db -> query('SELECT * FROM listings WHERE gender = "Unisex" ORDER BY listings.created_at DESC');

            $results = $this -> db -> resultSet();

            return $results;
        }

        //gender slug
        public function getListingsByGenderSlug($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE gender_slug = :gender_slug');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet();

            return $results;
        }

        //tops
        public function getListingsByTops($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE category = "Tops" AND gender_slug = :gender_slug ORDER BY listings.created_at DESC');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet();

            return $results;
        }

        //shirts
        public function getListingsByShirts($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE category = "Shirts" AND gender_slug = :gender_slug ORDER BY listings.created_at DESC');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet();

            return $results;
        }

        //jackets
        public function getListingsByJackets($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE category = "Jackets" AND gender_slug = :gender_slug ORDER BY listings.created_at DESC');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet();

            return $results;
        }

        //skirts
        public function getListingsBySkirts($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE category = "Skirts" AND gender_slug = :gender_slug ORDER BY listings.created_at DESC');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet($gender_slug);

            return $results;
        }

        //pants
        public function getListingsByPants($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE category = "Pants" AND gender_slug = :gender_slug ORDER BY listings.created_at DESC');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet();

            return $results;
        }

        //shoes
        public function getListingsByShoes($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE category = "Shoes" AND gender_slug = :gender_slug ORDER BY listings.created_at DESC');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet();

            return $results;
        }

        //socks
        public function getListingsBySocks($gender_slug){
            $this -> db -> query('SELECT * FROM listings WHERE category = "Socks" AND gender_slug = :gender_slug ORDER BY listings.created_at DESC');
            //bind value
            $this -> db -> bind(':gender_slug', $gender_slug);

            $results = $this -> db -> resultSet();

            return $results;
        }

        //id
        public function getListingsById($listings){
            $this -> db -> query('SELECT * FROM listings WHERE id = :listings');
            //bind value
            $this -> db -> bind(':listings', $listings);

            $results = $this -> db -> resultSet();

            return $results;
        }


        //GET LISTING

        //slug
        public function getListingBySlug($slug){
            $this -> db -> query('SELECT * FROM listings WHERE slug = :slug');
            //bind value
            $this -> db -> bind(':slug', $slug);

            $row = $this -> db -> single();

            return $row;
        }

        //id
        public function getListingById($id){
            $this -> db -> query('SELECT * FROM listings WHERE id = :id');
            //bind value
            $this -> db -> bind(':id', $id);

            $row = $this -> db -> single();

            return $row;
        }


        //SAVE NEW LISTING
        public function saveListing($form_data){
            $this -> db -> query('INSERT INTO listings (name, slug, description, gender, gender_slug, category, type, image_main, price, count_in_stock) VALUES(:name, :slug, :description, :gender, :gender_slug, :category, :type, :image_main, :price, :count_in_stock)');
            //bind values
            $this -> db -> bind(':name', $form_data['name']);
            $this -> db -> bind(':slug', $form_data['slug']);
            $this -> db -> bind(':description', $form_data['description']);
            $this -> db -> bind(':gender', $form_data['gender']);
            $this -> db -> bind(':gender_slug', $form_data['gender_slug']);
            $this -> db -> bind(':category', $form_data['category']);
            $this -> db -> bind(':type', $form_data['type']);
            $this -> db -> bind(':image_main', $form_data['image_main']);
            $this -> db -> bind(':price', $form_data['price']);
            $this -> db -> bind(':count_in_stock', $form_data['count_in_stock']);

            //execute
            if($this -> db -> execute()){
                return true;
            }else {
                return false;
            }
        }
    }