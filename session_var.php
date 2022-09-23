<?php
include '_dbconnect.php';
@session_start();
$query = "SELECT sno FROM `res`.`login` WHERE username='" . $_SESSION['username'] ."'";
$result = mysqli_query($conn, $query) or trigger_error(mysqli_error());
$num = mysqli_num_rows($result);
if ($num == 0) {
    $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  } else {  
    $row = mysqli_fetch_array($result);
    $_SESSION['user_id'] = $row['sno'];
    // -------------updated code-------------------
    $query = "SELECT * FROM `res`.`login` WHERE sno =". $_SESSION['user_id'];
    $result = mysqli_query($conn, $query);
    // your result contains the username value. As per the requirement fetch it
    //------------updated code end-----
    // echo $_SESSION['user_id'];

    //-------------------Fetching from USER Table: ----------------
    $query = "SELECT name, email, phone, fname, obj FROM `res`.`user` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error());
    $row = mysqli_fetch_array($result);
    @$_SESSION['name'] = $row['name'];
    @$_SESSION['email'] = $row['email'];
    @$_SESSION['phone'] = $row['phone'];
    @$_SESSION['fname'] = $row['fname'];
    @$_SESSION['obj'] = $row['obj'];
    // echo $_SESSION['name'];
    // echo $_SESSION['email'];
    // echo $_SESSION['phone'];
    // echo $_SESSION['fname'];
    // echo $_SESSION['obj'];


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
    // echo $_SESSION['perc10'];
    // echo $_SESSION['school10'];
    // echo $_SESSION['year10'];
    // echo $_SESSION['perc_dip'];
    // echo $_SESSION['school_dip'];
    // echo $_SESSION['year_dip'];
    // echo $_SESSION['name_dip'];

    // echo $_SESSION['perc_clg'];
    // echo $_SESSION['clg_year'];
    // echo $_SESSION['clg_sem'];
    // echo $_SESSION['clgcourse'];

    	
			
  		
		
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
    // echo $_SESSION['perc10'];
    // echo $_SESSION['school10'];
    // echo $_SESSION['year10'];
    // echo $_SESSION['perc12'];
    // echo $_SESSION['school12'];
    // echo $_SESSION['year12'];
    // echo $_SESSION['perc_clg']; 
    // echo $_SESSION['clg'];
    // echo $_SESSION['clg_year'];
    // echo $_SESSION['clg_sem'];
    // echo $_SESSION['clg_course'];

    //-------------------Fetching from TRAINING Table: ----------------
    $query = "SELECT skill  FROM `res`.`skill` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));
    @$row = mysqli_fetch_array($result);
    @$_SESSION['skill'] = $row['skill'];
    //echo $_SESSION['skill'];


    //-------------------Fetching from training Table: ----------------
    $query = "SELECT cname, duration, proj, tech  FROM `res`.`training` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));
    $row = mysqli_fetch_array($result);
    @$_SESSION['cname'] = $row['cname'];
    @$_SESSION['duration'] = $row['duration'];
    @$_SESSION['tproj'] = $row['proj'];
    @$_SESSION['tech'] = $row['tech'];
    //echo $_SESSION['cname'];
    //echo $_SESSION['duration'];
    //echo $_SESSION['proj'];
    //echo $_SESSION['tech'];

    //-------------------Fetching from PROJECT Table: ----------------
    $query = "SELECT proj  FROM `res`.`proj` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error($conn));
    @$row = mysqli_fetch_array($result);
    @$_SESSION['proj'] = $row['proj'];
    // echo $_SESSION['proj'];

    //-------------------Fetching from PERSONAL Table: ----------------
    $query = "SELECT dob, landline, alt, nationality, perm, cur  FROM `res`.`personal` WHERE sno='" . $_SESSION['user_id'] ."'";
    $result = mysqli_query($conn, $query) or trigger_error(mysqli_error());
    @$row = mysqli_fetch_array($result);
    @$_SESSION['dob'] = $row['dob'];
    @$_SESSION['landline'] = $row['landline'];
    @$_SESSION['alt'] = $row['alt'];
    @$_SESSION['nationality'] = $row['nationality'];
    @$_SESSION['perm'] = $row['perm']; 
    @$_SESSION['cur'] = $row['cur']; 
    // echo $_SESSION['dob'];
    // echo $_SESSION['landline'];
    // echo $_SESSION['alt'];
    // echo $_SESSION['nationality'];
    // echo $_SESSION['perm'];


   

  }
    ?>