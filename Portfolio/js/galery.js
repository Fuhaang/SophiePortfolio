cpt = 0;
function scrollTo(hash) {
    location.hash = "#" + hash;
}

function modifierSize(theId) {
    var myImg = document.getElementById(theId);
    var width = myImg.clientWidth;
    var grid = document.getElementById('try');
    if (cpt == 0) {
        grid.style.columns = 1 + " 200px";
        scrollTo(theId);
        cpt = 1;
    } else {
        grid.style.columns = 4 + " 200px";
        cpt = 0;
    }   
}