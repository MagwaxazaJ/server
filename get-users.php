<?php
  header("Access-Control-Allow-Origin: *");
 $CN = mysqli_connect("localhost","root","");
 $DB = mysqli_select_db($CN,"picel");

 $IQ = "SELECT * FROM wp5x_users";

 $R = mysqli_query($CN, $IQ);


?>