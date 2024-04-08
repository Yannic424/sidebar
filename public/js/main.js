
// SIDEBAR

const sidebarConnexion = document.querySelector(".sidebarConnexionOFF");
const sidebarInscription = document.querySelector(".sidebarInscriptionOFF");
const navbarShadow = document.querySelector("#navbar::after");

const btnConnexion = document.querySelector("#btnConnexion");
const btnAccueil = document.querySelector("#btnAccueil");
const btnInscription = document.querySelector("#btnInscription");


btnConnexion.addEventListener("click", function () {
    sidebarConnexion.classList.toggle("active");

    if (sidebarInscription.classList.contains("active")) {
        sidebarInscription.classList.remove("active");
    }


});

btnInscription.addEventListener("click", function () {
    sidebarInscription.classList.toggle("active");

    if (sidebarConnexion.classList.contains("active")) {
        sidebarConnexion.classList.remove("active");
    };
});