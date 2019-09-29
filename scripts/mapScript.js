window.onload = function() {
    document.querySelector("#polygonForm").onsubmit = validateForm;
}

// Script for map

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

// add draw controls to map
map.pm.addControls({
    position: 'topleft',
    drawMarker: false,
    drawPolyline: false,
    drawCircle: false,
    cutPolygon: false
});


map.on('pm:create', function(e) { //when polygon is drawn, run this function
    var polyFeature = L.featureGroup().addTo(map); // create featureGroup and add newly drawn polygon to group
    polyFeature.addLayer(e.layer) //add as layer to map
    var data = polyFeature.toGeoJSON(); // convert to geoJSON
    stringJSON = JSON.stringify(data); // convert geoJSON object to strong
    //var convertedData = 'text/json;charset=utf-8,' + encodeURIComponent(JSON.stringify(data)); // necessary?
    var geojson = document.querySelector("#geojson");
    geojson.value = stringJSON;
    document.querySelector("#polygon-notice").innerHTML = "<p>Polygon Finished Drawing! </p>"
    // var turfPoly = turf.polygon(data);
    // // console.log(turfPoly);
    // var turfArea = turf.area(turfPoly);
    // // console.log(turfArea);
  });

map.pm.enableDraw('Polygon', { finishOn: 'dblclick' });



function validateForm(e) {
    e.preventDefault(); //prevent form from submitting
    var form = document.querySelector("#polygonForm");
    // Hide form after submit and show submitted data
    if (form.style.display === "none") {
        form.style.display = "block";
        
    } else {
        form.style.display = "none";
        var btn = document.createElement("button");
        btn.innerHTML = "Submit more data!"
        form.appendChild(btn);
    }
    var objXML = new XMLHttpRequest();
    var formdata = new FormData(document.getElementById("polygonForm"));

    objXML.addEventListener("load", function(e) { // add HTML at end of form
        document.getElementById("results").innerHTML = e.target.responseText;
    })
    objXML.addEventListener("error", function(e) { // error message if div doesn't update
        document.getElementById("results").innerHTML = "<p>Error occurred! Check again! </p>";
    })
    objXML.open("POST", "langData.php");
    objXML.send(formdata); // update formdata at the end of the form using AJAX
}


    

