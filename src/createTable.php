

<?php
include('connection.php'); //this page renders the message..'connection success!'
////you made a deadly error below, I think because 
////YOU HAD SUBMIT AS CAPITAL LETTERS!! SHOULD NOT BE!!
$sql = "create table login ( username varchar(30), password varchar(30));";

$result = mysqli_query($con,$sql); ///it should be $con not $conn!!
echo "Good. Some new tables were created";

?>