
<?php
include('connection.php');
////you made a deadly error below, I think because 
////YOU HAD SUBMIT AS CAPITAL LETTERS!! SHOULD NOT BE!!
if(isset($_POST['submit'])){
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = "select * from login where username = '$user' and password = '$pass'";

$result = mysqli_query($con,$sql); ///it should be $con not $conn!!
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count =  mysqli_num_rows($result);
if($count==1){
    header("Location:welcome.php");
}
else{
echo '<script> window.location.href = "index.php"
     alert("Login Failed. Invalid username or password")
        </script>';
}
}
?>