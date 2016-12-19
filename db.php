<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("in-cdbr-azure-central-b.cloudapp.net","bf93a845126411","7749a8d4","acsm_2d98dd3d6443bb1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>