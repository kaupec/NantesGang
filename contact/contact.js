var lat = 47.2095997;
var lon = -1.5588176;
var macarte = null;
var villes = {
    "Event1": { "lat": 47.2071068, "lon": -1.5561408 }
};
function initMap() {
    macarte = L.map('map').setView([lat, lon], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 1,
        maxZoom: 20
    }).addTo(macarte);
    for (ville in villes) {
        var marker = L.marker([villes[ville].lat, villes[ville].lon]).addTo(macarte);
    }
}
window.onload = function () {
    initMap();
}



/***TOPBUTTON***/
window.onscroll = function() {scrollFunction();};

document.getElementById("myBtn").onclick = function() {topFunction();};

function scrollFunction() {
  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}