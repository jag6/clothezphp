<button aria-label="Admin Menu Open Button" id="admin-popup" class="admin-popup">
    <i class="fa-solid fa-plus"></i>
</button>
<div id="admin-overlay" class="admin-overlay"></div>
<div id="admin-menu" class="admin-menu">
    <ul>
        <li class="dashboard-link">
            <a href="<?php echo URLROOT; ?>/admin"><span><i class="fa-solid fa-chart-simple"></i></span>Dashboard</a>
        </li> 
        <li class="users-list-link">
            <a href="<?php echo URLROOT; ?>/admin/users-list"><span><i class="fa-solid fa-users"></i></span>Users</a>
        </li> 
        <li class="orders-list-link">
            <a href="<?php echo URLROOT; ?>/admin/orders-list"><span><i class="fa-solid fa-list-ul"></i></span>Orders</a>
        </li> 
        <li class="listings-list-link">
            <a href="<?php echo URLROOT; ?>/admin/listings-list"><span><i class="fa-solid fa-box"></i></span>Listings</a>
        </li> 
        <li class="banners-list-link">
            <a href="<?php echo URLROOT; ?>/admin/banners-list"><span><i class="fa-solid fa-images"></i></span>Banners</a>
        </li> 
        <li class="profile-link">
            <a href="<?php echo URLROOT; ?>/admin/profile"><span><i class="fa-solid fa-address-card"></i></span>Profile</a>
        </li> 
    </ul>
</div>