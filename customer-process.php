<?php
session_start();
include_once("mysql-connection.php");

$uid=$_POST["txtuid"];
$cname=$_POST["txtname"];
$mobile=$_POST["txtmobile"];
$address=$_POST["txtaddre"];
$city=$_POST["txtcity"];
$reference=$_POST["txtref"];
$orgName=$_FILES["ppic"]["name"];
$tmpName=$_FILES["ppic"]["tmp_name"];

$query="insert into customer values('$uid','$cname','$mobile','$address','$city','$reference','$orgName')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
{
	move_uploaded_file($tmpName,"uploads/".$orgName);
	echo "Saved";
	echo "<script>window.location.href ='customer-front.php'</script>";

    }
else
	echo $msg;

//header("refresh: 1; url = http://localhost/djproject/customer-front.php");
$_SESSION["cname"]=$cname;

?>
















