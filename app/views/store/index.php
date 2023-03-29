<?php require APPROOT . '/views/includes/head.php'; ?>

    <section class="banner">
        <?php if($data['banners']) : ?>
            <?php foreach($data['banners'] as $banner) : ?>
                <div><img src="<?php echo URLROOT; ?>/<?php echo $banner -> image;?>" alt="<?php echo $banner -> image_description; ?>"></div>
                <section class="text">
                    <h1><?php echo $banner -> text; ?></h1>
                </section>
            <?php endforeach; ?>
        <?php endif; ?>
    </section>
    <section class="listings-container">
        <section><h2>All Listings</h2></section>
        <section class="listings-gender-container">
            <section class="listings-header"><h3>Men's</h3></section>
            <ul class="listings">
                <% mListings.forEach(listing => {%>
                    <li>
                        <a href="/listing/<%= listing.slug %>" target="_blank" class="listing">                        
                            <div class="listing-img">
                                <img src="<?php echo URLROOT; ?>/<%= listing.image_main %>" alt="<%= listing.name %>">
                            </div> 
                            <section class="listing-name">
                                <h4><%= listing.name %></h4> 
                            </section>
                            <div class="listing-rating"></div>
                            <div class="listing-price">
                                <p>$<%= listing.price %></p>
                            </div>
                        </a>
                    </li>
                <% }); %>
            </ul>
        </section>
        <section class="listings-gender-container">
            <section class="listings-header"><h3>Women's</h3></section>
            <ul class="listings">
                <% wListings.forEach(listing => {%>
                    <li>
                        <div class="listing">                        
                            <a href="/listing/<%= listing.slug %>" target="_blank">
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<%= listing.image_main %>" alt="<%= listing.name %>">
                                </div>                              
                            </a>
                            <section class="listing-name">
                                <h4><%= listing.name %></h4> 
                            </section>
                            <div class="listing-rating"></div>
                            <div class="listing-price">
                                <p>$<%= listing.price %></p>
                            </div>
                        </div>
                    </li>
                <% }); %>
            </ul>
        </section>
        <section class="listings-gender-container">
            <section class="listings-header"><h3>Unisex</h3></section>
            <ul class="listings">
                <% uListings.forEach(listing => {%>
                    <li>
                        <div class="listing">                        
                            <a href="/listing/<%= listing.slug %>" target="_blank">
                                <div class="listing-img">
                                    <img src="<?php echo URLROOT; ?>/<%= listing.image_main %>" alt="<%= listing.name %>">
                                </div>                              
                            </a>
                            <section class="listing-name">
                                <h4><%= listing.name %></h4> 
                            </section>
                            <div class="listing-rating"></div>
                            <div class="listing-price">
                                <p>$<%= listing.price %></p>
                            </div>
                        </div>
                    </li>
                <% }); %>
            </ul>
        </section>
    </section>

<?php require APPROOT . '/views/includes/footer.php'; ?>