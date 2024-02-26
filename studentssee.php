<?php 
    include('testconnection.php');
    if(isset($_POST['promote'])){
        $sql="SELECT * FROM studentdetails  ";
        $stmt=$conns->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
        foreach($rows as $row){
            if($row->semester<6 && $row->semester>0){
                $new=  $row->semester-1;
            }
            else{
                $new= 6;
            }
        }
        $sqlz="UPDATE studentdetails SET semester=:new ";
        $stmts=$conns->prepare($sqlz);
        $stmts->execute(['new'=>$new]);
    }




?>



<?php

    include('testconnection.php');
    if(isset($_POST['register'])){

          
        foreach($_POST['unit'] as $adm){
            // $unit=$_POST['unit'];
            $unit=$_POST['unite'];
            $sqle="SELECT * FROM classes WHERE unitname=:unitname";
            $query=$conns->prepare($sqle);
            $query->bindValue(":unitname", $unit);
            $query->execute();
            $result=$query->fetch(PDO::FETCH_OBJ);
                    $teacher=$result->teacher;
                    echo "Teacher: ".$teacher;
            $status="pending";
            // $unitname="maths";
            // adm	email	password	cpassword	address	phone	satelite	level	 
            $sql="INSERT INTO `enrolled`(`adm`,`unitname`,`status`,`teacher`) VALUES (:adm,:unitname,:status,:teacher)";
            $stmt=$conns->prepare($sql);
            $stmt->execute(['adm'=>$adm,'unitname'=>$unit,'status'=>$status,'teacher'=>$teacher]); 
    
        }
     
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
    <div class="sidenav" style="">
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
        <h2>  Student Records </h2>
     

    <form action="studentssee.php" method="post">
    <p>Promote students to the next semester</p>
    <input type="submit" name="promote" value="Promote">
    </form>
       
    
    <table>
        <tr>
            <th>adm</th>
            <th>name</th>
            <th>satelite</th>
            <th>semester</th>
        </tr>
        <?php 
        $sql="SELECT * FROM studentdetails";
        $stmt=$conns->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAlL(PDO::FETCH_OBJ);
        if($result)
        {
            foreach($result as $row){
                    ?>
                    <tr>
                        <td><?=$row->adm;?></td>
                        <td><?=$row->name;?></td>
                        <td><?=$row->satelite;?></td>
                        <td><?=$row->semester;?></td>

                    </tr>

<?php
            }
        }
        
        
        
        
        
        
        
        ?>
    </table>


    </div>
</body>

</html>


















