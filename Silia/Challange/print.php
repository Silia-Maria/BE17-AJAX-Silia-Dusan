<?php
$connect = mysqli_connect("localhost", "root", "", "ajax");

$sql = "SELECT * FROM users";
$result = mysqli_query($connect, $sql);

$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row) {
    echo "<tr>
    <td>{$row["fname"]}</td>
    <td>{$row["lname"]}</td>
    <td>{$row["email"]}</td>
    <td>{$row["date_of_birth"]}</td>
</tr>";
}
