<?php
// $con=mysqli_connect("localhost", "root", "", "femdb");
$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL); mysqli_real_connect($conn, "familyexpensetracker-server.mysql.database.azure.com", "nrksmpwexd", "2011426618.ab", "test", 3306, MYSQLI_CLIENT_SSL);
if(mysqli_connect_errno()){
echo "Connection Fail".mysqli_connect_error();
}

  ?>
