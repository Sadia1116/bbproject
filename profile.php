<?php
    include_once("config.php");

    if (isset($_GET['first']))
    {
        $firstname = $_GET['first'];
        $sql = "SELECT * FROM regform WHERE firstname='$firstname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["fname"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["fname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["lname"].'</td></tr>';
                echo '<tr><td>Address:</td><td>'.$row["address"].'</td></tr>';
                echo '<tr><td>Blood group:</td><td>'.$row["bloodgroup"].'</td></tr>';
                echo '<tr><td>Phone:</td><td>'.$row["phone"].'</td></tr>';
                echo '<tr><td>Email</td><td>'.$row["email"].'</td></tr>';

            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';

        $sql = "SELECT * FROM regform";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   
            while($row = $result->fetch_assoc()) {
                
                echo '<hr />';
                echo '<table>';
                echo '<tr><td>ID:</td><td>'.$row["id"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["fname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["lname"].'</td></tr>';
                echo '<tr><td>Address:</td><td>'.$row["address"].'</td></tr>';
                echo '<tr><td>Blood group:</td><td>'.$row["bloodgroup"].'</td></tr>';
                echo '<tr><td>Phone:</td><td>'.$row["phone"].'</td></tr>';
                echo '<tr><td>Email:</td><td>'.$row["email"].'</td></tr>';


                echo '</table>';
                
            }
        }
        else {
           echo "0 results";
        }
    }
    
    include_once("menu.php");
?>