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
<link rel="stylesheet" href="css/style.css">
</head>



<body>
  <!--header-->
  <!-- Navbar-->
<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top py-3 bg-danger">
      <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold"><img src="img/logo.png" alt="logo"></a>
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
          
          <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
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
  <!--navbar end-->
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="img/video.mp4" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3">Donate blood, save life</h1>
        <p class="lead mb-0">রক্তদানে উদ্বুদ্ধ হোন</p>
        <blockquote class="blockquote">
          <p class="mb-0">“...আর যখন কেউ কোনো মানুষের জীবন রক্ষা করল, সে যেন সমগ্র মানবজাতির জীবন রক্ষা করল”</p>
          <footer class="blockquote-footer text-white"> <cite title="Source Title">(সূরা মায়েদা : ৩২)</cite></footer>
        </blockquote>
        
      </div>
    </div>
  </div>
</header>
<!--header end-->

<!--main-->

  
 <!--process-->
       <main class="main">
        <div id="breaking">Breaking News: </div>
        <div id="newsTicker">
          <p> </p>
        </div>
        <section id="process" class="process">
          <div class="container-fluid container-fluid-max">
            <div class="row text-center py-5">
              <div class="col-12 pb-4">
                <h2 class="text-dark">The Blood Donation Process</h2>
                <p>The blood donation process from the time you arrive until the time you leave takes about an hour. The donation itself is only about 8-10 minutes on average.</p>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                  <i class="fas fa-circle fa-stack-2x "></i>
                  <i class="fas fa-pen fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-3 text-dark h4">Registration</h3>
                <p>We’ll sign you in and go over basic eligibility.
                  You’ll be asked to show ID, such as your driver’s license.
                  You’ll read some information about donating blood.
                  We’ll ask you for your complete address.  Your address needs to be complete (including PO Box, street/apartment number) and the place where you will receive your mail 8 weeks from donation.</p>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                  <i class="fas fa-circle fa-stack-2x text-red"></i>
                  <i class="fas fa-stethoscope fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-3 text-dark h4">Health History</h3>
                <p>You’ll answer a few questions about your health history and places you’ve traveled, during a private and confidential interview.
                  You’ll tell us about any prescription and/or over the counter medications that may be in your system.
                  We’ll check your temperature, pulse, blood pressure and hemoglobin level. </p>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                  <i class="fas fa-circle fa-stack-2x text-red"></i>
                  <i class="fas fa-tint fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-3 text-dark h4">Your Donation</h3>
                <p>If you’re donating whole blood, we’ll cleanse an area on your arm and insert a brand new sterile needle for the blood draw. (This feels like a quick pinch and is over in seconds.)
                  Other types of donations, such as platelets, are made using an apheresis machine which will be connected to both arms.
                  A whole blood donation takes about 8-10 minutes, during which you’ll be seated comfortably or lying down.
                  When approximately a pint of whole blood has been collected, the donation is complete and a staff person will place a bandage on your arm.
                 </p>
              </div>
              <div class="col-12 col-sm-6 col-lg-3">
                <span class="fa-stack fa-2x">
                  <i class="fas fa-circle fa-stack-2x text-red"></i>
                  <i class="fas fa-thumbs-up fa-stack-1x text-white"></i>
                </span>
                <h3 class="mt-3 text-dark h4">Refreshment and Recovery</h3>
                <p>After donating blood, you’ll have a snack and something to drink in the refreshment area.
                  You’ll leave after 10-15 minutes and continue your normal routine.
                  Enjoy the feeling of accomplishment knowing you are helping to save lives.
                  Take a selfie, or simply share your good deed with friends. It may inspire them to become blood donors. </p>
              </div>
              <div class="col-12 pt-3">
                <a class="btn bg-red text-white" target="_blank" href="about.php" role="button">Learn More →</a>
              </div>
            </div>
          </div>
        </section>     
        <!--process end-->

        <!--what happend after blood donation-->
      
    <div class="hm-gradient">
      <div class="full-bg-img">
        <div class="container flex-center">
          <div class="row pt-5 mt-3">
            <div class="col-lg-6 wow fadeIn mb-5 text-center text-lg-left">
              <div class="white-text">
                <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">What Happens After your Donation?</h1>
                <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                <p class="wow fadeInLeft" data-wow-delay="0.3s">Your blood journeys through many steps and tests that ensure our blood supply is as safe as possible and helps as many people as possible.
                  Have you ever wondered exactly what happens to the blood you donate at the Blood Donation Center? Your blood goes on an amazing journey!

You can learn about all the steps your blood goes through before it reaches a recipient in this informative video.</p>
                <br>
                <p class="wow fadeInLeft" data-wow-delay="0.3s">Start Your Own Blood Donation Journey!!</p>
                <a href="donate_now.php"class="btn btn-outline-danger wow fadeInLeft" data-wow-delay="0.3s">Donate now</a>
              </div>
            </div>

            <div class="col-lg-6 wow fadeIn">
              <div class="embed-responsive embed-responsive-16by9 wow fadeInRight ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Tfwq_vJHwT8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--what happend after blood donation end-->
  
       </main>
       <!--main end-->
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
                <li><a href="assets/COVID-19.php"><i class="fa fa-angle-double-right"></i>COVID-19</a></li>
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

<!--jquery 3.35.1-->
<script src="js/jquery3.5.1.js"></script>
<script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>