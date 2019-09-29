window.onload = function() {
    objXML = new XMLHttpRequest();
    objXML.addEventListener("load", function(e) {
        var polygons = JSON.parse(e.target.responseText);
        mapShow(polygons);
    });
    objXML.addEventListener("error", function(e){
        document.querySelector("#listContainer").innerHTML = "<h4>Error parsing JSON! Check again!  </h4>"
    });

    objXML.open("GET", "retrievePoly.php");
    objXML.send();
}

function mapShow(polygondata) {
    for (var i = 0; i < polygondata.length; i++) {
        var json = JSON.parse(polygondata[i].polygon_json);
        var popup = 
        "<strong>Language: </strong> " + polygondata[i].language + "<br>" + "<strong>Certainty: </strong> " + polygondata[i].certainty + "<br>" + "<strong>Comments: </strong> "
        + polygondata[i].comments + "<br>" + "<strong>Submitted Date/Time: </strong> " + polygondata[i].submit_datetime;
        L.geoJSON(json).addTo(map).bindPopup(popup);
    }
};


// define basemap layers 
var topoLayer = L.esri.basemapLayer('Topographic');
var satellite = L.esri.basemapLayer('Imagery');
var streets = L.esri.basemapLayer('Streets');

// leaflet map object with initial parameters
var map = L.map('map', {
    center: [38.9718, -77.0916],
    zoom: 8,
    layers: [topoLayer]
});

// basemap control
var basemaps = {
    "Topographic": topoLayer,
    "Streets": streets,
    "Imagery": satellite
};

// add basemaps to map
L.control.layers(basemaps).addTo(map);
