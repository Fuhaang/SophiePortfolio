cpt = 0;
function scrollTo(hash) {
    location.hash = "#" + hash;
}

function modifierSize(theId) {
    var hauteur = window.innerHeight;
    var myImg = document.getElementById(theId);
    var width = myImg.style.width;
    var grid = document.getElementById('try');
    if (cpt == 0) {
        grid.style.columns = 2 + " 200px";
        scrollTo(theId);
        cpt = 1;
    } else {
        grid.style.columns = 4 + " 200px";
        cpt = 0;
    }   
}