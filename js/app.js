let home = document.getElementById("home");
let vr = document.getElementById("vr");
let about = document.getElementById("about");
let contact = document.getElementById("contact");
let games = document.getElementById("games");
let header = document.querySelector(".header");
let progressbar = document.getElementById("progress-bar");
let totalHeight = document.body.scrollHeight - window.innerHeight;


window.addEventListener("scroll", () => {
    let value = window.scrollY;
    if(value >= 1) {
        header.style.opacity = 0.2;
    }
    else if(value == 0){
        header.style.opacity = 1;
    }
})

window.onscroll = function(){
    let progressHeight = (window.pageYOffset / totalHeight) * 100;
    progressbar.style.height = progressHeight + "%"
}


