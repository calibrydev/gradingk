<?php

    include('testconnection.php');
    if(isset($_POST['enroll'])){
     
        $tid=$_POST['tid'];
        $email=$_POST['email'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $password=$_POST['password'];
        $sql="INSERT INTO `teachers`(`tid`,`name`,`email`,`password`,`phone`) VALUES (:tid,:name,:email,:password,:phone)";
        // adm	email	password	cpassword	address	phone	satelite	level	 
        $stmt=$conns->prepare($sql);
        $stmt->execute(['tid'=>$tid,'name'=>$name,'email'=>$email,'password'=>$password,'phone'=>$phone]); 
        echo "success";

    }




?>
   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Side Nav</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .sidenav {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
        }

        .sidenav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: white;
            display: block;
        }

        .sidenav a:hover {
            background-color: #555;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
        }

        /* Responsive layout - when the screen is less than 600px wide, make the side navigation menu stack on top of each other instead of next to each other */
        @media screen and (max-width: 600px) {
            .sidenav {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidenav a {
                float: none;
                width: 100%;
            }
        }
        

table{
        width: 50%;
        margin-left: 0%;
        margin-top: 30px;
        margin-bottom: 30px;
        border-collapse: collapse;
    }
    table,th,td{
        border: 1px solid black;
        border-collapse: collapse;
    }
    #rgz{
        margin-left: 0%;
    }
    </style>
</head>

<body>
    <div class="sidenav">
     




        <a href="Adminnav.php">Dashboard</a>
        <a href="promote.php">Promote </a>
        <a href="performanceadmin.php">Performance</a>
        <a href="feeadmin.php">financials</a>
        <a href="enrollstudent.php">Enroll student</a>
        <a href="registerstudent.php">Register Student</a>
        <a href="registerteacher.php">register teacher</a>
        <a href="addclasses.php">Add classes</a>
        <a href="studentssee.php">see students</a>
    </div>

    <div class="main-content">
        <h2> Enroll Students </h2>
           
        <form action="registerteacher.php" method="post">
            <input type="text" name="name" placeholder="name">
            <input type="email" name="email" placeholder="email">
            <input type="text" name="tid" placeholder="TID">
            <input type="phone" name="phone" placeholder="0583933">
            <input type="password" name="password" placeholder="password">


            <input type="submit" name="enroll" value="add">

        </form>


    </div>
</body>

</html>