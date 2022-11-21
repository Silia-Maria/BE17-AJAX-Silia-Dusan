<?php
$connect = mysqli_connect("localhost", "root", "", "ajax");

$searchText = $_GET['search'];
$sql = "SELECT * FROM users WHERE fname Like '$searchText%' OR lname Like '$searchText%'";

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) == 0) {
    echo "<tr><td colspan='4'>No Result</td></tr>";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
    <td>{$row["fname"]}</td>
    <td>{$row["lname"]}</td>
    <td>{$row["email"]}</td>
    <td>{$row["date_of_birth"]}</td>
</tr>";
    }
}
