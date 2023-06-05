<?php
$FirstName=$_POST["fname"];
$LastName=$_POST["lname"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];

//create a connection
//$conn=mysqli_connect("localhost","root","","contact_form") or die("connection failed");
$servername='localhost:3307';
$username='root';
$password='';
$dbname = "contact_form";
$conn=mysqli_connect($servername,$username,$password,"$dbname") or die("connection failed");

$sql="INSERT INTO cf_table(FirstName,LastName,email,mobile) VALUES('{$FirstName}','{$LastName}','{$email}','{$mobile}')";
$result=mysqli_query($conn,$sql) or die("Query Failed");
header("location: http://localhost/Contact_Form/form.php");
mysqli_close($conn);
?>