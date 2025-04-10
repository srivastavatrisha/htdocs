<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_management_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Sorry we failed to connect: " . mysqli_connect_error());
  }


//   $sql = "INSERT INTO student (name, email, mobile_no)
//   VALUES ('John Doe',  'john@example.com', 678900683)";
  
//   if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

  ?>