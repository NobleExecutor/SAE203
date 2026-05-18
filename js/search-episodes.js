const search = document.getElementById("searchInput");
const episodeRows = document.querySelectorAll(".episode-row");
const epNb = document.getElementById("currentEpNb");
let currentEpNb = episodeRows.length;
epNb.textContent = currentEpNb;

search.addEventListener("input", countCardsEp);

function countCardsEp() {
    // On récupère le contenu de la barre de recherche et on le converti en minuscule pour faciliter la comparaison
    let searchContent = search.value.toLowerCase();
    episodeRows.forEach(episode => {
        // On récupère le nom de la carte actuellement traité pour la comparer à la recherche en cours
        const name = episode.querySelector(".episode-title-en").textContent.toLowerCase();
        if (!name.includes(searchContent)) {
            episode.style.display = "none";
        }
        else {
            episode.style.display = "";
        }
    });

    // Pour afficher le nombre d'éléments actuellement sur l'écran en vérifiant si l'attribut CSS display à une valeur ou non
    currentEpNb = 0;
    episodeRows.forEach(episode => {
        if (episode.style.display !== "none") {
            currentEpNb++;
        }
    });

    epNb.textContent = currentEpNb;
}