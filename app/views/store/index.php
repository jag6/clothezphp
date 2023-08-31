<?php require APPROOT . '/views/includes/head.php'; ?>

    <?php if($data['banners']) : ?>
        <section class="banner">
            <?php foreach($data['banners'] as $banner) : ?>
                <div><img src="<?php echo URLROOT; ?>/<?php echo $banner -> image;?>" alt="<?php echo $banner -> image_description; ?>"></div>
                <section class="text">
                    <h1><?php echo $banner -> text; ?></h1>
                </section>
            <?php endforeach; ?>
        </section>
    <?php endif; ?>
    <section class="listings-container">
        <section><h2>All Listings</h2></section>
        <section class="listings-gender-container">
            <section class="listings-header"><h3>Men's</h3></section>
            <?php if($data['mListings']) : ?>
                <ul class="listings">
                    <?php foreach($data['mListings'] as $listing) : ?>
                        <?php require APPROOT . '/views/includes/listingsList.php'; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
        <section class="listings-gender-container">
            <section class="listings-header"><h3>Women's</h3></section>
            <?php if($data['wListings']) : ?>
                <ul class="listings">
                    <?php foreach($data['wListings'] as $listing) : ?>
                        <?php require APPROOT . '/views/includes/listingsList.php'; ?>
                    <?php endforeach; ?>
                </ul>    
            <?php endif; ?>
        </section>
        <section class="listings-gender-container">
            <section class="listings-header"><h3>Unisex</h3></section>
            <?php if($data['uListings']) : ?>
                <ul class="listings">
                    <?php foreach($data['uListings'] as $listing) : ?>
                        <?php require APPROOT . '/views/includes/listingsList.php'; ?>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>