<?php
include('connection.php');
////you made a deadly error below, I think because 
////YOU HAD SUBMIT AS CAPITAL LETTERS!! SHOULD NOT BE!!
$sql = "insert into login VALUES ('user1', 'user1');";
$result = mysqli_query($con,$sql); ///it should be $con not $conn!!
$sql = "insert into login VALUES ('user2', 'user2');";
$result = mysqli_query($con,$sql);
$sql = "insert into login VALUES ('user3', 'user3');";
$result = mysqli_query($con,$sql);

echo "Good. Some new data were inserted";

?>