<?php
$link = mysqli_connect("localhost", "root", "Leo2803leo", "oop");
if ($link == false) {
    print("Error:" . mysqli_connect_error());
} else {
    print("Succeed");
}
$sql = "SELECT * FROM oop.authors";
if ($result = $link->query($sql)) {
    $rowsCount = $result->num_rows;
    echo "<table><tr><th>id</th><th>name</th><th>DateOfBirth</th><th>approved</th></tr>";
    foreach ($result as $row) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["DateOfBirth"] . "</td>";
        echo "<td>" . $row["approved"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $result->free();
} else {
    echo "Error: " . $link->error;
}