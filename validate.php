<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'regform');

if(isset($_POST['submit'])){
	$adminname = $_POST['adminname'];
	$password = $_POST['password'];

	$sql = " select * from  admin where adminname='$adminname' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['adminname'] = $adminname;
			header('location:wadmin.php');
		}else{
			echo "login failed";
			header('location:admin.php');
		}

}


?>