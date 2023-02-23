let home = document.getElementById("home");
let vr = document.getElementById("vr");
let about = document.getElementById("about");
let contact = document.getElementById("contact");
let games = document.getElementById("games");
let header = document.querySelector(".header");

window.addEventListener("scroll", () => {
    let value = window.scrollY;
    if(value >= 1) {
        header.style.opacity = 0.2;
    }
    else if(value == 0){
        header.style.opacity = 1;
    }
})
