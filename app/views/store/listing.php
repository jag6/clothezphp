<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata First -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['listing'] -> name; ?> - Clothez</title>
    <!-- CSS + Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/headerFooter.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/listings.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URLROOT ;?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URLROOT ;?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URLROOT ;?>/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="<?php echo URLROOT; ?>/favicon/favicon.ico">
    <link rel="manifest" href="<?php echo URLROOT ;?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo URLROOT ;?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- Canonical URL-->
    <link rel="canonical" href="<?php echo URLROOT; ?>/listing/<?php echo $data['listing'] -> slug; ?>">
    <!-- Metadata -->
    <meta property="og:locale" content="en_US"/>
    <meta name="description" content="<?php echo $data['listing'] -> description; ?>">
    <!-- Twitter Metadata -->
    <meta name="twitter:title" content="<?php echo $data['listing'] -> name; ?>">
    <meta name="twitter:description" content="<?php echo $data['listing'] -> description; ?>">
    <meta name="twitter:image" content="<?php echo URLROOT; ?>/<?php echo $data['listing'] -> image_main; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Other Social Media Metadata -->
    <meta property="og:title" content="<?php echo $data['listing'] -> name; ?>">
    <meta property="og:description" content="<?php echo $data['listing'] -> description; ?>">
    <meta property="og:image" content="<?php echo URLROOT; ?>/<?php echo $data['listing'] -> image_main; ?>">
    <meta property="og:url" content="<?php echo URLROOT; ?>/listing/<?php echo $data['listing'] -> slug; ?>">
    <meta property="og:site_name" content="Clothez">
    <!-- Scripts -->
    <script src="<?php echo URLROOT; ?>/scripts/main.js" defer></script>   
</head>
<body>
    <?php require APPROOT . '/views/includes/header.php'; ?>
    <main>
        <?php require APPROOT . '/views/includes/sidebar.php'; ?>
        <section class="listing-container">
            <section class="details">
                <div class="img-info">
                    <div class="details-img">
                        <img class="listing-img" src="<?php echo URLROOT; ?>/<?php echo $data['listing'] -> image_main; ?>" alt="<?php echo $data['listing'] -> name; ?>">
                    </div>
                    <div class="details-info">
                        <ul>
                            <li>
                                <h1 class="listing-name"><?php echo $data['listing'] -> name; ?></h1>
                            </li>
                            <li class="listing-rating">
                                <div class="rating">
                                    <span>
                                        <i class="<?php if($data['listing'] -> rating >= 1){
                                            echo 'fa-solid-fa-star';
                                        }elseif($data['listing'] -> rating >= .5) {
                                            echo 'fa-solid fa-star-half';
                                        }else {
                                            echo 'fa-regular fa-star';
                                        }
                                        ;?>"></i>
                                    </span>
                                    <span>
                                    <i class="<?php if($data['listing'] -> rating >= 2){
                                            echo 'fa-solid-fa-star';
                                        }elseif($data['listing'] -> rating >= 1.5) {
                                            echo 'fa-solid fa-star-half';
                                        }else {
                                            echo 'fa-regular fa-star';
                                        }
                                        ;?>"></i>
                                    </span>
                                    <span>
                                    <i class="<?php if($data['listing'] -> rating >= 3){
                                            echo 'fa-solid-fa-star';
                                        }elseif($data['listing'] -> rating >= 2.5) {
                                            echo 'fa-solid fa-star-half';
                                        }else {
                                            echo 'fa-regular fa-star';
                                        }
                                        ;?>"></i>
                                    </span>
                                    <span>
                                    <i class="<?php if($data['listing'] -> rating >= 4){
                                            echo 'fa-solid-fa-star';
                                        }elseif($data['listing'] -> rating >= 3.5) {
                                            echo 'fa-solid fa-star-half';
                                        }else {
                                            echo 'fa-regular fa-star';
                                        }
                                        ;?>"></i>
                                    </span>
                                    <span>
                                    <i class="<?php if($data['listing'] -> rating >= 5){
                                            echo 'fa-solid-fa-star';
                                        }elseif($data['listing'] -> rating >= 4.5) {
                                            echo 'fa-solid fa-star-half';
                                        }else {
                                            echo 'fa-regular fa-star';
                                        }
                                        ;?>"></i>
                                    </span>
                                    <span><?php if($data['listing'] -> num_reviews == 0){
                                        echo 'No reviews';
                                    }elseif($data['listing'] -> num_reviews == 1){
                                        echo '1 Review';
                                    }else{
                                        echo $data['listing'] -> num_reviews; 'Reviews';
                                    } ;?>
                                    </span>
                                </div>
                            </li>
                            <li>
                                <h2 class="listing-price">Price: $<?php echo $data['listing'] -> price; ?></h2>
                            </li>
                            <li>
                                <h2>Description:</h2>
                                <div>
                                    <p><?php echo $data['listing'] -> description; ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="details-action">
                    <ul>
                        <li>Price: $<?php echo $data['listing'] -> price; ?></li>
                        <li>
                        Status: <?php echo $data['listing'] -> count_in_stock > 0 ? '<span class="success">In Stock</span>' : '<span class="error">Unavailable</span>'; ?>
                        </li>
                        <?php if($data['listing'] -> count_in_stock == 0 ) : ?>
                        <?php else : ?>
                            <li>
                                <div id="add-to-cart-btn" class="fw primary bold">
                                    <form action="<?php echo URLROOT;?>/listing/<?php echo $data['listing'] -> slug; ?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $data['listing'] -> id?>">
                                        <label for="quantity">Quantity</label>
                                        <input type="text" name="quantity" inputmode="numeric" pattern="[0-9]*" class="<?php echo (!empty($form_data['quantity_error'])) ? 'invalid' : ''; ?>" value="<?php echo (empty($form_data['quantity'])) ? 1 : $form_data['quantity']; ?>">
                                        <span class="invalid span-invalid"><?php echo $form_data['quantity_error']; ?></span> 
                                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                        <button aria-label="Add to Cart Button" type="submit">ADD TO CART</button>
                                    </form>
                                </div>
                            </li>
                            <li>
                                <div id="add-to-wl-btn" class="fw primary bold">
                                    <form action="<?php echo URLROOT;?>/listing/addToWishlist/<?php echo $data['listing'] -> id; ?>" method="post">
                                        <input type="hidden" name="id" value="<?php echo $data['listing'] -> id?>">
                                        <button aria-label="Add to Wishlist Button" type="submit">ADD TO WISHLIST</button>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </section>
            <section id="reviews-container" class="reviews-container">
                <section id="review-box" class="form-container">
                    <?php if(isset($_SESSION['user_id'])) : ?>
                        <form action="<?php echo URLROOT; ?>/listing/sendReview" method="post" id="review-form" class="form review-form">
                            <h2><span><i class="fa-solid fa-pen-to-square"></i></span>Write a Review</h2>
                            <label for="rating">Rating</label>
                            <select required name="rating" id="rating">
                                <option value="">Select</option>
                                <option value="1">1 = Poor</option>
                                <option value="2">2 = Fair</option>
                                <option value="3">3 = Good</option>
                                <option value="4">4 = Very Good</option>
                                <option value="5">5 = Excellent</option>
                            </select>
                            <label for="comment">Comment</label>
                            <textarea required name="comment" id="comment" cols="30" rows="5"></textarea>
                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                            <button type="submit" class="primary bold">SUBMIT</button>
                        </form>
                    <?php else : ?>
                        <div>
                            <h2><a class="link-span" href="<?php echo URLROOT; ?>/login">Please Log In <span class="bold">HERE</span> to write a review</a></h2>
                        </div>  
                    <?php endif; ?>
                </section>
                <section class="all-reviews">
                    <div class="reviews-header"><h2>Reviews</h2></div>
                    <?php if(strlen($data['listing'] -> reviews) == 0) : ?>
                        <section><h3>No Reviews</h3></section>
                    <?php endif; ?>
                    <?php if($data['listing'] -> reviews) : ?>
                        <ul class="reviews">
                            <?php foreach($data['listing'] -> reviews as $review) : ?>
                                <li>
                                    <section><h3><?php echo $review -> name ; ?></h3></section>
                                    <div class="rating-container">
                                        <div class="review-rating"></div>
                                        <section><h4><?php $date = new DateTime($review -> createdAt);
                                        echo $date -> format('m/d/y'); ?></h4></section>
                                        <section><h4><?php echo $review -> comment ; ?></h4></section>
                                    </div>
                                    <div class="line"></div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif ;?>
                </section>
            </section>
        </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>