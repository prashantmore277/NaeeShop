let navbar = document.getElementById("nav-links");
function hiddenMenu() {
    navbar.style.right = "-500px";
}

function showMenu() {
    navbar.style.right = "0";
}

let emailInput = document.getElementById("emailInput");
let subscribeBtn = document.getElementById("subscribeNow");

function ChangeEmailPosition() {
    subscribeBtn.style.display = "block";
    if (subscribeBtn.style.minWidth > 284 && subscribeBtn.style.maxWidth < 691) {
        subscribeBtn.style.fontSize = "0.5rem";
    } else {
        subscribeBtn.style.fontSize = "0.8rem";
    }
    subscribeBtn.style.marginLeft = "-2rem";
    emailInput.style.borderBottomLeftRadius = "0.1rem";
    emailInput.style.borderTopRightRadius = "0.1rem";
    emailInput.style.transition = "linear 1s all";


}

function ChangeSubcribeBtnPosition() {
    subscribeBtn.style.transition = "ease-in all 10s";
    subscribeBtn.style.display = "none";
}

