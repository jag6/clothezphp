<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata First -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title><?php echo $data['title']; ?> - Clothez</title>
    <!-- CSS + Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <?php 
        $root = URLROOT;
        if($data['css_other']){
            echo '<link rel="stylesheet" href="'.$root.'/css/'.$data['css_other'].'">';
        }
    ?>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo URLROOT ;?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo URLROOT ;?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo URLROOT ;?>/favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="<?php echo URLROOT; ?>/favicon/favicon.ico">
    <link rel="manifest" href="<?php echo URLROOT ;?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo URLROOT ;?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo URLROOT; ?><?php echo $data['meta_url']; ?>">
    <!-- Metadata -->
    <meta name="description" content="<?php echo $data['meta_description']; ?>">
    <meta name="format-detection" content="telephone=no" />
    <!-- Twitter Metadata -->
    <meta name="twitter:title" content="<?php echo $data['meta_title']; ?>">
    <meta name="twitter:description" content="<?php echo $data['meta_description']; ?>">
    <meta name="twitter:image" content="<?php echo URLROOT; ?>/<?php echo $data['meta_image']; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Other Social Media Metadata -->
    <meta property="og:title" content="<?php echo $data['meta_title']; ?>">
    <meta property="og:description" content="<?php echo $data['meta_description']; ?>">
    <meta property="og:image" content="<?php echo URLROOT; ?>/<?php echo $data['meta_image']; ?>">
    <meta property="og:url" content="<?php echo URLROOT; ?><?php echo $data['meta_url']; ?>">
    <meta property="og:site_name" content="Clothez">
    <!-- Scripts -->
    <script src="<?php echo URLROOT; ?>/scripts/animate.js" defer></script>
    <script src="<?php echo URLROOT; ?>/scripts/main.js" defer></script>
</head>
<body>
    <header>
        <nav class="nav">
            <a href="<?php echo URLROOT; ?>">
                <div class="brand">
                    <span><i class="fa-brands fa-cotton-bureau"></i></span>
                    <p>Clothez</p>
                </div>
            </a>
            <ul class="page-links">
                <li class="show-categories-nav">
                    <a href="<?php echo URLROOT; ?>/listings/mens">MEN</a>
                    <div class="categories-nav">
                        <ul>
                            <li><a href="<?php echo URLROOT; ?>/listings/mens#shirts">SHIRTS</a></li>
                            <li><a href="<?php echo URLROOT; ?>/listings/mens#pants">PANTS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="show-categories-nav"> 
                    <a href="<?php echo URLROOT; ?>/listings/womens">WOMEN</a>
                    <div class="categories-nav">
                        <ul>
                            <li><a href="<?php echo URLROOT; ?>/listings/womens#tops">TOPS</a></li>
                            <li><a href="<?php echo URLROOT; ?>/listings/womens#jackets">JACKETS</a></li>
                            <li><a href="<?php echo URLROOT; ?>/listings/womens#skirts">SKIRTS</a></li>
                            <li><a href="<?php echo URLROOT; ?>/listings/womens#pants">PANTS</a></li>
                            <li><a href="<?php echo URLROOT; ?>/listings/womens#shoes">SHOES</a></li>
                            <li><a href="<?php echo URLROOT; ?>/listings/womens#socks">SOCKS</a></li>
                        </ul>
                    </div>
                </li>
                <li class="show-categories-nav">
                    <a href="<?php echo URLROOT; ?>/listings/unisex">UNISEX</a>
                    <div class="categories-nav">
                        <ul>
                            <li><a href="<?php echo URLROOT; ?>/listings/unisex#pants">PANTS</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="search">
                <button type="button" aria-label="Sidebar Open Button" class="sidebar-open-btn">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
                <form action="<?php echo URLROOT; ?>/search" method="get" class="search-form">
                    <input type="search" name="q" id="q" placeholder="Search..." value="<?php if($form_data) : ?><?php echo $form_data['q']; ?><?php endif; ?>">
                    <button type="submit" aria-label="Search Button"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div id="header-other" class="header-other">
                <ul id="user-links" class='user-links'>
                    <?php if(isLoggedInAdmin()) : ?>
                        <li>
                            <a href='<?php echo URLROOT; ?>/admin'>
                                <div class='header-cf'>
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </a>
                        </li>
                    <?php elseif(isLoggedInUser()) : ?>
                        <li>
                            <a href='<?php echo URLROOT; ?>/users'>
                                <div class='header-cf'>
                                    <i class="fa-solid fa-user"></i>
                                </div>
                            </a>
                        </li>
                    <?php else : ?>
                        <li><a href='<?php echo URLROOT; ?>/register'>REGISTER</a></li>
                        <li><a href='<?php echo URLROOT; ?>/login'>LOGIN</a></li>
                    <?php endif; ?>
                    <li>
                        <a href='<?php echo URLROOT; ?>/wishlist'>
                            <div class='header-cf'>
                                <i class="fa-solid fa-heart"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href='<?php echo URLROOT; ?>/cart'>
                            <div class='header-cf'>
                                <i class="fa-solid fa-cart-shopping"></i>
                                <p></p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="search-m">
            <button type="submit" aria-label="Sidebar Open Button" id="sidebar-open-btn" class="sidebar-open-btn">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
            <form action="<?php echo URLROOT; ?>/search" method="get" class="search-form">
                <input type="search" name="q" id="q" placeholder="Search..." value="<?php if($form_data) : ?><?php echo $form_data['q']; ?><?php endif; ?>">
                <button type="submit" aria-label="Search Button"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </header>
    <main>
        <?php require APPROOT . '/views/includes/sidebar.php'; ?>
        <section class="margin-top-1 ta-center"><h1>SEARCH</h1></section>
        <section class="listings-container">
            <?php if($data['categories']) : ?>
                <ul>
                    <?php foreach($data['categories'] as $category) :?>
                        <li><?php echo $category -> category; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['types']) : ?>
                <ul>
                    <?php foreach($data['types'] as $type) :?>
                        <li><?php echo $type -> type; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if($data['genders']) : ?>
                <ul>
                    <?php foreach($data['genders'] as $gender) :?>
                        <li><?php echo $gender -> gender; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

            <?php if($data['search_results']) : ?>
                <ul class="listings">
                    <?php foreach($data['search_results'] as $listing) : ?>
                        <?php require APPROOT . '/views/includes/listingsList.php'; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>