<?php

// creaate onnection credenials
$db_host =  'localhost' ;   // server name // var needs to start with dllar sign
$db_name = 'quiz' ;
$db_user = 'root' ;
$db_pass = "admin123#";

// Create Mysql Object
$mysqli = new mysqli($db_host , $db_user , $db_pass , $db_name); // create a DB object
// It is essential to be in that sequence

// ERROR HANDLER
if($mysqli->connect_error) { // if error has happend wtf (;
    printf("Connection failed: %s\n", $mysqli->connect_error); // and print that error
    exit(); // exit current script and can also print message as an argument
}
else{
 //drop daabase'quiz'
}
?>