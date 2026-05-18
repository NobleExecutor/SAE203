const search = document.getElementById("searchInput");
const characterCards = document.querySelectorAll(".character-card");
const cardNb = document.getElementById("currentCardNb");
let currentCardNb = characterCards.length;
cardNb.textContent = currentCardNb;

search.addEventListener("input", countCards);

function countCards() {
    // On récupère le contenu de la barre de recherche et on le converti en minuscule pour faciliter la comparaison
    let searchContent = search.value.toLowerCase();
    characterCards.forEach(card => {
        // On récupère le nom de la carte actuellement traité pour la comparer à la recherche en cours
        const name = card.querySelector(".card-name-en").textContent.toLowerCase();
        if (!name.includes(searchContent)) {
            card.style.display = "none";
        }
        else {
            card.style.display = "";
        }
    });

    // Pour afficher le nombre d'éléments actuellement sur l'écran en vérifiant si l'attribut CSS display à une valeur différente de none ou non
    currentCardNb = 0;
    characterCards.forEach(card => {
        if (card.style.display !== "none") {
            currentCardNb++;
        }
    });

    cardNb.textContent = currentCardNb;
}