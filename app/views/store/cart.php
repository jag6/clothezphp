<?php require APPROOT . '/views/includes/head.php'; ?>

<section class="cart-container">
    <section class="cart-list">
        <section class="cart-header">
            <section><h1>Shopping Cart</h2></section>
            <section><h2>Price</h2></section>
        </section>
        <ul id="cart-list-container" class="cart-list-container">
        <h3>Cart is Empty. Click <a href="/"><b>HERE</b></a> to Start Shopping!'</h3>
            <li>
                <ul class="item-details">
                    <li>
                        <a href="/listing/${item.slug}"}>
                            <div class="cart-img">
                                <img src="/images/${item.image_main}" alt="${item.name}">
                            </div>
                        </a>
                    </li>
                    <li class="cart-name">
                        <a href="/listing/${item.slug}"}>${item.name}</a>
                    </li>
                    <li>
                        Qty: 
                        <select class="qty-select" id="">
                            ${
                                [...Array(item.count_in_stock).keys()].map((x) => item.qty === x + 1
                                ? `<option selected value="${x + 1}">${x + 1}</option>`
                                : `<option value="${x + 1}">${x + 1}</option>`
                            )}
                        </select>
                        <button type="button" class="delete-btn" id="">
                        Delete</button>
                    </li>
                    <li class="cart-price">
                        $${item.price}
                    </li>
                </ul>
            </li>
        </ul>
    </section>
    <section class="cart-action">
        <section id="cart-subtotal"></section>
        <a href="" id="checkout-btn" class="primary fw">Proceed to Checkout</a>
        <a href="" id="continue-shopping-btn" class="primary fw">Continue Shopping</a>
    </section>
</section>

<?php require APPROOT . '/views/includes/footer.php'; ?>