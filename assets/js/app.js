const menu = document.querySelector(".menu-hamburger");
const nav = document.querySelector(".nav-links");

menu.addEventListener('click', () => {
    nav.classList.toggle('mobile-menu');
});