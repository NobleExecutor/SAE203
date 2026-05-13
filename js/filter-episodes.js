const episodesList = document.querySelector(".episodes-list");
const filters = document.querySelectorAll(".filter-checkbox");

filters.forEach(filter => {
    filter.addEventListener("change", toggleFilter);
});

function toggleFilter() {
    const activeFilters = Array.from(filters).filter(filter => filter.checked);

    episodesList.classList.toggle("filter-active", activeFilters.length > 0);

    filters.forEach(filter => {
        episodesList.classList.toggle(filter.value, filter.checked);
    });

    const searchInput = document.getElementById("searchInput");

    // Permet de remettre à jour le compteur d'éléments affichés
    if (searchInput) {
        searchInput.dispatchEvent(new Event("input"));
    }
}
