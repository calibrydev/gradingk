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
        <h2> Enroll Students </h2>
            <p>select a satelite,level and semester to enroll students into a class</p>
     













            <form action="enrollstudent.php" method="post">
            <input type="text" name="satelite" placeholder="satelite">
            <input type="text" name="level" placeholder="level">


            <input type="submit" name="fetch" value="fetch">

        </form>
     

    </form>
    
  <form action="enrollstudent.php" method="post" id="rgz">           
            <!-- <table method="post"  action>
            <tr>
                <th>Units</th>
            </tr> -->
                <table>
                    <tr>
                        <th>adm</th>
                          <th>level</th>
                        <th>satelite</th>
                    </tr>
<?php       
    include('testconnection.php');
    if(isset($_POST['fetch'])){
       $level=$_POST['level'];
    //    $sem=$_POST['sem'];
       $satelite=$_POST['satelite'];
       $sql="SELECT * FROM studentdetails WHERE level=:level   && satelite=:satelite ";
       $stmt=$conns->prepare($sql);
       $data=[
        ':level' => $level,
        ':satelite'=>$satelite
       ];
       $stmt->execute($data);
       $unitsArray=array();
       $result=$stmt->fetchAll(PDO::FETCH_OBJ);
       if($result){
        while($resultRow=$stmt->fetch()){
           array_push($unitsArray,$resultRow);
           echo "Unit Number : ".$row->unitname."<br>"; 
        }
            // array_push($unitsArray,$row);
        foreach($result as $row ){
?>  
<tr>
    <td><?=$row->adm;?> </td>
    <td><?=$row->level;?> </td>
    <td><?=$row->satelite;?> </td>

</tr>

<input type="text" name="unit[]" value="<?=$row->adm;?>" hidden>

                
                <?php
        }
    }
}


?>

</table>
<select name="unite" id="">

<?php 
    include('testconnection.php');
    if(isset($_POST['fetch'])){
    $satelite=$_POST['satelite']; 
       $sql="SELECT * FROM classes where satelite=:satelite ";
       $stmt=$conns->prepare($sql);
        $data=[
        ':satelite' => $satelite,
        ];
       $stmt->execute($data);
       $result=$stmt->fetchAll(PDO::FETCH_OBJ);
       if($result){
        foreach($result as $row){
            ?>
                    <option value="<?=$row->unitname;?>"> <?=$row->unitname;?>    </option>
                
                <?php
        }
    }
}

?>
</select>

    <input type="submit" name="register" value="Enroll">
<!-- </table> -->

</form>




    </div>
</body>

</html>