//toggle dashboard menu
const dashPU = document.getElementById('dashboard-popup');
const dashMenu = document.getElementById('dashboard-menu');
const dashOverlay = document.getElementById('dashboard-overlay');
const sidebar = document.getElementById('sidebar-container');
const sidebarOBtn = document.getElementById('sidebar-open-btn');
const sidebarCBtn = document.getElementById('sidebar-close-btn');
const body = document.querySelector('body');

if(dashPU) {
    dashPU.addEventListener('click', () => {
        //close dashboard menu if open
        if(dashMenu.style.display === 'flex') {
            dashMenu.style.display = 'none';
            dashOverlay.style.display = 'none';
            body.style.overflowY = 'auto';
        //open dashboard menu
        }else {
            dashMenu.style.display = 'flex';
            dashOverlay.style.display = 'flex';
            body.style.overflowY = 'hidden';
        }
    });
    window.addEventListener('click', (e) => {
        if(e.target == dashOverlay) {
            dashMenu.style.display = 'none';
            dashOverlay.style.display = 'none';
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
    }else {
        //open sidebar
        sidebar.style.display = 'flex';
        body.style.overflowY = 'hidden';
        //close dashboard menu if sidebar is open
        if(dashPU) {
            dashPU.style.display = 'none';
            dashMenu.style.display = 'none';
            dashOverlay.style.display = 'none';
            body.style.overflowY = 'hidden';
        }
    }
});
sidebarCBtn.addEventListener('click', () => {
    sidebar.style.display = 'none';  
    body.style.overflowY = 'auto';
    if(dashPU) {
        dashPU.style.display = 'flex';
    }
});
window.addEventListener('click', (e) => {
    if(e.target == sidebar) {
        sidebar.style.display = 'none';
        body.style.overflowY = 'auto';
        if(dashPU) {
            dashPU.style.display = 'flex';
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