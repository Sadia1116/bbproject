<?php
require('connect.php');
include("config.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Donor Records</title>
<link rel="stylesheet" href="css/dashbord.css" />
</head>
<body>
<div class="form">
<p><a href="dashbord.php">Home </a> 
| <a href="become_donor.php">Insert New Record</a> 
| <a href="logout.php?logout">Logout</a></p>
<h2>Donor Records</h2>
<table width="100%" border="3" style="border-collapse:collapse; ">
<thead>
<tr>
<th><strong>S.No</strong></th>
<th><strong>First Name</strong></th>
<th><strong>Last Name</strong></th>
<th><strong>Gender</strong></th>
<th><strong>Blood group</strong></th>
<th><strong>Email</strong></th>
<th><strong>Address</strong></th>
<th><strong>Phone</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from regform ORDER BY id desc;";
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["fname"]; ?></td>
<td align="center"><?php echo $row["lname"]; ?></td>
<td align="center"><?php echo $row["gender"]; ?></td>
<td align="center"><?php echo $row["bloodgroup"]; ?></td>
<td align="center"><?php echo $row["email"]; ?></td>
<td align="center"><?php echo $row["address"]; ?></td>
<td align="center"><?php echo $row["phone"]; ?></td>
<td align="center">
<a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>