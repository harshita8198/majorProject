<?php
//session_start();
include_once("mysql-connection.php");

$name=$_POST["txtname"];
$email=$_POST["txtemail"];
$phone=$_POST["txtphone"];
$dish=$_POST["txtdish"];
$msg=$_POST["txtmsg"];


$query="insert into burgerorder values('$name','$email','$phone','$dish','$msg')";
mysqli_query($dbcon,$query);
$msg=mysqli_error($dbcon);
if($msg=="")
{
//	move_uploaded_file($tmpName,"uploads/".$orgName);
	echo "Saved";
	//echo "<script>window.location.href ='customer-front.php'</script>";

    }
else
	echo $msg;

//header("refresh: 1; url = http://localhost/djproject/customer-front.php");
//$_SESSION["cname"]=$cname;

?>
















