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
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/headerFooter.css">
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
    <!-- Other Social Media Metadata -->
    <meta property="og:title" content="<?php echo $data['meta_title']; ?>">
    <meta property="og:description" content="<?php echo $data['meta_description']; ?>">
    <meta property="og:image" content="<?php echo URLROOT; ?>/<?php echo $data['meta_image']; ?>">
    <meta property="og:url" content="<?php echo URLROOT; ?><?php echo $data['meta_url']; ?>">
    <!-- Scripts -->
    <script src="<?php echo URLROOT; ?>/scripts/animate.js" defer></script>
    <script src="<?php echo URLROOT; ?>/scripts/main.js" defer></script>
</head>
<body>
    <?php require APPROOT . '/views/includes/header.php'; ?>
    <main>
        <?php require APPROOT . '/views/includes/sidebar.php'; ?>