const characterGrid = document.querySelector(".character-grid");
const filters = document.querySelectorAll(".filter-checkbox");

filters.forEach(filter => {
    filter.addEventListener("change", toggleFilter);
});

function toggleFilter() {
    let activeFilters = [];
    filters.forEach(filter => {
        if (filter.checked) {
            activeFilters.push(filter);
        }
    });

    if (activeFilters.length > 0) {
        characterGrid.classList.add("filter-active");
    }
    else {
        characterGrid.classList.remove("filter-active");
    }

    filters.forEach(filter => {
        if (filter.checked) {
            characterGrid.classList.add(filter.name);
        }
        else {
            characterGrid.classList.remove(filter.name);
        }
    });

    // Permet de remettre à jour le compteur d'éléments affichés
    countCards();
}