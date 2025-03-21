document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.querySelector(".hamburger");
    const navbar = document.querySelector(".navbar");

    hamburger.addEventListener("click", function () {
        navbar.classList.toggle("active");
        hamburger.classList.toggle("active");
    });

    document.addEventListener("click", function (event) {
        if (!navbar.contains(event.target) && !hamburger.contains(event.target)) {
            navbar.classList.remove("active");
            hamburger.classList.remove("active");
        }
    });
});

document.getElementById('hamburgero').addEventListener('click', function() {
    const aboutContainer = document.getElementById('about-container');
    aboutContainer.classList.toggle('slide-in');
});