<?php
    class Listing {
        private $db;

        public function __construct(){
            $this -> db = new Database;
        }

        //get men's listings
        public function getMListings(){
            $this -> db -> query('SELECT * FROM listings  DESC WHERE gender = "Men\'s" ORDER BY listings.created_at');

            $results = $this -> db -> resultSet();

            return $results;
        }

        //get women's listings
        public function getWListings(){
            $this -> db -> query('SELECT * FROM listings  DESC WHERE gender = "Women\'s" ORDER BY listings.created_at');

            $results = $this -> db -> resultSet();

            return $results;
        }

         //get unisex listings
         public function getUListings(){
            $this -> db -> query('SELECT * FROM listings  DESC WHERE gender = "Unisex" ORDER BY listings.created_at');

            $results = $this -> db -> resultSet();

            return $results;
        }
    }