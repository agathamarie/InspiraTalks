// script apra o navbar
document.addEventListener("DOMContentLoaded", function () {
    let navBar = document.getElementById("navBar");
    let buttonMenu = document.getElementById("buttonMenu");

    // Verifica se tem a preferência no localstorage
    if (localStorage.getItem("menuState") === "open") {
        navBar.classList.remove("minimized");
    } else {
        navBar.classList.add("minimized");
    }

    // função de click no botão menu
    buttonMenu.addEventListener("click", function () {
        navBar.classList.toggle("minimized");

        // salva no localstorage se estava aberto ou nao
        if (navBar.classList.contains("minimized")) {
            localStorage.setItem("menuState", "closed");
        } else {
            localStorage.setItem("menuState", "open");
        }
    });
});