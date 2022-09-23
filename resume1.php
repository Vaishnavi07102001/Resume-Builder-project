<!-- Login -->


<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    include 'session_var.php';
    
    $name=$_POST["name"];
    $mail=$_POST["mail"];
    $phone=$_POST["phone"];
    $fname=$_POST["fathersname"];
    $obj=$_POST["objective"];
    $chdiploma=$_POST["choosediploma"];
     $percentage10=$_POST["percentage10"];
     $school10=$_POST["school10"];
     $year10=$_POST["year10"];
     $percentage12=$_POST["percentage12"];
     $school12=$_POST["school12"];
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
     $choosesave = $_POST["choose1"];
	 $sno= $_SESSION['user_id'];
	  
        
        if($choosesave == 1){  //if user selects save, insert in database
            
            //first page
        $sql="INSERT INTO `res`.`user` (`sno`, `name`, `email`, `phone`, `fname`, `obj`, `dt`) VALUES ('$sno','$name', '$mail', '$phone','$fname', '$obj', current_timestamp());";
        //second page
		$result = mysqli_query($conn, $sql);
        if($chdiploma==0){
            //non diploma
			$sql1="INSERT INTO `res`.`nondip`(`sno`, `perc10`, `school10`, `year10`, `perc12`, `school12`, `year12`, `perc_clg`, `clg`, `clg_year`, `clg_sem`, `clg_course`, `dt`) VALUES ('$sno','$percentage10','$school10','$year10','$percentage12','$school12','$year12','$clgpercentage','$college','$clgyear','$clgsem','$clgcourse',current_timestamp());";
			$result = mysqli_query($conn, $sql1);
		}	
        else{
            //diploma
            $sql1="INSERT INTO `res`.`dip` (`sno`, `perc10`, `school10`, `year10`, `perc_dip`, `school_dip`,`year_dip`, `name_dip`, `perc_clg`, `clg`, `clg_year`,`clg_sem`, `clgcourse`, `dt`) VALUES ('$sno','$percentage10', '$school10', '$year10', '$percdip', '$school_dip', '$year_dip', '$name_dip', '$clgpercentage', '$college', '$clgyear', '$clgsem', '$clgcourse', current_timestamp());";
			$result = mysqli_query($conn, $sql1);
        }
		
		
			
        //third page
        $sql="INSERT INTO `res`.`training` (`sno`, `cname`, `duration`, `proj`, `tech`, `dt`) VALUES ('$sno','$cname', '$duration', '$proj','$tech', current_timestamp());";
        $result = mysqli_query($conn, $sql);
		//fourth page
        $sql="INSERT INTO `res`.`proj` (`sno`, `proj`, `dt`) VALUES ('$sno','$proj_finyear', current_timestamp());";
        $result = mysqli_query($conn, $sql);
		//sixth page(skills), fifth wont store in db 
        $sql="INSERT INTO `res`.`skill` (`sno`, `skill`, `dt`) VALUES ('$sno','$skill', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        
		//8th page(aoi), no storing 7th
        $sql="INSERT INTO `res`.`personal` (`sno`, `dob`, `landline`, `alt`, `nationality`, `perm`, `cur`, `dt`) VALUES ('$sno','$dob', '$landline','$alt', '$nationality', '$perm', '$cur', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        }
        else if($choosesave==0){   //if the user selects update

            //first page
            $sql= "UPDATE `res`.`user` SET `name`='$name',`email`='$mail',`phone`='$phone',`fname`='$fname',`obj`='$obj',`dt`= current_timestamp() WHERE sno='" . $_SESSION['user_id'] ."'";
            $result = mysqli_query($conn, $sql);

            //second page
            if($chdiploma==0){

                    $sql="UPDATE `res`.`nondip` SET `perc10`='$percentage10',`school10`='$school10',`year10`='$year10',`perc12`='$percentage12',`school12`='$school12',`year12`='$year12',`perc_clg`='$clgpercentage',`clg`='$college',`clg_year`='$clgyear',`clg_sem`='$clgsem',`clg_course`='$clgcourse', `dt`=current_timestamp() WHERE sno='" . $_SESSION['user_id'] ."'";

                    $result = mysqli_query($conn, $sql);
            }
            else{

                    $sql="UPDATE `res`.`dip` SET `perc10`='$percentage10',`school10`='$school10',`year10`='$year10',`perc_dip`='$perc_dip',`school_dip`='$school_dip',`year_dip`='$year_dip',`name_dip`='$name_dip',`perc_clg`='$clgpercentage',`clg`='$college',`clg_year`='$clgyear',`clg_sem`='$clgsem',`clg_course`='$clgcourse', `dt`=current_timestamp() WHERE sno='".$_SESSION['user_id'] ."'";
                
                    $result = mysqli_query($conn, $sql);
            }

            //third page
            $sql="UPDATE `res`.`training` SET `cname`='$cname',`duration`='$duration',`proj`='$proj',`tech`='$tech',`dt`=current_timestamp() WHERE sno='" . $_SESSION['user_id'] ."'";
            $result = mysqli_query($conn, $sql);

            //foruth page
            $sql = "UPDATE `res`.`proj` SET `proj`='$proj', `dt`=current_timestamp() WHERE sno='" . $_SESSION['user_id'] ."'";
            $result = mysqli_query($conn, $sql);

            //skill page
            $sql = "UPDATE `res`.`skill` SET `skill`='$skill', `dt`=current_timestamp() WHERE sno='".$_SESSION['user_id'] ."'";
            $result = mysqli_query($conn, $sql);

            //personal page
            $sql = "UPDATE `res`.`personal` SET `dob`='$dob',`landline`='$landline',`alt`='$alt',`nationality`='$nationality',`perm`='$perm',`cur`='$cur',`dt`=current_timestamp() WHERE sno='" . $_SESSION['user_id'] ."'";
            $result = mysqli_query($conn, $sql);

        }   
        else{          //if the user selects delete 
            // $sql= "DELETE FROM `res`.`user` WHERE  sno='" . $_SESSION['user_id'] ."'";
            // $result = mysqli_query($conn, $sql);
        }

           //-------------------Fetching from USER Table: ----------------
    $query = "SELECT name, email, phone, fname, obj FROM `res`.`user` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error());
    $row = mysqli_fetch_array($result);
    @$_SESSION['name'] = $row['name'];
    @$_SESSION['email'] = $row['email'];
    @$_SESSION['phone'] = $row['phone'];
    @$_SESSION['fname'] = $row['fname'];
    @$_SESSION['obj'] = $row['obj'];

    //-------------------Fetching from DIP Table: ----------------
    $query = "SELECT perc10, school10, year10, perc_dip, school_dip, year_dip, name_dip, perc_clg, clg_year, clg_sem, clgcourse FROM `res`.`dip` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error());
    $row = mysqli_fetch_array($result);
    @$_SESSION['perc10'] = $row['perc10'];
    @$_SESSION['school10'] = $row['school10'];
    @$_SESSION['year10'] = $row['year10'];
    @$_SESSION['perc_dip'] = $row['perc_dip'];
    @$_SESSION['school_dip'] = $row['school_dip'];
    @$_SESSION['year_dip'] = $row['year_dip'];
    @$_SESSION['name_dip'] = $row['name_dip'];
    @$_SESSION['clg'] = $row['clg'];
    @$_SESSION['perc_clg'] = $row['perc_clg'];
    @$_SESSION['clg_year'] = $row['clg_year'];
    @$_SESSION['clg_sem'] = $row['clg_sem']; 
    @$_SESSION['clg_course'] = $row['clgcourse'];

		
    //-------------------Fetching from NON-DIP Table: ----------------
    $query = "SELECT perc10, school10, year10, perc12, school12, year12, perc_clg, clg, clg_year, clg_sem, clg_course FROM `res`.`nondip` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    @$_SESSION['perc10'] = $row['perc10'];
    @$_SESSION['school10'] = $row['school10'];
    @$_SESSION['year10'] = $row['year10'];
    @$_SESSION['perc12'] = $row['perc12'];
    @$_SESSION['school12'] = $row['school12'];
    @$_SESSION['year12'] = $row['year12'];
    @$_SESSION['perc_clg'] = $row['perc_clg'];
    @$_SESSION['clg'] = $row['clg'];
    @$_SESSION['clg_year'] = $row['clg_year'];
    @$_SESSION['clg_sem'] = $row['clg_sem']; 
    @$_SESSION['clg_course'] = $row['clg_course'];

    //-------------------Fetching from TRAINING Table: ----------------
    $query = "SELECT skill  FROM `res`.`skill` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));
    @$row = mysqli_fetch_array($result);
    @$_SESSION['skill'] = $row['skill'];

    //-------------------Fetching from training Table: ----------------
    $query = "SELECT cname, duration, proj, tech  FROM `res`.`training` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    @$_SESSION['cname'] = $row['cname'];
    @$_SESSION['duration'] = $row['duration'];
    @$_SESSION['tproj'] = $row['proj'];
    @$_SESSION['tech'] = $row['tech'];

    //-------------------Fetching from PROJECT Table: ----------------
    $query = "SELECT proj  FROM `res`.`proj` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));
    @$row = mysqli_fetch_array($result);
    @$_SESSION['proj'] = $row['proj'];

    //-------------------Fetching from PERSONAL Table: ----------------
    $query = "SELECT dob, landline, alt, nationality, perm  FROM `res`.`personal` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error());
    @$row = mysqli_fetch_array($result);
    @$_SESSION['dob'] = $row['dob'];
    @$_SESSION['landline'] = $row['landline'];
    @$_SESSION['alt'] = $row['alt'];
    @$_SESSION['nationality'] = $row['nationality'];
    @$_SESSION['perm'] = $row['perm']; 
    @$_SESSION['cur'] = $row['cur']; 

    
}

?>
           

		   <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="resume_<?php echo $_POST['TemplateList'];?>_stylesheet.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                print();
            });
        </script>
    </head>
    <body>
        <div id="main">
        <h1 id="name"><?php echo $_SESSION['name'];?></h1>
        </div>
            
        <div id="header"><?php echo $_SESSION['name']." | ".$_SESSION['email']." | ".$_SESSION['phone']
;?></div>
            <br>
        <div class="table">
        <h2 id="heading">Objective</h2>
            
                <p><?php echo $_SESSION['obj'];?></p>
        </div>
        </div>
        
        <div class="table" >
        <h2 id="heading">Education</h2> 
                <table>
                    <tr>
                        <th >Year</th>
                        <th>Institute</th>
                        <th>Course</th>
                        <th>Percentage</th>
                    </tr>
                    <tr>
                        <td class="year"><?php echo $_SESSION['clg_year']
?></td>
                        <td class="institute"><?php echo $_SESSION['clg'];?></td>
                        <td class="course"><?php echo $_SESSION['clg_course'];?></td>
                        <td class="percent"><?php echo $_SESSION['perc_clg']; 
                                                if(!empty($_SESSION['clg_sem']))
                                                {echo " (till ".$_SESSION['clg_sem']." semester )";}
                                            ?></td>
                    </tr>
                    <tr>
                        <?php
                        if($_POST['choosediploma']==1){
                            echo '<td class="year">'.$_SESSION['year_dip']
.'</td>';
                            echo '<td class="institute">'.$_SESSION['school_dip'].'</td>';
                            echo '<td class="course">'.'Diploma'.'</td>';
                            echo '<td class="percent">'.$_SESSION['perc_dip'].'</td>';
                        }
                        else if($_POST['choosediploma']==0){
                            echo '<td class="year">'.$_SESSION['year12'].'</td>';
                            echo '<td class="institute">'.$_SESSION['school12'].'</td>';
                            echo '<td class="course">'.'12th'.'</td>';
                            echo '<td class="percent">'.$_SESSION['perc12'].'</td>';
                        }
                        ?>
                    </tr>
                    <tr>
                        <td class="year"><?php echo $_SESSION['year10'];?></td>
                        <td class="institute"><?php echo $_SESSION['school10'];?></td>
                        <td class="course">10th</td>
                        <td class="percent"><?php echo $_SESSION['perc10'];?></td>
                    </tr>
                </table>
        </div>      
        <div class="table">
        <h2 id="heading">Training</h2>
            
                <ul>
                    <li>
                        Company Name :<?php echo $_SESSION['cname'];?>
                    </li>
                    <li>
                        Duration :<?php echo $_SESSION['duration'];?>
                    </li>
                    <li>
                        Project Undertaken :<?php echo $_SESSION['proj'];?>
                    </li>
                    <li>
                        Technology Used :<?php echo $_SESSION['tech'];?>
                    </li>
                </ul>
        </div>
        <div class="table">
        <h2 id="heading">Projects Undertaken</h2>
                <ul>
                    <?php 
                    echo "<li>".$_SESSION['proj']."</li>";
                $i=1;
                    while(isset($_POST['project'.$i]))
                    {
                        if(!empty($_POST['project'.$i]))
                        {
                            echo "<li>".$_POST['project'.$i]."</li>";
                        }
                    $i++;
                    }
                ?>
                </ul>
        </div>  
        <div class="table">
        <h2 id="heading">Achievements</h2>
                <ul>
                    <?php 
                $i=1;
                    while(isset($_POST['achievement'.$i]))
                    {
                        if(!empty($_POST['achievement'.$i]))
                        {
                            echo "<li>".$_POST['achievement'.$i]."</li>";
                        }
                    $i++;
                    }
                ?>
                </ul>
        </div>  
        <div class="table">
        <h2 id="heading">Skill Set</h2>
                <ul>
                    
                <?php 
                
                    echo "<li>".$_SESSION['skill']."</li>";
                $i=1;
                    while(isset($_POST['skill'.$i]))
                    {
                        if(!empty($_POST['skill'.$i]))
                        {
                            echo "<li>".$_POST['skill'.$i]."</li>";
                        }
                    $i++;
                    }
                ?>
                
                </ul>
        </div>
        <div class="table">
        <h2 id="heading">Personal Details</h2>
                <ul>
                    <li>
                        <span>Date Of Birth :</span><?php echo $_SESSION['dob'];?>
                    </li>
                    <li>
                        <span>Father's Name :</span><?php echo $_SESSION['fname'];?>
                    </li>
                    <li>
                        <span>Landline No. :</span><?php echo $_SESSION['landline'];?>  
                    </li>   
                    <li>
                        <span>Alternate No. :</span> <?php echo $_SESSION['alt'];?>
                    </li>
                </ul>
        </div>       
    </body>
</html> 
