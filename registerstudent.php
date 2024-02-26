<?php

    include('testconnection.php');
    if(isset($_POST['Register'])){
        $sqx="select * from studentdetails ORDER BY adm DESC LIMIT 1"; 
        $exec=$conns->prepare($sqx);
          $exec->execute();
         $lastie=$exec->fetch(PDO::FETCH_OBJ);
         if($lastie){

             $lastadm=substr($lastie->adm,-4);
             $newadm=$lastadm+1;
             echo $newadm.'<br>';
             $string='MC';
             $current_year = date('Y');
             $year = substr($current_year, -2);
             $admNew= $string.$year.$newadm;
            //echo $admNew;

            }
            else{
                $newadm=3300; 
                $string='MC';
                $current_year = date('Y');
                $year = substr($current_year, -2);
                $admNew= $string.$year.$newadm;    
            }







        $adm=$admNew;
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $address=$_POST['address'];
        $password=$_POST['password'];
        $cpassword=$_POST['name'];
        $satelite=$_POST['satelite'];
        $level=$_POST['level'];
        $semester=$_POST['semester'];
        $sql="INSERT INTO `studentdetails`(`adm`,`email`,`password`,`name`,`address`,`phone`,`satelite`,`level`,`semester`) VALUES (:adm,:email,:password,:cpassword,:address,:phone,:satelite,:level,:semester)";
        // adm	email	password	cpassword	address	phone	satelite	level	 
        $stmt=$conns->prepare($sql);
        $stmt->execute(['email'=>$email,'adm'=>$adm,'satelite'=>$satelite,'level'=>$level,'cpassword'=>$cpassword,'address'=>$address,'phone'=>$phone,'password'=>$password,'semester'=>$semester]); 
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
        form input{
            width: 50%;
            margin-bottom: 10px;
            padding: 10px;
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
        <a href="performanceadmin.php">Performance</a>
        <a href="feeadmin.php">financials</a>
        <a href="enrollstudent.php">Enroll student</a>
        <a href="registerstudent.php">Register Student</a>
        <a href="registerteacher.php">register teacher</a>
        <a href="addclasses.php">Add classes</a>
        <a href="studentssee.php">see students</a>






        
    </div>

    <div class="main-content">
        <h2> Register Students </h2>
     


            <form action="registerstudent.php" method="post">
            <input type="email"  name="email" placeholder="email">
            <input type="text" name="name" placeholder="name">
            <input type="password" name="password" placeholder="password">
            <input type="text" name="address" id="" placeholder="address">
            <input type="text" name="phone" placeholder="phone">
            <input type="text" name="satelite" placeholder="satelite">
            <input type="text" name="level" placeholder="level">
            <input type="text" name="semester" placeholder="semester">

            <input type="submit" name="Register" value="Register">

        </form>

    </div>
</body>

</html>