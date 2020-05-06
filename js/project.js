/*responsive navbar*/
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/* Canvas*/
var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
ctx.font = "30px Verdana";
// Create gradient
var gradient = ctx.createLinearGradient(0, 0, c.width, 0);
gradient.addColorStop("0", "red");
gradient.addColorStop("0.5", "pink");
gradient.addColorStop("1.0", "white");
// Fill with gradient
ctx.fillStyle = gradient;
ctx.fillText("Make your stay a wonderful stay at Cobh", 10, 90);

/* Email Validation */
function ValidateEmail(inputText) {
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (inputText.value.match(mailformat)) {
        document.contact.email.focus();
        return true;
    } else {
        alert("You have entered an invalid email address!");
        document.contact.email.focus();
        return false;
    }
}

/* Special Events */
function loadDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
                this.responseText;
        }
    };
    xhttp.open("GET", "specialevents.txt", true);
    xhttp.send();
}