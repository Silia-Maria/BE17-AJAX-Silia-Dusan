<?php
$connect = mysqli_connect("localhost", "root", "", "ajax");

$emailSearch = $_GET['email'];
// inside [] is from index.html line 82 php?=email!

$sql = "SELECT * From users WHERE email = '$emailSearch'";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) == 1) {
    echo "Provided Email already in Use!";
}
