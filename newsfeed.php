

<!doctype html>
<html>
<style>
body{
    baground-color:rgb(228, 231, 236);
   
}
table,tr,td
            {
                padding: 10px;
                border: 1px solid black;
              
               
            }
            
a{
    text-decoration: none;
    font-size: 24px;
  font-weight: 700;
  background:lightblue;
  box-shadow: 1px 1px 2px rgba(0,0,0,0.125);
  padding: 5px;
}
a:hover{
   background-color:lightpink;
}
</style>
    <body>
    <?php  include_once("menu.php");?>
       
        <hr />
        <h2>All our members:</h2>

        <?php  include_once("display.php");?>
       <br>
        <a href="become_donor.php">Add new user</a><br />
    </body>
</html>