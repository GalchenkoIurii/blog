document.addEventListener("DOMContentLoaded", function() {
    document.querySelector('button.close-btn').addEventListener('click', () => {
        document.querySelector('.modal').style.display = 'none';
    });
});
