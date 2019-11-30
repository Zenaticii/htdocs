<?php
$links = '../';
include $links.'shortcuts/conn-database.php';
$sql = "SELECT * FROM basic_users";
$result = $conn->query($sql);
if ($result->num_rows > 0)
 {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - email: ". $row["email"]. " " . $row["password"] . "<br>";
    }
} else {
    echo "abracadabra";
}

$conn->close();
?> 