<?php
    class ListingItem {
        private $db;

        public function __construct(){
            $this -> db = new Database;
        }


        //GET ... LISTINGS

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


        //GET LISTING

        //slug
        public function getListingBySlug($slug){
            $this -> db -> query('SELECT * FROM listings WHERE slug = :slug');
            //bind value
            $this -> db -> bind(':slug', $slug);

            $row = $this -> db -> single();

            return $row;
        }


        //save listing
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