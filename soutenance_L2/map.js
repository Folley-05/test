

var lat = document.getElementById('lat').value;
var lon = document.getElementById('lon').value;
var nom = document.getElementById('nom').value;

var latitude=3.821385;
var longitude=11.517094;
    if(navigator.geolocation)
    {
        
    
  
    function success(position) {
      latitude  = position.coords.latitude;
      longitude = position.coords.longitude;
    }
  
    function error() {
      alert("echec de la localisation");
    }
      //navigator.geolocation.getCurrentPosition(success, error);
    }



function initMap()
{
    // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
    carte = L.map('carte').setView([lat, lon], 16);
    // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
        // Il est toujours bien de laisser le lien vers la source des données
        attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
        minZoom: 4, 
        maxZoom: 20
    }).addTo(carte);
    dist=Math.acos(Math.sin(latitude)*Math.sin(lat)+Math.cos(latitude)*Math.cos(lat)*Math.cos(longitude-lon))*250.71;
    dist=dist*100;
    dist=Math.round(dist);
    dist=dist/100;
    marker0=L.marker([latitude, longitude]).addTo(carte);
    marker0.bindPopup("<b>vous</b>").openPopup();
    marker=L.marker([lat, lon]).addTo(carte);
    marker.bindPopup("<b> "+nom+" </b><br> "+dist+"km à vol d'oiseau").openPopup();
    cercle = L.circle([lat, lon], {
        color: 'red',
        fillColor: '#f03',
        fillOpacity: 0.5,
        radius: 50
    }).addTo(carte);
    
// create a red polyline from an array of LatLng points
var latlngs = [
    [latitude, longitude],
    [lat, lon]
];


 polygone = L.polygon(latlngs, {color: 'blue'}).addTo(carte);
// zoom the map to the polyline
carte.fitBounds(polygone.getBounds());




ACOS(SIN(RADIANS(B2))*SIN(RADIANS(B3))+COS(RADIANS(B2))*COS(RADIANS(B3))*COS(RADIANS(C2-C3)))*6371.

}
window.onload = function(){
// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
initMap(); 

}