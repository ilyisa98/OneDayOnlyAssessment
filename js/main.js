// ajax request

function ajax_request(){

    // Create our XMLHttpRequest object
    var aR = new XMLHttpRequest();

    // data being displayed on : displayData.php
    var url = "displayData.php";

    // form variables
    var first_name = document.getElementById("first_name").value;
    var last_name = document.getElementById("last_name").value;
    var email = document.getElementById("email_address").value;

    // concatenated form data
    var data = "firstname=" + first_name + "lastname=" + last_name + "emailaddress=" + email;

    // post method
    aR.open("POST", url, true);

    // Set content type header information for sending url encoded variables in the request
    aR.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // Access the onreadystatechange event for the XMLHttpRequest object
    aR.onreadystatechange = function() {

    }

    // Send the data to PHP now... and wait for response to update the status div
    aR.send(data); // Actually execute the request

}
