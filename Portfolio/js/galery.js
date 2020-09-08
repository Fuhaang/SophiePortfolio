cpt = 0;
function scrollTo(hash) {
    location.hash = "#" + hash;
}

function modifierSize(theId) {
    if (cpt == 0) {
        upSize();
        scrollTo(theId);
        cpt = 1;
    } else {
        normalSize();
        cpt = 0;
    }
}

function upSize(){
    var id = "img";
    var nbrId = 1;
    var thisId = id + nbrId;
    var grid = document.getElementById('try');
    while(document.getElementById(thisId)){
        console.log(thisId);
        var myImg = document.getElementById(thisId);
        grid.style.columns = 1 + " 200px";
        myImg.style.height = window.innerHeight + "px";
        myImg.style.width = "auto";
        nbrId += 1;
        thisId = id + nbrId;
    }
}

function normalSize(){
    var id = "img";
    var nbrId = 1;
    var thisId = id + nbrId;
    var grid = document.getElementById('try');
    while(document.getElementById(thisId)){
        console.log(thisId);
        var myImg = document.getElementById(thisId);
        grid.style.columns = 4 + " 200px";
        myImg.style.width = "100%";
        myImg.style.height = "auto";
        nbrId += 1;
        thisId = id + nbrId;
    }
}