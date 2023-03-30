<?php 
    class Banner {
        private $db;

        public function __construct(){
            $this -> db = new Database;
        }

        //get 
        public function getBanners(){
            $this -> db -> query('SELECT * FROM banners ORDER BY banners.created_at DESC');

            $results = $this -> db -> resultSet();

            return $results;
        }

        //save 
        public function saveBanner($form_data){
            $this -> db -> query('INSERT into banners (image, image_description, text) VALUES(:image, :image_description, :text)');
            //bind values
            $this -> db -> bind(':image', $form_data['image']);
            $this -> db -> bind(':image_description', $form_data['image_description']);
            $this -> db -> bind(':text', $form_data['text']);

            //execute
            if($this -> db -> execute()){
                return true;
            }else {
                return false;
            }
        }

        //edit 

        //delete 
    }