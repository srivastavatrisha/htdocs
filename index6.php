<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database="crud_operation";


// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sql = "SELECT S.no, name,  FROM students";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "sno: " . $row["sno"]. " Name: " . $row["name"]. " " . $row["phoneno"]. "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  include "index_crud.php";
?>