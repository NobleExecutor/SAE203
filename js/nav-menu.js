document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("nav");
    const navToggle = document.querySelector(".nav-toggle");
    const navLinks = document.querySelector(".nav-links");

    if (!nav || !navToggle || !navLinks) {
        return;
    }

    navToggle.addEventListener("click", () => {
        const isOpen = nav.classList.toggle("nav-open");
        navToggle.setAttribute("aria-expanded", isOpen ? "true" : "false");
    });

    navLinks.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", () => {
            nav.classList.remove("nav-open");
            navToggle.setAttribute("aria-expanded", "false");
        });
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape") {
            nav.classList.remove("nav-open");
            navToggle.setAttribute("aria-expanded", "false");
        }
    });
});
