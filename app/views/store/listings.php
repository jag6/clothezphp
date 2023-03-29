<?php APPROOT . '/views/includes/head.php'; ?>

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
                                    <img src="/images/<?php echo $top -> image_main; ?>" alt="<?php echo $top -> name; ?>">
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
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $top -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="/images/<?php echo $top -> image_main; ?>" alt="<?php echo $top -> name; ?>">
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
            <?php if($data['jackets']) : ;?>
                <section id="jackets" class="listings-header"><h3>Jackets</h3></section>
                <ul class="listings">
                    <?php foreach($data['jackets'] as $jacket) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $jacket -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="/images/<?php echo $jacket -> image_main; ?>" alt="<?php echo $jacket -> name; ?>">
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
            <?php if($data['$skirts']) : ?>
                <section id="skirts" class="listings-header"><h3>Skirts</h3></section>
                <ul class="listings">
                    <?php foreach($data['skirts'] as $skirt) : ?>
                        <li>
                            <a href="<?php echo URLROOT; ?>/listing/<?php echo $skirt -> slug; ?>" target="_blank" class="listing">                        
                                <div class="listing-img">
                                    <img src="/images/<?php echo $skirt -> image_main; ?>" alt="<?php echo $skirt -> name; ?>">
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
                                    <img src="/images/<?php echo $pant -> image_main; ?>" alt="<?php echo $pant -> name; ?>">
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
                                    <img src="/images/<?php echo $shoe -> image_main; ?>" alt="<?php echo $shoe -> name; ?>">
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
                                    <img src="/images/<?php sock -> image_main; ?>" alt="<?php sock -> name; ?>">
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