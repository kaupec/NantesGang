var lat = 47.218371;
var lon = -1.553621;
var macarte = null;
var villes = {
    "Event1": { "lat": 47.216097, "lon": -1.549996 },
    "Event2": { "lat": 47.212587, "lon": -1.564703 },
    "Event3": { "lat": 47.206246, "lon": -1.564479 },
    "Event4": { "lat": 47.219422, "lon": -1.542592 }
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
    var marker = L.marker([lat, lon]).addTo(macarte);
}
window.onload = function () {
    initMap();
};

