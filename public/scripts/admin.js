const getUrl = location.href;
const apiUrl = 'http://localhost/clothez' || 'https://clothezrfw.online';

const dashboard = document.querySelector('.dashboard-link');
const ordersList = document.querySelector('.orders-list-link');
const usersList = document.querySelector('.users-list-link');
const listingsList = document.querySelector('.listings-list-link');
const bannersList = document.querySelector('.banners-list-link');
const profile = document.querySelector('.profile-link');

if(getUrl == `${apiUrl}/admin`){
    dashboard.classList.add('selected');
}else if(getUrl == `${apiUrl}/admin/order-list`){
    ordersList.classList.add('selected');
}else if(getUrl == `${apiUrl}/admin/user-list`){
    usersList.classList.add('selected');
}else if(getUrl == `${apiUrl}/admin/listings-list`){
    listingsList.classList.add('selected');
}else if(getUrl == `${apiUrl}/admin/banners-list`){
    bannersList.classList.add('selected');
}else if(getUrl == `${apiUrl}/admin/profile`){
    profile.classList.add('selected');
}


//open and close create ... container
if(document.querySelector('#create-btn')) {
    const createListingBtn = document.getElementById('create-btn');
    const containerOverlay = document.getElementById('container-overlay');
    const closeListingCont = document.querySelector('.admin-form-close-btn');
    const body = document.querySelector('body');
        
    createListingBtn.addEventListener('click', () => {
        containerOverlay.style.display = 'flex';
        body.style.overflowY = 'hidden';
    });

    closeListingCont.addEventListener('click', () => {
        containerOverlay.style.display = 'none';
        body.style.overflowY = 'auto';
    });
}