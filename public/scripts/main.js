//toggle admin menu
const adminPU = document.getElementById('admin-popup');
const adminMenu = document.getElementById('admin-menu');
const adminOverlay = document.getElementById('admin-overlay');
const sidebar = document.getElementById('sidebar-container');
const sidebarOBtn = document.getElementById('sidebar-open-btn');
const sidebarCBtn = document.getElementById('sidebar-close-btn');
const body = document.querySelector('body');

if(adminPU) {
    adminPU.addEventListener('click', () => {
        //close admin menu if open
        if(adminMenu.style.display === 'flex') {
            adminMenu.style.display = 'none';
            adminOverlay.style.display = 'none';
            body.style.overflowY = 'auto';
        //open admin menu
        }else {
            adminMenu.style.display = 'flex';
            adminOverlay.style.display = 'flex';
            body.style.overflowY = 'hidden';
        }
    });
    window.addEventListener('click', (e) => {
        if(e.target == adminOverlay) {
            adminMenu.style.display = 'none';
            adminOverlay.style.display = 'none';
            body.style.overflowY = 'auto';
        }
    });
}


//toggle sidebar
sidebarOBtn.addEventListener('click', () => {
    //close sidebar if open
    if(sidebar.style.display === 'flex') {
        sidebar.style.display = 'none';
        body.style.overflowY = 'auto';
        adminPU.style.display = 'flex';
    }else {
        //open sidebar
        sidebar.style.display = 'flex';
        body.style.overflowY = 'hidden';
        //close admin menu if sidebar is open
        if(adminPU) {
            adminPU.style.display = 'none';
            adminMenu.style.display = 'none';
            adminOverlay.style.display = 'none';
            body.style.overflowY = 'hidden';
        }
    }
});
sidebarCBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';  
    body.style.overflowY = 'auto';
    if(adminPU) {
        adminPU.style.display = 'flex';
    }
});
window.addEventListener('click', (e) => {
    if(e.target == sidebar) {
        sidebar.style.display = 'none';
        body.style.overflowY = 'auto';
        if(adminPU) {
            adminPU.style.display = 'flex';
        }
    }
});


//chatbox
if(document.querySelector('#open-popup')) {
    const openPU = document.getElementById('open-popup');
    const chatPU = document.getElementById('chat-popup');
    const closePU = document.getElementById('close-popup');

    openPU.addEventListener('click', () => {
        chatPU.style.display = 'flex';
        openPU.style.display = 'none';
    });
    closePU.addEventListener('click', () => {
        chatPU.style.display = 'none';
        openPU.style.display = 'flex';
    });
}


//wishlist
if(document.querySelector('.wishlist-delete-btn')) {
    //open delete window
    document.querySelectorAll('.wishlist-delete-btn').forEach((btn) => {
        btn.addEventListener('click', (e) => {
            const name = e.target.getAttribute('name');
            if(!confirm('Remove ' + name + ' from Wishlist?')){
                e.preventDefault();
            }
        });
    });
}

//cart
if(document.querySelector('.cart-delete-btn')) {
    //open delete window
    document.querySelectorAll('.cart-delete-btn').forEach((btn) => {
        btn.addEventListener('click', (e) => {
            const name = e.target.getAttribute('name');
            if(!confirm('Remove ' + name + ' from Cart?')){
                e.preventDefault();
            }
        });
    });
}