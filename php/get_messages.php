<?php

$DB_SERVER="lochnagar.abertay.ac.uk";
$DB_USERNAME="sql1905726";
$DB_PASSWORD="abertayrocks";
$DB_NAME="sql1905726";

// Create connection
$conn = new mysqli($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM messages ORDER BY post_date DESC LIMIT 9";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $i = 0;
    $messages = array("");
    while($row = $result->fetch_assoc()) {
        array_push($messages,$row["message"]);
        $i = $i + 1;
    }
    //print_r($messages);
    //echo "<br>";
    //echo $messages[5];
} else {
    echo "0 results";
}
$conn->close();
?>