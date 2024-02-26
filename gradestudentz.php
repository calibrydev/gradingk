<?php 
     include('testconnection.php');  //include the database connection
     if(isset($_POST['grade'])){
         $adm=$_POST['adm']; 
         $cat1=$_POST['cat1'];
         $cat2=$_POST['cat2'];
         $assn=$_POST['assn'];
         $exam=$_POST['exam'];
         $credit=2; 
         $hours=$_POST['hours'];
         $total=$cat1+$cat2+$assn+$exam;
         echo $total;
 //     // Function to calculate grade
     function calculateGrade($marks) {
         if ($marks >= 95&&$marks <=100) {
             return 'A';
         } elseif ($marks >= 89 && $marks <=94) {
             return 'A-';
         } elseif ($marks >= 84&&$marks <=89) {
             return 'B+';
         } elseif ($marks >=79 && $marks <=84) {
             return 'B';
         } 
         elseif ($marks >=75 && $marks <=79) {
             return 'B-';
         } 
         elseif ($marks >69 && $marks <=74) {
             return 'C+';
         } 
         elseif ($marks >64 && $marks <=69) {
             return 'C';
         } elseif ($marks >=59 && $marks <=65) {
             return 'C-';
         } elseif ($marks >=0 && $marks <=60) {
             return 'Fail';
         } 
         else {
             return 'Missing';
         }
     }
   $grade=  calculateGrade($total);
   if($grade=='A'){
       $points=4;
   }elseif($grade=='A-'){
       $points=3.7;
   }
   elseif($grade=="B+"){
    $points=3.3;
}  elseif($grade=="B"){
    $points=3;
}
   
   elseif($grade=="B-"){
       $points=2.6;
   }elseif($grade=="C+"){
       $points=2.3;
   }
    elseif($grade=="C"){
         $points=2;
    }
    elseif($grade=="C-"){
        $points=1.7;
    }
    elseif($grade=="D+"){
        $points=1.6;
    }
    elseif($grade=="D"){
        $points=1.3;
    }
    elseif($grade=="D-"){
        $points=1;
    }
    elseif($grade=="E"){
        $points=2.0;
    }
    elseif($grade=="F"){
        $points=0;
    }
    else{
        $points=0;
    }
    $class=$_POST['unit'];
    echo $class;
    $qpoints=$credit*$points;

     //   $sql="INSERT INTO $class (cat1,cat2,assn,exam,mark,grade) VALUES (:cat1,:cat2,:assn,:exam,:mark,:grade) WHERE id:id";
     $sqlz="INSERT INTO  gradess  (adm,unit,mark,grade,weight,credithours,qpoints)   VALUES(:adm,:unit,:mark,:grade,:weight,:credit,:qpoint) ";
   
     $dataz=[
        ':adm'=>$adm,
         ':unit'=>$class,
         ':mark'=>$total,
         ':grade'=>$grade,
         ':weight'=>$points,
         ':credit'=>$credit,
         ':qpoint'=>$qpoints
     ];
     
     // $sql="UPDATE  physics   SET class=:class,student_name=:student_name,student_adm=:adm,phone=:phone,email=:email,
     // satelite=:satelite,cat1 =:cat1,cat2=:cat2,assn=:assn,exam=:exam,mark=:mark,grade=:grade WHERE id:id" ;
     $stmtz=$conns->prepare($sqlz);
 
  
     $stmtz->execute($dataz);
 
 
     if($stmtz){
 
         echo "success";
     }
 
 
 
 
 
 
 
 
 
 
 }
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> GRade</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
            <form action="gradestudentz.php" method="post">
                <input type="text" value="<?=$_GET['adm'];?>" name="adm">
                <input type="text" value="<?=$_GET['unit'];?>" name="unit">
                <input type="text" value="<?=$_GET['hours'];?>" name="hours">

                <input type="text" placeholder="assn" name="assn">
                <input type="text" placeholder="cat1" name="cat1">
                <input type="text" placeholder="cat2" name="cat2">
    <input type="text" placeholder="exam" name="exam">
    <input type="submit" name="grade" value="grade">

            </form>
        
        <script src="" async defer></script>
    </body>
</html>