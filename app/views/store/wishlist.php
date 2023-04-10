<?php require APPROOT . '/views/includes/head.php'; ?>

<section class="cart-container wishlist-container">
    <section class="cart-list">
        <section class="cart-header">
            <section><h1>Wishlist</h2></section>
            <section><h2>Price</h2></section>
        </section>
        <ul id="cart-list-container" class="cart-list-container">
            <?php if(!$data['wishlist_listings']) : ?>
                <h3><a class="link-span" href="<?php echo URLROOT; ?>">Wishlist is Empty. Click <span class="bold">HERE</span> to View Our Listings!</a></h3>
            <?php else : ?>          
                <?php foreach($data['wishlist_listings'] as $listing) : ?>
                    <li>
                        <ul class="item-details">
                            <li>
                                <a href="<?php echo URLROOT; ?>/listing/<?php echo $listing['slug']; ?>">
                                    <div class="cart-img">
                                        <img src="<?php echo URLROOT; ?>/<?php echo $listing['image_main']; ?>" alt="<?php echo $listing['name']; ?>">
                                    </div>
                                </a>
                            </li>
                            <li class="cart-name">
                                <a href="<?php echo URLROOT; ?>/listing/<?php echo $listing['slug']; ?>"><?php echo $listing['name']; ?></a>
                            </li>
                            <li>
                                <form action="<?php echo URLROOT; ?>/wishlist/addToCart/<?php echo $listing['id']; ?>" method="post">
                                    <input type="hidden" name="id" value="<?php echo $listing['id']?>">
                                    <button aria-label="Add to Cart Button" type="submit" class="delete-btn">Add to Cart</button>
                                </form>
                                <form action="<?php echo URLROOT; ?>/wishlist/delete/<?php echo $listing['id']; ?>" method="post">
                                    <button aria-label="Delete from Wishlist Button" type="submit" name="<?php echo $listing['name']; ?>" class="wishlist-delete-btn delete-btn">Delete</button>
                                </form>    
                            </li>
                            <li class="cart-price">
                                $<?php echo $listing['price']; ?>
                            </li>
                        </ul>
                    </li>
                <?php endforeach ;?>
            <?php endif; ?>
        </ul>
    </section>
</section>

<?php require APPROOT . '/views/includes/footer.php'; ?>