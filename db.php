<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("in-cdbr-azure-central-b.cloudapp.net","b96075876289ff","4d809d24","acsm_53553ff6e069a70");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>