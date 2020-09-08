/**

function darkTemplate(){
	var myTemplate = document.getElementById("myTemplate");
	myTemplate.setAttribute("href", "../stylecss/styleDark.css");
}
function darkTemplateChild(){
	var myTemplate = document.getElementById("myTemplate");
	myTemplate.setAttribute("href", "../../stylecss/styleDark.css");
}
function lightTemplate(){
	var myTemplate = document.getElementById("myTemplate");
	myTemplate.setAttribute("href", "../stylecss/style.css");
}
function lightTemplateChild(){
	var myTemplate = document.getElementById("myTemplate");
	myTemplate.setAttribute("href", "../../stylecss/style.css");
}


// Appel de la fonction pour passer au thème 2.
twChangeStyle("Thème 2");

function twChangeStyle(sTitre) {
  var i, a;
  // Boucle tout les élément « link » du document. 
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    // Si l’élément est à un attribut « rel » et qu’il contient un titre.
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      // Désactive la feuille de style
      a.disabled = true;
      // Active la feuille de style avec le bon titre.
      if(a.getAttribute("title") == sTitre) a.disabled = false;
    }
  }
}
**/

function insertParam(key, value) {
    key = encodeURIComponent(key);
    value = encodeURIComponent(value);

    // kvp looks like ['key1=value1', 'key2=value2', ...]
    var kvp = document.location.search.substr(1).split('&');
    let i=0;

    for(; i<kvp.length; i++){
        if (kvp[i].startsWith(key + '=')) {
            let pair = kvp[i].split('=');
            pair[1] = value;
            kvp[i] = pair.join('=');
            break;
        }
    }

    if(i >= kvp.length){
        kvp[kvp.length] = [key,value].join('=');
    }

    // can return this or...
    let params = kvp.join('&');

    // reload page with new params
    document.location.search = params;
}

function setActiveStyleSheet(title) {
  var i, a, main;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
      a.disabled = true;
      if(a.getAttribute("title") == title) a.disabled = false;
      insertParam('theme', title);
    }
  }
}
function getActiveStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title") && !a.disabled) return a.getAttribute("title");
  }
  return null;
}
function getPreferredStyleSheet() {
  var i, a;
  for(i=0; (a = document.getElementsByTagName("link")[i]); i++) {
    if(a.getAttribute("rel").indexOf("style") != -1
       && a.getAttribute("rel").indexOf("alt") == -1
       && a.getAttribute("title")
       ) return a.getAttribute("title");
  }
  return null;
}
function createCookie(name,value,days) {
  if (days) {
    var date = new Date();
    date.setTime(date.getTime()+(days*24*60*60*1000));
    var expires = "; expires="+date.toGMTString();
  }
  else expires = "";
  document.cookie = name+"="+value+expires+"; path=/";
}
function readCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
    var c = ca[i];
    while (c.charAt(0)==' ') c = c.substring(1,c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}
window.onload = function(e) {
  var cookie = readCookie("style");
  var title = cookie ? cookie : getPreferredStyleSheet();
  setActiveStyleSheet(title);
}
window.onunload = function(e) {
  var title = getActiveStyleSheet();
  createCookie("style", title, 365);
}
var cookie = readCookie("style");
var title = cookie ? cookie : getPreferredStyleSheet();
setActiveStyleSheet(title);




function urlQuerySet(a, b) {
  b = b || window.location.href;
  b = b.split('#');
  var h = (typeof b[1] === 'string') ? '#' + b[1] : '';
  b = b[0].split('?');
  if (b[1]) {
    var p = b[1];
    b = b[0] + '?';
    p = p.split('&');
    if (typeof p[0] === 'string') {
      var i, j, d;
      for (i = 0, j = p.length; i < j; i++){
        d = p[i].split('=');
        if (typeof d[0] === 'string' && typeof a[d[0]] === 'undefined') {
          a[d[0]] = d[1];
        }
      }
      for (i in a) {
        b += i + '=' + ((typeof a[i] === 'string') ? encodeURIComponent(a[i]) : true) + '&';
      }
      b = b.replace(/\&$/,'');
    }
  } else {
    b = b[0];
  }
  b += h;
  return b;
}


// renvoie : "https://www.domain.ext/?cle1=valeur1&cle2=valeur2"