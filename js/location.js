/* Geolocation Code*/
function getArea() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else {
        $('#location').html('Geolocation is not supported by this browser.');
    }
}

function showLocation(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    $.ajax({
        type: 'POST',
        url: 'xml_writer.php',
        dataType: 'json',
        data: {
            xmldatastring: '<?xml version="1.0" encoding="UTF-8"?><GPS_location><Latitude>' + latitude + '</Latitude><Longitude>' + longitude + '</Longitude></GPS_Location>'
        },
        success: function(msg) { console.log("Success" + msg); },
        error: function(jqXhr, textStatus, errorThrown) { console.log("Fail" + errorThrown); }

    });
}