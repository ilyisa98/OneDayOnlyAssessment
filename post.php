<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OneDayOnlyAssessment</title>
    <meta http-equiv="refresh" content="3; url=http://localhost:8080/OneDayOnly_Ilyaaz_Isaacs/index.php">

</head>
<body>

<?php

// connection to database
$con = mysqli_connect("127.0.0.1","root","");

// if connection fails
if(!$con){
    echo "Not connected to server";
}

// if database is not selected
if(!mysqli_select_db($con,"signupusersdb")){
    echo "Database not selected";
}

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['emailaddress'];

$sql = "INSERT INTO users (first_name,last_name,email) VALUES ('$firstName' , '$lastName' , '$email')";

if (!mysqli_query($con,$sql)){
    echo "insert failed";
} else {
    echo "insert successful";
}


?>

<h2>Successfully Added</h2>
    
</body>
</html>