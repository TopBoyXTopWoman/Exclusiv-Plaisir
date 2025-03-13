document.addEventListener("DOMContentLoaded", function () {
    let slides = document.querySelectorAll(".slide");
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove("active");
            if (i === index) {
                slide.classList.add("active");
            }
        });
    }
    

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Afficher la première image au chargement
    showSlide(currentSlide);

    // Changer d'image toutes les 3 secondes
    setInterval(nextSlide, 3000);
    // Définir la fonction toggleMenu
function toggleMenu() {
    const menu = document.getElementById("menu");
    menu.classList.toggle("visible");
}

// Attacher l'événement de clic au bouton du menu
const menuButton = document.getElementById("menu-button");

if (menuButton) {
    menuButton.addEventListener("click", toggleMenu);
}

});
