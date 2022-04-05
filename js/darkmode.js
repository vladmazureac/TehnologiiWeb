function darkmode(){
    let body = document.body;
    body.classList.toggle("dark-mode");

    let image = document.getElementById('icon');
    if (image.src.match("../img/index-menu.png")) {
        image.src = "../img/index-menu-dark.png";
    }
    else {
        image.src = "../img/index-menu.png";
    }
}