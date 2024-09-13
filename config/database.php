<?php
// Include the configuration file
include_once('config.php');


//Disable mysqli exceptions
//mysqli_report(MYSQLI_REPORT_OFF);

$conn = @new mysqli(SERVER_NAME, USERNAME, PASSWORD, DBNAME);
//conenction check
if($conn->connect_error){
  die ("database connection failed " . $conn->connect_error);
}
    
    ?>