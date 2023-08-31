<?php
    $domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
    $cookie_options = [
        'expires' => time() + 60*60*24*30, 
        'path' => '/', 
        'domain' => $domain,
        'secure' => true,     // or false
        'httponly' => true,    // or false
        'samesite' => 'None' // None || Lax  || Strict
    ];

    $items = 'test';
    
    // array('form_id' => array('id' => '', 'name' => '', 'slug' => '', 'image_main' => '', 'price' => '', 'quantity' => (int) ''));

    //Cart
    // setcookie('Cart', $items, $cookie_options);

    // //Wishlist
    // setcookie('Wishlist', $items, $cookie_options);