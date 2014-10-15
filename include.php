<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$db_host = 'localhost';
$db_user = 'root';
$db_pass = 'jodrre226579';
$db_db = 'fabula';






// ======= DO NOT EDIT BELOW THIS LINE ========= //

$DBconn = mysqli_connect($db_host,$db_user,$db_pass,$db_db);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
