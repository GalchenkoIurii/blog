document.addEventListener("DOMContentLoaded", function() {
    const closeBtn = document.querySelector('button.close-btn'),
        modal = document.querySelector('.modal');

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.style.display = 'none';
        });
    }

});
