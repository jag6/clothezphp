<?php 
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<button aria-label="Admin Menu Open Button" id="admin-popup" class="admin-popup">
    <i class="fa-solid fa-plus"></i>
</button>
<div id="admin-overlay" class="admin-overlay"></div>
<div id="admin-menu" class="admin-menu">
    <ul>
        <li class="<?php echo $url != URLROOT . '/admin' ? '' : 'selected'; ?>">
            <a href="<?php echo URLROOT; ?>/admin"><span><i class="fa-solid fa-chart-simple"></i></span>Dashboard</a>
        </li> 
        <li class="<?php echo $url != URLROOT . '/admin/users-list' ? '' : 'selected'; ?>">
            <a href="<?php echo URLROOT; ?>/admin/users-list"><span><i class="fa-solid fa-users"></i></span>Users</a>
        </li> 
        <li class="<?php echo $url != URLROOT . '/admin/orders-list' ? '' : 'selected'; ?>">
            <a href="<?php echo URLROOT; ?>/admin/orders-list"><span><i class="fa-solid fa-list-ul"></i></span>Orders</a>
        </li> 
        <li class="<?php echo $url != URLROOT . '/admin/listings-list' ? '' : 'selected'; ?>">
            <a href="<?php echo URLROOT; ?>/admin/listings-list"><span><i class="fa-solid fa-box"></i></span>Listings</a>
        </li> 
        <li class="<?php echo $url != URLROOT . '/admin/banners-list' ? '' : 'selected'; ?>">
            <a href="<?php echo URLROOT; ?>/admin/banners-list"><span><i class="fa-solid fa-images"></i></span>Banners</a>
        </li> 
        <li class="<?php echo $url != URLROOT . '/admin/profile' ? '' : 'selected'; ?>">
            <a href="<?php echo URLROOT; ?>/admin/profile"><span><i class="fa-solid fa-address-card"></i></span>Profile</a>
        </li> 
    </ul>
</div>