<?php require APPROOT . '/views/includes/head.php'; ?>

<section class="cart-container">
    <section class="cart-list">
        <section class="cart-header">
            <section><h1>Shopping Cart</h2></section>
            <section><h2>Price</h2></section>
        </section>
        <ul id="cart-list-container" class="cart-list-container">
            <?php if(!$data['cart_listings']) : ?>
                <h3><a class="link-span" href="<?php echo URLROOT; ?>">Wishlist is Empty. Click <span class="bold">HERE</span> to Start Shopping!</a></h3>
            <?php else : ?>          
                <?php foreach($data['cart_listings'] as $listing) : ?>
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
                                Qty: 
                                <input type="text" name="quantity" inputmode="numeric" pattern="[0-9]*" class="<?php echo (!empty($form_data['quantity_error'])) ? 'invalid' : ''; ?>" value="<?php echo $listing['quantity']; ?>">
                                <form action="<?php echo URLROOT; ?>/cart/delete/<?php echo $listing['id']; ?>" method="post">
                                    <button aria-label="Delete from Cart Button" type="submit" name="<?php echo $listing['name']; ?>" class="cart-delete-btn delete-btn">
                                Delete</button>    
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
    <section class="cart-action">
        <section id="cart-subtotal">
            <h3>Subtotal: $100.00</h3>
        </section>
        <a href="" id="checkout-btn" class="primary fw">Proceed to Checkout</a>
        <a href="<?php echo URLROOT; ?>" id="continue-shopping-btn" class="primary fw">Continue Shopping</a>
    </section>
</section>

<?php require APPROOT . '/views/includes/footer.php'; ?>