<?php

    include('testconnection.php');
    if(isset($_POST['create'])){

        $date=$_POST['date'];
        $satelite=$_POST['satelite'];
        $teacher=$_POST['teacher'];
        $unitname=$_POST['unitname'];
        $tid=$_POST['tid'];
        $unitcode=$_POST['unitcode'];
        $email=$_POST['email'];
        $department=$_POST['department'];
        $level=$_POST['level'];
        $credit=$_POST['credit'];
        $sem=$_POST['sem'];
        // id	adm	unitcode	mark	grade	

        $sql="INSERT INTO `classes`(`unitname`,`teacher`,`satelite`,`date`,`tid`,`credithours`,`unitcode`,`department`,`level`,`sem`,`email`) VALUES (:unitname,:teacher,:satelite,:date,:tid,:credithours,:unitcode,:department,:level,:sem,:email)";
        // adm	email	password	cpassword	address	phone	satelite	level	 
        $stmt=$conns->prepare($sql);
        $stmt->execute(['unitname'=>$unitname,'teacher'=>$teacher,'satelite'=>$satelite,'date'=>$date,'tid'=>$tid,':credithours'=>$credit,':unitcode'=>$unitcode,':department'=>$department,':level'=>$level,':sem'=>$sem,':email'=>$email]); 
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
           
        <form action="addclasses.php" method="post">
            <select name="teacher" id="">

                <?php 
          include('testconnection.php');
          $sql="SELECT * FROM teachers";
          $stmt=$conns->prepare($sql);
          $stmt->execute();
          $result=$stmt->fetchAll(PDO::FETCH_OBJ);
          if($result){
            while($resultRow=$stmt->fetch()){
               array_push($unitsArray,$resultRow);
               echo "Unit Number : ".$row->name."<br>"; 
            }
                // array_push($unitsArray,$row);
            foreach($result as $row){
    ?>

<option  > <?=$row->name;?>  </option>

<?php
}
}



          ?>
          </select>
            <input type="text" name="unitname" placeholder="unitname">
            <input type="text" name="unitcode" placeholder="unitcode">
                <input type="text" name="credit" placeholder="credithours">
            <input type="text" name="satelite"  placeholder="satelite">
            <input type="date" placeholder="date" name="date">
            <input type="text"  name="level" placeholder="level">
            <input type="text" name="sem" placeholder="sem">
            <input type="text" name="email" placeholder="email">
            <input type="text"  name="department" placeholder="department">
            <input type="text" name="tid" placeholder="tid" value="">


            <input type="submit" name="create" value="create">

        </form>
        




    </div>
</body>

</html>