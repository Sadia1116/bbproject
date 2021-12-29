<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `regform` WHERE CONCAT( `fname`, `lname`, `bloodgroup`,'phone','address') LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `regform`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "regform");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>
<style>
            table,tr,th,td
            {
                border: 1px solid black;
               
            }
            th{
                background: red;
            }
        </style>
<table>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Blood group</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
                
      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['fname'];?></td>
                    <td><?php echo $row['lname'];?></td>
                    <td><?php echo $row['bloodgroup'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['address'];?></td>
                </tr>
                <?php endwhile;
                
                ?></table>
                
            
                