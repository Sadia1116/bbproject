<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank & Donor Management System</title>
    <!-- fontawsome-->
    <link rel="stylesheet" href="css/all.min.css">

<!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" >

<!--Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--css-->
<link rel="stylesheet" href="css/donate_now.css">
<body>
<?php
    session_start();
?>


  <!-- Navbar-->
<header class="header">
  <nav class="navbar navbar-expand-lg  py-3 bg-danger ">
      <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"><img src="img/logo.png" alt="logo"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
          <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="index.php" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                  <li class="nav-item"><a href="about.php" class="nav-link text-uppercase font-weight-bold">About</a></li>
                  <li class="nav-item"><a href="COVID-19.php" class="nav-link text-uppercase font-weight-bold">COVID-19</a></li>
                  <li class="nav-item"><a href="why_become_donor.php" class="nav-link text-uppercase font-weight-bold">Why become doner</a></li>
                  <li class="nav-item"><a href="become_donor.php" class="nav-link text-uppercase font-weight-bold">Become Donor</a></li>
                  <li class="nav-item"><a href="search_blood.php" class="nav-link text-uppercase font-weight-bold">Search blood</a></li>
                  <li class="nav-item"><a href="contact_us.php" class="nav-link text-uppercase font-weight-bold">Contact us</a></li>
                  <li class="nav-item"><a href="admin.php" class="nav-link text-uppercase font-weight-bold">Admin</a></li>
              </ul>
          </div>
      </div>
  </nav>
</header>
<main>
    <div class="wrapper">
        <div class="title">
           Login
        </div>
        <form name="form" method="post" action="login.php" OnSubmit="return fncValidate();" autocomplete="off">
          <table align="center" width="400" border="0">
           
            <tr>
              <td> Email</td>
              <td><div  class="input-group"><input type="text" name="email"></div>
              </td>
            </tr>
           <tr>
              <td> Password</td>
              <td><div  class="input-group"><input type="password" name="Password"></div>
              </td>
            </tr>
           
      <tr><td></td><td><input type="submit" name="Submit" value="Submit" class="btn">
      <input type="reset" name="reset" value="Reset" class="btn"></td></tr>
        </table>
        <br>
        <div class="text-center mb-5 text-dark"> Don't have an account? 
          <a class="login-link" href="become_donor.php">Registration here</a>
         </div>
        </br>
      </form>
  <!--form end-->
             
</main>


 <!--footer-->
 <section id="footer">
  <div class="container">
    <div class="row text-center text-xs-center text-sm-left text-md-left">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
          <li><a href="about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
          <li><a href="why_become_donor.php"><i class="fa fa-angle-double-right"></i>Why become donor</a></li>
          <li><a href="become_donor.php"><i class="fa fa-angle-double-right"></i>Become donor</a></li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="COVID-19.php"><i class="fa fa-angle-double-right"></i>COVID-19</a></li>
          <li><a href="https://surokkha.gov.bd/"><i class="fa fa-angle-double-right"></i>Surokkha</a></li>
          <li><a href="https://corona.gov.bd/"><i class="fa fa-angle-double-right"></i>Corona info</a></li>
          <li><a href="https://www.who.int/news-room/q-a-detail/vaccines-and-immunization-what-is-vaccination?adgroupsurvey={adgroupsurvey}&gclid=Cj0KCQiA-aGCBhCwARIsAHDl5x-Dt6eUVgLSfMqKM-k9kwr3QcCzZZMN9UD6iWOVr6zobnNqGTV4cfUaAkoYEALw_wcB"><i class="fa fa-angle-double-right"></i>Corona vaccine</a></li>
         
        </ul>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-4">
        <h5>Quick links</h5>
        <ul class="list-unstyled quick-links">
          <li><a href="search_blood.php"><i class="fa fa-angle-double-right"></i>Search Blood</a></li>
          <li><a href="https://www.unicef.org/bangladesh/en/stories/boosting-immunity-vitamin-campaign-reaches-over-20-million-bangladeshi-children-during"><i class="fa fa-angle-double-right"></i>Health tips</a></li>
          <li><a href="contact_us.php"><i class="fa fa-angle-double-right"></i>Contact</a></li>
          <li><a href="donate_now.php"><i class="fa fa-angle-double-right"></i>Donate </a></li>
          
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
        <ul class="list-unstyled list-inline social text-center">
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
          <a href=""><i class="fab fa-linkedin-in"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-google-plus-g"></i></a>
          <a href=""><i class="far fa-envelope"></i></a>
        </ul>
      </div>
      <hr>
    </div>	
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
        
        <p class="h6">© 2021 Bangladesh Blood Donation Center </p>
      </div>
      <hr>
    </div>	
  </div>
</section>
<!--Footer end -->
 
      








<!--jquery,popper,javascript-->
<script src="js/donatenow.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>