<?php
include_once('host.php');
$server = "db";
$user = "user";
$pass = "12345";
$dbname = "db";

$conn = mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
die("connect losed".mysqli_connect_error());
}
$host = gethostname();
$time = date("Y-m-d-H:i:s");
echo "<h1>Current host:".$host."</h1>";
echo "<h1>Current Time:".$time."</h1>";
$sql = "INSERT INTO host".
"(host,time)".
"VALUES".
"('$host','$time')";
mysqli_query($conn,$sql);
$sql ="SELECT * FROM host ORDER BY time DESC LIMIT 3";
$result = mysqli_query($conn,$sql);
echo "<br> latest 3 records: <br>";
echo "<table border=1>";
while($row = mysqli_fetch_assoc($result)){
echo "<tr><td>".$row["host"]."</td><td>".$row["time"]."</td></tr>";
};

?>

