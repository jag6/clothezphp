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