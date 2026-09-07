const episodesList = document.querySelector(".episodes-list");
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
        episodesList.classList.add("filter-active");
    }
    else {
        episodesList.classList.remove("filter-active");
    }

    filters.forEach(filter => {
        if (filter.checked) {
            episodesList.classList.add(filter.name);
        }
        else {
            episodesList.classList.remove(filter.name);
        }
    });

    // Permet de remettre à jour le compteur d'éléments affichés
    countCardsEp();
}