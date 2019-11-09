 <?php
$servername = "sql100.epizy.com";
$username = "epiz_24453910";
$password = "ZenonDaYan15";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
 <!--Aici incepe a doua secventa php-->
<?php
$sql = "SELECT * FROM `basic-users`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - email: ". $row["email"]. " " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 