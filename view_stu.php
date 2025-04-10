<?php

include('insert.php');

$id= $_GET['id'];
//   echo $id;

$sql = "SELECT *  from  student2 where id='$id' limit 1";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view_stu.css">
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <h3>View student</h3>
            <div class="content">
                <div class="input-box">
                    <label for="name">First Name: </label>
                    <input type="text" name="fname" placeholder="Enter first name" value="<?php echo $user['fname'];?>">
                </div>
                <div class="input-box">
                    <label for="username">Last Name: </label>
                    <input type="text" name="lname" placeholder="Enter last name" value="<?php echo $user['lname'] ?? '' ;?>">
                </div>
                <div class="input-box">
                    <label for="email">Email: </label>
                    <input type="email" name="email" placeholder="Enter your valid email address"value="<?php echo $user['email'];?>"> >
                </div>
                <div class="input-box">
                    <label for="dateofbirth">Date of Birth: </label>
                    <input type="date" name="dob" placeholder="Enter your birth date" value="<?php echo $user['dob'];?>"> >
                </div>

        </form>
</body>
</html>