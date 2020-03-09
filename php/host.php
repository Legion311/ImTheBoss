<?php

$dbhost = 'db';
$dbuser = 'user';
$dbpass = '12345';
$dbname = 'db';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$sql = "CREATE TABLE host(
       host VARCHAR(50) NOT NULL,
       time VARCHAR(50) NOT NULL
       )";
mysqli_query($conn,$sql);



?>


