              
<?php
include('insert.php');
//   if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//   }
  
//   $sql = "INSERT INTO student (name, email, mobile_no)
//   VALUES ('John Doe',  'john@example.com', 678900683)";
  
//   if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }

$fname = $_POST['fname'];
$uname= $_POST['uname'];
$email = $_POST['email'];
$phone_no = $_POST['phone_no'];
$cname =  $_POST['cname'];
$dob = $_POST['dob'];
$password = $_POST['password'];
$gender = $_POST['gender'];


echo $fname;
echo $uname;
echo $email;
echo $phone_no;
echo $cname;
echo $dob;
echo $password;
echo $gender;

$sql = "INSERT into student2(fname, uname, email, phone_no, cname, dob,  password, gender) VALUES('$fname', '$uname', '$email', '$phone_no', '$cname', '$dob',  '$password', '$gender')";

// $sql = "INSERT INTO student2 (name, mobile_no, email, created_at, updated_by)
// VALUES ('John Doe', 678934092,  'john@gmail.com', 10/09/2023, 'Vaibhav Mishra')";

// $sql = "INSERT INTO student2(name, mobile_no, email, created_at, updated_by) VALUES('Nikhil Sharma', 786547839, 'nikhil@gmail.com', 22/09/2024, 'Meenakshi')";

// $sql = "INSERT INTO student2(name, mobile_no, email, created_at, updated_by) VALUES ('Kajal Singh', 890763384, 'kajal@gmail.com',  23/09/2024, 'Aayush Singh')";

// $sql = "INSERT INTO student2(name, mobile_no, email, created_at, updated_by) VALUES('Trisha Srivastava', 6386676234, 'srivastavatrisha914@gmail.com', 22/09/2024, 'Divya Saxena')";

// $sql = "INSERT INTO student2(name, mobile_no, email, created_at, updated_by) VALUES('Shivani', 89007723, 'shivani03#gmail.com', 22/08/2024, 'Ankita')";

// $sql = "INSERT INTO student2(name, mobile_no, email, created_at, updated_by) VALUES('Shivam', 897001245, 'shivam@gmail.com', 12/09/2024, 'Aman')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $result = mysqli_query($mysqli, "INSERT into student values('', '$name', '$email', '$phoneno', '$cname')");
// if($result){
//     header ("location:student_insert.php");
// }
// else{
//     echo "Failed";
// }

// // Check connection

// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


?>
