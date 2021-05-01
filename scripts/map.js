function initMap() {
    var location = {
        lat: 50.02049638086401,
        lng: 20.04963854094953
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