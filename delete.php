<?php
require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM regform WHERE id=$id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error());
header("Location: dashbord.php"); 
?>