<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Metadata First -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><%- listing.name -%> - Clothez</title>
    <!-- CSS + Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/headerFooter.css">
    <% if(css) { %>
        <%- css -%>
    <% } %>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/images/" type="image/x-icon">
    <!-- Canonical URL-->
    <link rel="canonical" href="https://clothezrfw.online/listing/<%- listing.slug -%>">
    <!-- Metadata -->
    <meta property="og:locale" content="en_US"/>
    <meta name="description" content="<%- listing.description -%>">
    <!-- Twitter Metadata -->
    <meta name="twitter:title" content="<%- listing.name -%>">
    <meta name="twitter:description" content="<%- listing.description -%>">
    <meta name="twitter:image" content="https://clothezrfw.online/images/<%- listing.image -%>">
    <meta name="twitter:card" content="summary_large_image">
    <!-- Other Social Media Metadata -->
    <meta property="og:title" content="<%- listing.name -%>">
    <meta property="og:description" content="<%- listing.description -%>">
    <meta property="og:image" content="https://clothezrfw.online/images/<%- listing.image -%>">
    <meta property="og:url" content="https://clothezrfw.online/listing/<%- listing.slug -%>">
    <meta property="og:site_name" content="Clothez">
    <!-- Scripts -->
    <script src="/scripts/main.js" defer></script>   
</head>
<body id="body">
    <%- include('../components/header') %>
    <main>
        <%- include('../components/sidebar') %>
        <section class="listing-container">
            <section class="details">
                <div class="img-info">
                    <div class="details-img">
                        <img class="listing-img" src="/images/<%- listing.image_main -%>" alt="<%- listing.name -%>">
                    </div>
                    <div class="details-info">
                        <ul>
                            <li>
                                <h1 class="listing-name"><%- listing.name -%></h1>
                            </li>
                            <li class="listing-rating"></li>
                            <li>
                                <h2 class="listing-price">Price: $<%- listing.price -%></h2>
                            </li>
                            <li>
                                <h2>Description:</h2>
                                <div>
                                    <p><%- listing.description -%></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="details-action">
                    <ul>
                        <li>
                        Price: $<%- listing.price -%>
                        </li>
                        <li>
                        Status: <%- listing.count_in_stock > 0 ? `<span class="success">In Stock</span>`:
                        `<span class="error">Unavailable</span>` -%>
                        </li>
                        <li>
                            <a id="add-to-cart-btn" class="fw primary bold" href="/cart">ADD TO CART</a>
                        </li>
                        <li>
                            <a id="add-to-fav-btn" class="fw primary bold">ADD TO FAVORITES</a>
                        </li>
                    </ul>
                </div>
            </section>
            <section id="reviews-container" class="reviews-container">
                <section id="review-box" class="form-container"></section>
                <section class="all-reviews">
                    <div class="reviews-header"><h2>Reviews</h2></div>
                    <%- listing.reviews.length === 0
                        ? `<section><h3>No Reviews</h3></section>`
                        : ''
                    -%>
                    <ul class="reviews">
                        <% listing.reviews.forEach(review => {%>}
                            <li>
                                <section><h3><%= review.name %></h3></section>
                                <div class="rating-container">
                                    <div class="review-rating"></div>
                                    <section><h4><%= review.createdAt.substring(0, 10) %></h4></section>
                                
                                    <section><h4><%= review.comment %></h4></section>
                                </div>
                                <div class="line"></div>
                            </li>
                        <% }); %>
                    </ul>
                </section>
            </section>
        </section>

<%- include('../components/footer'); %>