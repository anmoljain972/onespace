<?php

global $name;
global $email;
global $phone;
global $onboarding;
global $room;
global $additional;

$servername = "localhost";
$username = "root";
$password = "root";
$database = "booking";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("" . mysqli_connect_error());
}


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $onboarding = $_POST['checkin'];
    $room = $_POST['roomtype'];
    $additional = $_POST['additionalrequests'];
}


$sql = "INSERT INTO details(name,email,phone_number,onboardingdate,roomtype,additional_requests) VALUES('$name', '$email', '$phone','$onboarding','$room','$additional')";

if (mysqli_query($conn, $sql)) {
    
}
else{
    die("". mysqli_error($conn));   
}

mysqli_close($conn);
?>