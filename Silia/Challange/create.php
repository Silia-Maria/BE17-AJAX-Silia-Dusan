<?php
$connect = mysqli_connect("localhost", "root", "", "ajax");

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$date = $_POST['date'];
$pass = $_POST['pass'];

$sql = "INSERT INTO users (fname, lname, email, date_of_birth, password) VALUES ('$fname', '$lname', '$email', '$date', '$pass')";

if (mysqli_query($connect, $sql)) {
    echo "Success";
}
