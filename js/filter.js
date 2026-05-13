const characterGrid = document.querySelector(".character-grid");
const filters = document.querySelectorAll(".filter-checkbox");

filters.forEach(filter => {
    filter.addEventListener("change", toggleFilter);
});

function toggleFilter() {
    const activeFilters = Array.from(filters).filter(filter => filter.checked);

    characterGrid.classList.toggle("filter-active", activeFilters.length > 0);

    filters.forEach(filter => {
        characterGrid.classList.toggle(filter.name, filter.checked);
    });

    const searchInput = document.getElementById("searchInput");

    // Permet de remettre à jour le compteur d'éléments affichés
    countCards();
}   
