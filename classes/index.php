 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vg";

// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
 <!--Aici incepe a doua secventa php-->
<?php
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