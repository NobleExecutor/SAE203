// On attend le chargement de la page
document.addEventListener("DOMContentLoaded", () => {
    const commentsBtn = document.querySelector(".comments-container-btn");
    const commentsContainer = document.querySelector(".comments-container");
    const commentsBtnSvg = document.getElementById("btnSvg");

    commentsBtn.addEventListener("click", openCloseComments);

    function openCloseComments() {
        commentsContainer.classList.toggle("opened");

        if (commentsContainer.classList.contains("opened")) {
            btnSvg.src = "assets/svg/cross.svg";
        }
        else {
            btnSvg.src = "assets/svg/message.svg";
        }
    }
});
