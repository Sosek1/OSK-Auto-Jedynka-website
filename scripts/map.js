function initMap() {
    var location = {
        lat: 50.009790,
        lng: 19.874990
    };
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 15,
        center: location
    });
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
}