let navLinks = document.getElementById("nav-links");
let removeImgClass = document.getElementsByClassName("img");
function hiddenMenu() {
    navLinks.style.right = "-200px";
}

function showMenu() {
    navLinks.style.right = "0";
}

let emailInput = document.getElementById("emailInput");
let subscribeBtn = document.getElementById("subscribeNow");

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

function removeClassImg(){
    removeImgClass.classList.remove("mystyle");

}