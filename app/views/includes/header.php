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
                <input type="search" name="q" id="q" placeholder="Search...">
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
            <input type="search" name="q" id="q" placeholder="Search...">
            <button type="submit" aria-label="Search Button"><i class="fa fa-search"></i></button>
        </form>
    </div>
</header>