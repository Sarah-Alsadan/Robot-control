<?php

define('HOST_NAME',"localhost");
define('USER_NAME',"root");
define('PASSWORD',"");
define('DB_NAME',"robotDB");
$conn= new mysqli(HOST_NAME,USER_NAME,PASSWORD,DB_NAME);
// Check connection
if ($conn ->connect_errno) {
 echo "Failed to connect to MySQL: " . $conn ->connect_error;
 exit();
}

?> 