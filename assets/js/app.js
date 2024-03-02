const menu = document.querySelector(".menu-hamburger");
const nav = document.querySelector(".nav-links");

menu.addEventListener('click', () => {
    nav.classList.toggle('mobile-menu');
    menu.classList.toggle("rot-hamburger-t");
    menu.classList.toggle("rot-hamburger-f");
});