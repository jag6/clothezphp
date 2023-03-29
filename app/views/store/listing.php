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
    <link rel="shortcut icon" href="/images/" type="image/x-icon">
    <!-- Canonical URL-->
    <link rel="canonical" href="https://clothezrfw.online/listing/<?php echo $data['listing'] -> slug; ?>">
    <!-- Metadata -->
    <meta property="og:locale" content="en_US"/>
    <meta name="description" content="<?php echo $data['listing'] -> description; ?>">
    <!-- Twitter Metadata -->
    <meta name="twitter:title" content="<?php echo $data['listing'] -> name; ?>">
    <meta name="twitter:description" content="<?php echo $data['listing'] -> description; ?>">
    <meta name="twitter:image" content="https://clothezrfw.online/images/<?php echo $data['listing'] -> image; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Other Social Media Metadata -->
    <meta property="og:title" content="<?php echo $data['listing'] -> name; ?>">
    <meta property="og:description" content="<?php echo $data['listing'] -> description; ?>">
    <meta property="og:image" content="https://clothezrfw.online/images/<?php echo $data['listing'] -> image; ?>">
    <meta property="og:url" content="https://clothezrfw.online/listing/<?php echo $data['listing'] -> slug; ?>">
    <meta property="og:site_name" content="Clothez">
    <!-- Scripts -->
    <script src="<?php echo URLROOT; ?>/scripts/main.js" defer></script>   
</head>
<body id="body">
    <?php APPROOT . '/views/includes/header.php'; ?>
    <main>
        <?php APPROOT . '/views/includes/sidebar.php'; ?>
        <section class="listing-container">
            <section class="details">
                <div class="img-info">
                    <div class="details-img">
                        <img class="listing-img" src="/images/<?php echo $data['listing'] -> image_main; ?>" alt="<?php echo $data['listing'] -> name; ?>">
                    </div>
                    <div class="details-info">
                        <ul>
                            <li>
                                <h1 class="listing-name"><?php echo $data['listing'] -> name; ?></h1>
                            </li>
                            <li class="listing-rating"></li>
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
                        <li>
                        Price: $<?php echo $data['listing'] -> price; ?>
                        </li>
                        <li>
                        Status: <?php echo $data['listing'] -> count_in_stock > 0 ? `<span class="success">In Stock</span>`:
                        `<span class="error">Unavailable</span>`; ?>
                        </li>
                        <li>
                            <a id="add-to-cart-btn" class="fw primary bold" href="/cart">ADD TO CART</a>
                        </li>
                        <li>
                            <a id="add-to-fav-btn" class="fw primary bold">ADD TO FAVORITES</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="reviews-container" class="reviews-container">
                <section id="review-box" class="form-container"></section>
                <section class="all-reviews">
                    <div class="reviews-header"><h2>Reviews</h2></div>
                    <?php if($data['listing'] -> reviews.length == 0) : ;?>
                        <section><h3>No Reviews</h3></section>
                    <?php endif; ?>
                    <ul class="reviews">
                        <?php if($reviews) : ;?>
                            <?php foreach($data['reviews'] as $review) ; ?>
                                <li>
                                    <section><h3><?php echo $review -> name ; ?></h3></section>
                                    <div class="rating-container">
                                        <div class="review-rating"></div>
                                        <section><h4><?php echo $review -> createdAt.substring(0, 10) ; ?></h4></section>
                                    
                                        <section><h4><?php echo $review -> comment ; ?></h4></section>
                                    </div>
                                    <div class="line"></div>
                                </li>
                        <?php endif ;?>
                    </ul>
                </section>
            </section>
        </section>

<?php APPROOT . '/views/includes/footer.php'; ?>