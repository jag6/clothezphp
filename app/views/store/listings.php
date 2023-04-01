<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata First -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 
                $title = $data['title'];
                if($title == 'mens'){
                    echo $title = ucwords(str_replace('mens', 'Men\'s', $title));
                }elseif('womens'){
                    echo $title = ucwords(str_replace('womens', 'Women\'s', $title));
                }elseif('unisex'){
                    echo $title = ucwords(str_replace('unisex', 'Unisex', $title));
                }
            ?> (All Listings) - Clothez</title>
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
    <link rel="canonical" href="<?php echo URLROOT; ?>/listings/<?php echo $data['meta_url']; ?>">
    <!-- Metadata -->
    <meta property="og:locale" content="en_US"/>
    <meta name="description" content="<?php echo $data['meta_description']; ?>">
    <!-- Twitter Metadata -->
    <meta name="twitter:title" content="<?php 
                $title = $data['title'];
                if($title == 'mens'){
                    echo $title = ucwords(str_replace('mens', 'Men\'s', $title));
                }elseif('womens'){
                    echo $title = ucwords(str_replace('mens', 'Women\'s', $title));
                }elseif('unisex'){
                    echo $title = ucwords(str_replace('mens', 'Unisex', $title));
                }
            ?> (All Articles) - Clothez">
    <meta name="twitter:description" content="<?php echo $data['meta_description']; ?>">
    <meta name="twitter:image" content="<?php echo URLROOT; ?>/images/<?php echo $data['meta_image']; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Other Social Media Metadata -->
    <meta property="og:title" content="<?php 
                $title = $data['title'];
                if($title == 'mens'){
                    echo $title = ucwords(str_replace('mens', 'Men\'s', $title));
                }elseif('womens'){
                    echo $title = ucwords(str_replace('mens', 'Women\'s', $title));
                }elseif('unisex'){
                    echo $title = ucwords(str_replace('mens', 'Unisex', $title));
                }
            ?> (All Articles) - Clothez">
    <meta property="og:description" content="<?php echo $data['meta_description']; ?>">
    <meta property="og:image" content="<?php echo URLROOT; ?>/images/<?php echo $data['meta_image']; ?>">
    <meta property="og:url" content="<?php echo URLROOT; ?>/listings/<?php echo $data['meta_url']; ?>">
    <meta property="og:site_name" content="Clothez">
    <!-- Scripts -->
    <script src="<?php echo URLROOT; ?>/scripts/main.js" defer></script>   
</head>
<body>
    <?php require APPROOT . '/views/includes/header.php'; ?>
    <main>
    <?php require APPROOT . '/views/includes/sidebar.php'; ?>
    <section class="listings-container">
        <section><h2>Categories</h2></section>
        <section class="listings-gender-container">
            <?php if($data['tops']) : ;?>
                <section id="tops" class="listings-header"><h3>Tops</h3></section>
                <ul class="listings">
                    <?php foreach($data['tops'] as $top) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $top -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<?php echo $top -> image_main; ?>" alt="<?php echo $top -> name; ?>">
                                </div> 
                                <section class="listing-name">
                                    <h4><?php echo $top -> name; ?></h4> 
                                </section>
                                <div class="listing-rating"></div>
                                <div class="listing-price">
                                    <p>$<?php echo $top -> price; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['shirts']) : ;?>
                <section id="shirts" class="listings-header"><h3>Shirts</h3></section>
                <ul class="listings">
                    <?php foreach($data['shirts'] as $shirt) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $shirt -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<?php echo $shirt -> image_main; ?>" alt="<?php echo $shirt -> name; ?>">
                                </div> 
                                <section class="listing-name">
                                    <h4><?php echo $shirt -> name; ?></h4> 
                                </section>
                                <div class="listing-rating"></div>
                                <div class="listing-price">
                                    <p>$<?php echo $shirt -> price; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['jackets']) : ;?>
                <section id="jackets" class="listings-header"><h3>Jackets</h3></section>
                <ul class="listings">
                    <?php foreach($data['jackets'] as $jacket) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $jacket -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<?php echo $jacket -> image_main; ?>" alt="<?php echo $jacket -> name; ?>">
                                </div> 
                                <section class="listing-name">
                                    <h4><?php echo $jacket -> name; ?></h4> 
                                </section>
                                <div class="listing-rating"></div>
                                <div class="listing-price">
                                    <p>$<?php echo $jacket -> price; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['skirts']) : ?>
                <section id="skirts" class="listings-header"><h3>Skirts</h3></section>
                <ul class="listings">
                    <?php foreach($data['skirts'] as $skirt) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $skirt -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<?php echo $skirt -> image_main; ?>" alt="<?php echo $skirt -> name; ?>">
                                </div> 
                                <section class="listing-name">
                                    <h4><?php echo $skirt -> name; ?></h4> 
                                </section>
                                <div class="listing-rating"></div>
                                <div class="listing-price">
                                    <p>$<?php echo $skirt -> price; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['pants']) : ?>
                <section id="pants" class="listings-header"><h3>Pants</h3></section>
                <ul class="listings">
                    <?php foreach($data['pants'] as $pant) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $pant -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<?php echo $pant -> image_main; ?>" alt="<?php echo $pant -> name; ?>">
                                </div> 
                                <section class="listing-name">
                                    <h4><?php echo $pant -> name; ?></h4> 
                                </section>
                                <div class="listing-rating"></div>
                                <div class="listing-price">
                                    <p>$<?php echo $pant -> price; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['shoes']) : ?> 
                <section id="shoes" class="listings-header"><h3>Shoes</h3></section>
                <ul class="listings">
                    <?php foreach($data['shoes'] as $shoe) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $shoe -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<?php echo $shoe -> image_main; ?>" alt="<?php echo $shoe -> name; ?>">
                                </div> 
                                <section class="listing-name">
                                    <h4><?php echo $shoe -> name; ?></h4> 
                                </section>
                                <div class="listing-rating"></div>
                                <div class="listing-price">
                                    <p>$<?php echo $shoe -> price; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['socks']) : ?>
                <section id="socks" class="listings-header"><h3>Socks</h3></section>
                <ul class="listings">
                    <?php foreach($data['socks'] as $sock) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php sock -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<?php sock -> image_main; ?>" alt="<?php sock -> name; ?>">
                                </div> 
                                <section class="listing-name">
                                    <h4><?php sock -> name; ?></h4> 
                                </section>
                                <div class="listing-rating"></div>
                                <div class="listing-price">
                                    <p>$<?php sock -> price; ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </section>

<?php APPROOT . '/views/includes/footer.php'; ?>