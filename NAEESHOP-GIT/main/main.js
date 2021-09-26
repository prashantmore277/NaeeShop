var navLinks = document.getElementById("nav-links");

function hiddenMenu() {
    navLinks.style.right = "-200px";
}

function showMenu() {
    navLinks.style.right = "0";
}

var emailInput = document.getElementById("emailInput");
var subscribeBtn = document.getElementById("subscribeNow");

function ChangeEmailPosition() {
    subscribeBtn.style.display = "block";
    subscribeBtn.style.marginLeft = "-2rem";
    emailInput.style.borderBottomLeftRadius= "0.1rem";
    emailInput.style.borderTopRightRadius= "0.1rem";
    emailInput.style.transition = "linear 1s all";

}

function ChangeSubcribeBtnPosition() {
    subscribeBtn.style.transition = "ease-in all 10s";
    subscribeBtn.style.display = "none";
}