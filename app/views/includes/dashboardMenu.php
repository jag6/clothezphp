<button aria-label="Dashboard Menu Open Button" id="dashboard-popup" class="dashboard-popup">
    <i class="fa-solid fa-plus"></i>
</button>
<div id="dashboard-overlay" class="dashboard-overlay"></div>
<div id="dashboard-menu" class="dashboard-menu">
    <ul>
        <li class="dashboard-link">
            <a href="<?php echo URLROOT; ?>/admin/dashboard"><span><i class="fa-solid fa-chart-simple"></i></span>Overview</a>
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