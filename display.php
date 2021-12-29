<?php 
//display all users
include_once("config.php");

$sql = "SELECT * FROM regform";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        $fname = $row["fname"];
        echo '<tr><td><a href="profile.php?fname='.$fname.'">'.$fname.'</a><br /></td></tr>';
    }
    echo '</table>';
}
else {
    echo "0 results";
}
include_once("menu.php");
?>