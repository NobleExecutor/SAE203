/* Burger menu toggle */
document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.nav-burger');
    const body = document.body;
    const navLinks = document.querySelector('.nav-links');

    if (!burger || !navLinks) return;

    function closeMenu() {
        burger.classList.remove('open');
        navLinks.classList.remove('is-open');
        body.classList.remove('menu-open');
    }

    burger.addEventListener('click', (e) => {
        e.stopPropagation();
        const isOpen = navLinks.classList.toggle('is-open');
        burger.classList.toggle('open', isOpen);
        body.classList.toggle('menu-open', isOpen);
    });

    /* Close menu when a link is clicked */
    navLinks.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            closeMenu();
        });
    });

    /* Close menu on outside click */
    document.addEventListener('click', (e) => {
        if (navLinks.classList.contains('is-open') &&
            !navLinks.contains(e.target) &&
            !burger.contains(e.target)) {
            closeMenu();
        }
    });
});
