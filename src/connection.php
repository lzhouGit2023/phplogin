<?php
//  $servername = "localhost"; //$username = "root"; //$password = "God@2022";
  //$db_name = "lzhou";//$conn = new mysqli($servername,$username, $password, $db_name);
  //$conn = new mysqli($servername,$username, $password, $db_name);

   //if($conn->connect_error){// die("Connection failed."//,$conn->connect_error
    //);}  //echo "Connection successful";
   
   
  $dsn = "mysql:host=localhost;dbname=lzhou";
   $dbu = "root";
   $dbp = "God@2022";
  $server = "localhost";//phpinfo();
   /* try{ $pdo = new PDO("mysql:host=$server;$dbu",$dbp);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connection succeeded. ";
  }catch(PDOException $e){
    echo "Connection failed. "; } */
   
	$host = 'localhost';//= 'db.cs.dal.ca'
	$db = 'lzhou';
	$user = 'root';
	$pass = 'God@2022';//$pass = 'God@2022';//$pass = 'God@2019'; empty pass!
	$charset = 'utf8mb4';
	$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

//so my html connection doesn't need to connect with this?! Password is diff
	//on java since it is empty here....
///////////////////////////////$opt = [
   /////////PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
   /////////PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,
   ////////PDO::ATTR_EMULATE_PREPARES => false
////////];//so my html connection doesn't need to connect with this?! 

///////////$pdo = new PDO($dsn,$user,$pass,$opt);
// file:///C:/A3Xampp/htdocs/CSCI4140A3HTML.html PATH TO FILE
// again no comments outside of the tags!!!
$con = mysqli_connect($host,$user,$pass,$db);
if(mysqli_connect_errno()){

  echo "Failed to connect!";exit();
}
echo "Connection success!";

?>