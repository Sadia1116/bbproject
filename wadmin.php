<?php
    session_start();

    if(isset($_SESSION['adminname']))
    {
        echo ' Well Come ' . $_SESSION['adminname'].'<br/>';
        echo '<a href="logout.php?logout">Logout</a>';
        header("location:dashbord.php");
    }
    else
    {
        header("location:info.php");
    }

?>