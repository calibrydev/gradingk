<?php 
session_start();
?><!DOCTYPE html>
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
        border-collapse: collapse;
    }
  
    th{
        background-color: lightblue;
        color: black;
      }
    table,th,td{
      padding: 6px;
      text-align: center;
        border: 1px solid black;
        border-collapse: collapse;
    }

  </style>
</head>
<body>
  <div class="sidenav">
    <a href="dashboardstudent.php">Dashboard</a>
    <a href="performance.php">Performance</a>
    <a href="unitsz.php">My units</a>
    <a href="fee.php">financials</a>
  </div>
  
  <div class="main-content">
    <h2>My Fees</h2>
    <h3> School Name </h3>
    <p>P.O.BOX 1223</p>
    <p>Nairobi</p>
    <p>Phone Number : +254721893210</p>
    <p>ADM: <?= $_SESSION['adm'] ?></p>
    <table>
              <tr>
                <th>Semesters</th>
                <th>fee</th>
              </tr>

   
        <?php 
    include('testconnection.php');
        $adm=$_SESSION['adm'];
        // $teacherz=$_POST['unitnamez'];
//         $sql="  SELECT sd.student_name, e.adm, e.unit
// FROM studentdetails sd
// JOIN enrolled e ON sd.admission_number = e.admission_number;
//         ";
        $sql="SELECT * FROM enrolled WHERE adm=:unitnamez ";
        // $sql="SELECT * FROM enrolled WHERE adm=:unitnamez INNER JOIN (SELECT * FROM studentdeatils WHERE adm=:unitnamez) ON enrolled.unitname=unitss.unitname ";
        $stmt=$conns->prepare($sql);
        $query=$conns->query("SELECT * FROM enrolled WHERE adm='$adm'  ");

        $num=$query->rowCount();
        // echo "total units done :".$num."<br>";
        // echo "charges = ksh 1000 per unit and 100 for notes :"."<br>";

        // echo"total fee to be paid is ksh : ".$num*1100;       
        $feeis=$num*1100;
        $data=[
        ':unitnamez'=>$adm
    ];
    $stmt->execute($data);
    $result=$stmt->fetchAll(PDO::FETCH_OBJ);
    if($result){
            ?>
         
          <tr>
            <td>  <?=$num;?> </td>
            <td> <?=$feeis;?> </td>
          </tr>









       
            <?php
}


?>

</table>







  </div>
</body>
</html>
