<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "school_management_system";

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn){
  die("Sorry we failed to connect: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Design</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="dash.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: flex;
        }

        .sidebar {
            position: sticky;
            top: 0;
            left: 0;
            bottom: 0;
            width: 110px;
            height: 100vh;
            padding: 0 1.7rem;
            color: #fff;
            overflow: hidden;
            transition: all 0.5s linear;
            background: rgba(113, 99, 186, 255);
        }

        .sidebar:hover {
            width: 240px;
            transition: 0.5s;
        }

        .logo {
            height: 80px;
            padding: 16px;
        }

        .menu {
            height: 88%;
            position: relative;
            list-style: none;
            padding: 0;
        }

        .menu li {
            padding: 1rem;
            margin: 8px 0;
            border-radius: 8px;
            transition: all 0.5s ease-in-out;
        }

        .menu li:hover,
        .active {
            background: #e0e0e058;
        }

        .menu a {
            color: #fff;
            font-size: 14px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .menu a span {
            overflow: hidden;
        }

        .menu a i {
            font-size: 1.2rem;
        }

        .logout {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        /* ****  main body section **** */
        .main--content {
            position: relative;
            background: #ebe9e9;
            width: 100%;
            padding: 1rem;
        }

        .header--wrapper img {
            width: 50px;
            height: 50px;
            cursor: pointer;
            border-radius: 50%;
        }

        .header--wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            background: #fff;
            border-radius: 10px;
            padding: 10px 2rem;
            margin-bottom: 1rem;
        }

        .header--title {
            color: rgba(113, 99, 186, 255);

        }

        .user--info {
            display: flex;
            align-items: center;
            gap: 1;
        }

        .search--box {
            background: rgb(237, 237, 237);
            border-radius: 15px;
            color: rgba(113, 99, 186, 255);
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 4px 12px;
        }

        .search--box input {
            background: transparent;
            padding: 10px;
        }

        .search--box i {
            font-size: 1.2rem;
            cursor: pointer;
            transition: all 0.5s ease-out;
        }

        .search--box i:hover {
            transform: scale(1.2);
        }

        /* **** card container **** */
        .card-container {
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
        }

        .card--wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .main--title {
            color: rgba(113, 99, 186, 255);
            padding-bottom: 10px;
            font-size: 15px;
        }

        .payment--card {
            background: rgb(229, 223, 223);
            border-radius: 10px;
            padding: 1.2rem;
            width: 290px;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: all 0.5s ease-in-out;
        }

        .payment--card:hover {
            transform: translateY(-5px);
        }

        .card--header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .amount {
            display: flex;
            flex-direction: column;
        }

        .title {
            font-size: 12px;
            font-weight: 200;
        }

        .amount--value {
            font-size: 24px;
            font-family: "Courier New", Courier, monospace;
            font-weight: 600;
        }

        .icon {
            color: #fff;
            padding: 1rem;
            height: 60px;
            width: 60px;
            text-align: center;
            border-radius: 50%;
            font-size: 1.5rem;
            justify-content: space-between;
            background: red;
        }


        .card-detail {
            font-size: 18px;
            color: #777777;
            letter-spacing: 2px;
            font-family: 'Courier New', Courier, monospace;
        }

        /* color css */
        .light-red {
            background: rgb(251, 233, 233);
        }

        .light-purple {
            background: rgb(254, 226, 254);
        }

        .light-green {
            background: rgb(235, 254, 235);
        }

        .light-blue {
            background: rgb(236, 236, 254);
        }

        .dark-red {
            background: green;
        }

        .dark-purple {
            background: purple;
        }

        .dark-green {
            background: green;
        }

        .dark-blue {
            background: blue;
        }

        /* **** tabular section **** */
        .tabular--wrapper {
            background: #fff;
            margin-top: 1rem;
            border-radius: 10px;
            padding: 2rem;
        }

        .table-container {
            width: 100%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background: rgba(113, 99, 186, 255);
            color: #fff;

        }

        th {
            padding: 15px;
            text-align: left;
        }

        tbody {
            background: #f2f2f2;
        }

        td {
            padding: 15px;
            font-size: 14px;
            color: #333;
        }

        tr:nth-child(even) {
            background: #fff;
        }

        tfoot {
            background: rgba(113, 99, 186, 255);
            font-weight: bold;
            color: #fff;
        }

        tfoot td {
            padding: 15px;
        }

        .table-container button {
            color: green;
            background: none;
            cursor: pointer;
        }
      
</style>
</head>

<body>
    <div class="sidebar">
        <div class="logo"> </div>
        <ul class="menu">
            <li class="active">
                <a href="/project2/dashboard.php"><i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fas fa-user"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li>
                <a href="/project2/student.php"><i class="fa-solid fa-user-pen"></i>
                    <span>Students</span>
                </a>
            </li>
            <li>
                <a href="/project2/employee.php"><i class="fa-solid fa-user-tie"></i>
            <span>Employee</span>
            </a>
            </li>
            <li>
                <a href="#"><i class="fas fa-briefcase"></i>
                    <span>Careers</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fas fa-question-circle"></i>
                    <span>FAQ</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="logout">
                <a href="#"><i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Student</span><br>
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <div class="search--box">
                    <i class="fa-solid fa-search"></i>
                    <input type="text" placeholder="Search" />
                </div><br>
                <img src="./trisha.png" width="70px" height="70px" alt="">
            </div>
        </div>

                  
        <div class="tabular--wrapper">
        <div class="table--container">
        <a href="/project2/student_registration.php"><div class="student">
         <button type="button" class="add btn btn-primary">Add Student</button>
        </div>
        </a>
            <table class="table">
            <h3 align="left">Student Data</h3>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">fname</th>
                    <th scope="col">uname</th>
                    <th scope="col">email</th>
                    <th scope="col">phone_no</th>
                    <th scope="col">cname</th>
                    <th scope="col">dob</th>
                    <th scope="col">password</th>
                    <th scope="col">gender</th>
                    <th scope="col">created_at</th>
                    <th scope="col">updated_by</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>

                <?php
                      $sql = "SELECT * FROM student2";
                      $result = mysqli_query($conn, $sql);
                      
                      while($row = mysqli_fetch_assoc($result)){ ?>
                      <tr>
                      <th scope='row'><?php echo $row['id'] ?> </th>
                      <td><?php echo  $row['fname']?></td>
                      <td><?php echo $row['uname']?></td>
                      <td><?php echo $row['email']?></td>
                      <td><?php echo $row['phone_no']?></td>
                      <td><?php echo $row['cname']?></td>
                      <td><?php echo $row['dob']?></td>
                      <td><?php echo $row['password']?></td>
                      <td><?php echo $row['gender']?></td>
                      <td><?php echo $row['created_at']?> </td>
                      <td><?php echo $row['updated_by'] ?> </td>
                     <td> 
                     <a type='button' href="edit_student.php?id=<?php echo $row['id'] ?>" class='edit btn btn-primary'>Edit</a> 
                    <a typw='button' href="view_stu.php?id=<?php echo $row['id'] ?>" class='view btn btn-primary'>View</a>
                    <a type='button' class='del btn btn-primary'>Delete</a>
                    </td>
                     </tr>
                     <?php
                     }

                     ?>
                    
                
            </tbody>
        </table>
        </div>
        </div>



    </div>
    </div>

</body>
</html>