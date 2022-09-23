<?php

echo"yo bro";
$name=$_POST["name"];
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    echo "yay";
    
    $name=$_POST["name"];
    $mail=$_POST["mail"];
    $phone=$_POST["phone"];
    $fname=$_POST["fathername"];
    $obj=$_POST[" objective"];
    $chdiploma=$_POST["choosediploma"];
     $percentage10=$_POST["percentage10"];
     $school10=$_POST["school10"];
     $year10=$_POST["year10"];
     $percentage12=$_POST["percentage12"];
     $school12=$_POST["school"];
     $year12=$_POST["year12"];
     $perc_dip=$_POST["percentage_diploma"];
     $school_dip=$_POST["school_diploma"];
     $year_dip=$_POST["year_diploma"];
     $name_dip=$_POST["name_diploma"];
     $clgpercentage=$_POST["collegepercentage"];
     $college=$_POST["college"];
     $clgyear=$_POST["collegeyear"];
     $clgsem=$_POST["collegesem"];
     $clgcourse=$_POST["collegecourse"];
     $cname=$_POST["stcomapnyname"];
     $duration=$_POST["stduration"];
     $proj=$_POST["stproject"];
     $tech=$_POST["sttechnology"];
     $proj_finyear=$_POST["projectfinalyear"];
     $skill=$_POST["mandatoryskill"];
     $dob=$_POST["dob"];
     $landline=$_POST["landline"];
     $alt=$_POST["otherno"];
     $nationality=$_POST["nationality"];
     $perm=$_POST["permanentaddress"];
     $cur=$_POST["currentaddress"];
        $sno= mysqli_insert_id($conn);
        //first page
        $sql="INSERT INTO `res`.`user` (`sno`, `name`, `email`, `phone`, `fname`, `obj`, `dt`) VALUES ('$sno','$name', '$mail', '$phone','$fname', '$obj', current_timestamp());";
        //second page
        if($chdiploma==0){
            //non diploma
            $sql1="INSERT INTO `res`.`nondip` (`sno`, `perc10`, `school10`, `year10`, `perc12`,`school12`,`year12`,`perc_clg`,`clg`, `clg_year`, `clg_sem`, `clgcourse`, `dt`) VALUES ('$sno','$percentage10', '$school10', '$year10','$percentage12','$school12', '$year12', '$clgpercentage', '$college', '$clgyear', '$clgsem', '$clgcourse',  current_timestamp());";  
        }
        elseif($chdiploma==1){
            //diploma
            $sql2="INSERT INTO `res`.`dip` (`sno`, `perc10`, `school10`, `year10`, `perc_dip`, `school_dip`,`year_dip`, `name_dip`, `perc_clg`, `clg`, `clg_year`,`clg_sem`, `clgcourse`, `dt`) VALUES ('$sno','$percentage10', '$school10', '$year10', '$percdip', '$school_dip', '$year_dip', '$name_dip', '$clgpercentage', '$college', '$clgyear', '$clgsem', '$clgcourse', current_timestamp());" ;
        }
        else{
            //default
            $sql3="INSERT INTO `res`.`nondip` (`sno`, `perc10`, `school10`, `year10`, `perc12`,`school12`,`year12`,`perc_clg`,`clg`, `clg_year`, `clg_sem`, `clgcourse`, `dt`) VALUES ('$sno','$percentage10', '$school10', '$year10','$percentage12','$school12', '$year12', '$clgpercentage', '$college', '$clgyear', '$clgsem', '$clgcourse',  current_timestamp());";  
            }
        //third page
        $sql4="INSERT INTO `res`.`training` (`sno`, `cname`, `duration`, `proj`, `tech`, `dt`) VALUES ('$sno','$cname', '$duration', '$proj','$tech', current_timestamp());";
        //fourth page
        $sql5="INSERT INTO `res`.`proj` (`sno`, `proj`, `dt`) VALUES ('$sno','$proj_finyear', current_timestamp());";
        //sixth page(skills), fifth wont store in db 
        $sql6="INSERT INTO `res`.`skill` (`sno`, `skill`, `dt`) VALUES ('$sno','$skill', current_timestamp());";
        //8th page(aoi), no storing 7th
        $sql7="INSERT INTO `res`.`personal` (`sno`, `dob`, `landline`, `alt`, `nationality`, `perm`, `cur`, `dt`) VALUES ('$sno','$dob', '$landline','$alt', '$nationality', '$perm', '$cur',$current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "yay";
        }
    
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> well </h1>
</body>
</html>        
