// Map initialization 
var map = L.map('map').setView([14.0860746, 100.608406], 4);
var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
osm.addTo(map);

//var initialization
var marker, circle;

if (!navigator.geolocation) {
    console.log("Your browser doesn't support this feature!")}
if(!navigator.geolocation) {
    console.log("Your browser doesn't support geolocation feature!")
} else {
    setInterval(() => {
        navigator.geolocation.getCurrentPosition(getPosition)
    }, 5000);
}

function getPosition(position) {
var marker, circle;}

function getPosition(position){
    console.log(position)
    var lat = position.coords.latitude
    var long = position.coords.longitude
    var accuracy = position.coords.accuracy
    if (marker) {
        map.removeLayer(marker)
    }
    if(marker) {
        map.removeLayer(marker)
    }
    if (circle) {
        console.log(circle)
        map.removeLayer(circle)

    if(circle) {
        map.removeLayer(circle)
    }
}
    marker = L.marker([lat, long])
    circle = L.circle([lat, long], { radius: accuracy })
    markerGroup = L.featureGroup([marker, circle]).addTo(map)
    circle = L.circle([lat, long], {radius: accuracy})

    var featureGroup = L.featureGroup([marker, circle]).addTo(map)

    map.fitBounds(markerGroup.getBounds())
    map.fitBounds(featureGroup.getBounds())

    console.log("Your coordinate is: lat: " + lat + " long: " + long + " accuracy: " + accuracy)
    console.log("Your coordinate is: Lat: "+ lat +" Long: "+ long+ " Accuracy: "+ accuracy)
}
