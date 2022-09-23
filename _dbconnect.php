<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "res";

$conn = mysqli_connect($server, $username, $password, $database);
//if (!$conn){
//     echo "success";
// }
// else{
//    die("Error". mysqli_connect_error());
//}

// $sql1= "CREATE TABLE user (id INT(255)  AUTO_INCREMENT PRIMARY KEY, sno int(255), name varchar(20), email varchar(30), phone int(10), fname varchar(30), obj text, FOREIGN KEY (sno) REFERENCES login(sno), dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
//   if ($conn->query($sql1) === TRUE) {
//     echo "Table user created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

//   $sql2= "CREATE TABLE nondip (id INT(255) AUTO_INCREMENT PRIMARY KEY, sno int(255), perc10 INT(10), school10 VARCHAR(50), year10 VARCHAR(30), perc12 INT(10), school12 VARCHAR(50), year12 VARCHAR(30), perc_clg INT(10), clg VARCHAR(50), clg_year VARCHAR(30), clg_sem VARCHAR(30), clg_course VARCHAR(30), FOREIGN KEY (sno) REFERENCES login(sno),  dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
//   if ($conn->query($sql2) === TRUE) {
//     echo "Table dip created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }

// $sql3= "CREATE TABLE dip (id INT(255) AUTO_INCREMENT PRIMARY KEY, sno int(255), perc10 INT(10), school10 VARCHAR(50), year10 VARCHAR(30), perc_dip INT(30), school_dip VARCHAR(255), year_dip VARCHAR(30), name_dip VARCHAR(50), perc_clg INT(30), clg_year VARCHAR(30), clg_sem VARCHAR(30), clgcourse VARCHAR(30), FOREIGN KEY (sno) REFERENCES login(sno),  dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
//   if ($conn->query($sql3) === TRUE) {
//     echo "Table dip created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }


//   $sql4= "CREATE TABLE personal (id INT(255) AUTO_INCREMENT PRIMARY KEY, sno int(255),  dob date, landline varchar(15), alt VARCHAR(15), nationality varchar(30), perm text, cur text, FOREIGN KEY (sno) REFERENCES login(sno), dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
//   if ($conn->query($sql4) === TRUE) {
//     echo "Table personal created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }
		

// $sql5= "CREATE TABLE skill (id INT(255) AUTO_INCREMENT PRIMARY KEY, sno int(255), skill VARCHAR(30), FOREIGN KEY (sno) REFERENCES login(sno), dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
// if ($conn->query($sql5) === TRUE) {
//     echo "Table skill created successfully";
//   } else
//    {
//     echo "Error creating table: " . $conn->error;
//   }

//   $sql6= "CREATE TABLE proj (id INT(255)  AUTO_INCREMENT PRIMARY KEY, sno int(255),  proj text, FOREIGN KEY (sno) REFERENCES login(sno), dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
//   if ($conn->query($sql6) === TRUE) {
//     echo "Table proj created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }



// $sql7= "CREATE TABLE training (id INT(255) AUTO_INCREMENT PRIMARY KEY, sno INT(255), cname VARCHAR(30), duration varchar(30), proj	text, tech VARCHAR(255), FOREIGN KEY (sno) REFERENCES login(sno), dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
// if ($conn->query($sql7) === TRUE) {
//         echo "Table training created successfully";
//       } else {
//         echo "Error creating table: " . $conn->error;
//       }

?>
