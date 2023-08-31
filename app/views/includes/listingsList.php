<li>
    <a href="<?php echo URLROOT; ?>/listing/<?php echo $listing -> slug; ?>" target="_blank" class="listing">                        
        <div class="listing-img">
            <img src="<?php echo URLROOT; ?>/<?php echo $listing -> image_main; ?>" alt="<?php echo $listing -> name; ?>">
        </div> 
        <section class="listing-name">
            <h4><?php echo $listing -> name; ?></h4> 
        </section>
        <?php require APPROOT . '/views/includes/listingRating.php'; ?>
        <div class="listing-price">
            <p>$<?php echo $listing -> price; ?></p>
        </div>
    </a>
</li>