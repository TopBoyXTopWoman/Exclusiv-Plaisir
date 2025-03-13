document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    if (menuToggle && navMenu) {
        menuToggle.addEventListener('click', function () {
            console.log("Menu Toggle Clicked!");

            navMenu.classList.toggle('active');
            menuToggle.classList.toggle('active'); // Animation du menu hamburger
        });
    }
});
