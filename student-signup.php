<?php
namespace Phppot;

use \Phppot\Member;
if (! empty($_POST["register-user"])) {
    
    $password = filter_var($_POST["password_1"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_STRING);
    require_once ("Member.php");
    /* Form Required Field Validation */
    $member = new Member();
    $errorMessage = $member->validateMember( $password, $email);
    
    if (empty($errorMessage)) {
        $memberCount = $member->isMemberExists($email);
        
        if ($memberCount == 0) {
            $insertId = $member->insertMemberRecord( $password, $email);
            echo $insertId;
             header('Location: payment/index.php?amount=200&email='.$email.'&reference=xcvfd#'.$email.'');
header('Location: PayWeb_Standalone_Payment_Portal-12/PayWeb_Standalone_Payment_Portal-12/public_html/index.php?amount=200&email='.$email.'&reference=xcvfd_'.$email.'');
            if (!empty($insertId)) 
            {
            header('Location: PayWeb_Standalone_Payment_Portal-12/PayWeb_Standalone_Payment_Portal-12/public_html/index.php?amount=200&email='.$email.'&reference=xcvfd');
        
            }
        } else {
            $errorMessage[] = "User already exists.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Student signup for on demand</title>
  <!-- MDB icon -->
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/site.webmanifest">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header-bg" id="intro-non-image">
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-light white fixed-top" style="border-bottom: solid;border-color: #560101;">
<div class="container">
  <a class="navbar-brand" href="index.html"><img src="img/logo.png"/></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333" style="float:right;">
    <ul class="navbar-nav mr-auto">

    </ul>
    <ul class="navbar-nav ml-auto nav-flex-icons">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">How it works
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="howitworks.html">Services</a>
          <a class="dropdown-item" href="subjects.html">Subjects</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="prices.html">Pricing</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Success Stories
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="success-stories.html">Case Studies</a>
          <a class="dropdown-item" href="videosci.html">Video Library</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="academic-services.html">Subject Specialists</a>
      </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">About Us</a>  
      <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Blog</a>
          <a class="dropdown-item" href="team.html">Meet the team</a>
          <a class="dropdown-item" href="board.html">Meet the Board</a>
          <a class="dropdown-item" href="academic-advisory-board.html">Academic Advisory Board</a>
          <a class="dropdown-item" href="media.html">Research and Media</a>
          <a class="dropdown-item" href="social-responsibility.html">Social Responsible</a>

          <a class="dropdown-item" href="jobs.html">Join the team</a>

          <a class="dropdown-item" href="contactus.html">Contact us</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="student-signup.html">Sign in</a>
          <a class="dropdown-item" href="#">Sign up</a>
          <a class="dropdown-item" href="#">Logout</a>
          <a class="dropdown-item" href="#">Profile</a>
        </div>
      </li>
    </ul>
  </div>
</div>
</nav>

<!--/.Navbar -->
<div class="card card-intro blue-gradient">
      <div class="card-body white-text black text-center">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-md-9">
          <h1 class="font-bold white-text mb-2">Create your account</h1>
            <hr class="hr-light">
          <h4 class="font-bold white-text mb-2">Stories of engagement, satisfaction, and learning outcomes.</h4>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
    </div>
</header>
<main class="mt-5">
    <!-- Material form login -->
<div class="container-fluid" >    
  <div class="row d-flex justify-content-center">
    <div class="col-md-4  mb-4 text-center">
        <p>Do you have an activation code from your school?</p>
        <button type="button" class="btn btn-outline btn-curved-hover waves-effect  " style="border: 2px solid #560101 !important;">Use your code</button>
    </div>
    <div class="col-md-4  mb-4 text-center">
        <p>Do you have access through your Uni or study provider?</p>
        <button type="button" class="btn btn-outline btn-curved-hover waves-effect" style="border: 2px solid #560101 !important;">Find your uni</button>
    </div>
  </div>
</div>
<div class="container-fluid col-md-12 mb-12 section-background" style="padding-bottom:5%;padding-top:5%;">
<div class="col-md-6 offset-md-3 mb-6">
<div class="card">
  <h5 class="card-header young-passion-gradient white-text text-center py-4">
    <strong>Create an Account</strong>
  </h5>
  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">
    <!-- Form -->
    <form class="text-center" method="post" style="color: #757575;" action="">
      <!-- Email -->     
<span style="line-height:1px">
<h2><br/>R200</h2>
<p>Introductory Offer</p> 
</span>
<?php
      if (! empty($errorMessage) && is_array($errorMessage)) {
    ?>	
            <div class="error-message">
            <?php 
            foreach($errorMessage as $message) {
                echo "<p style='color:red;'>".$message. "<br/>"."</p>";
            }
            ?>
      <div class="md-form">
  
            </div>
<?php
}
?>

      <div class="md-form">
        <input type="email" name="email" id="materialLoginFormEmail" class="form-control">
        <label for="materialLoginFormEmail">E-mail</label>
      </div>
      <!-- Password -->
      <div class="md-form">
        <input type="password" name="password_1" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Password</label>
      </div>

      <div class="md-form">
        <input type="password" name="password_2" id="materialLoginFormPassword" class="form-control">
        <label for="materialLoginFormPassword">Confirm Password</label>
      </div>
      <div class="d-flex justify-content-around">
        <div>
          <!-- Remember me -->
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember" name="terms">
            <label class="form-check-label" for="materialLoginFormRemember"> I accept terms and conditions.</label>
          </div>
        </div>
      </div>
      <!-- Sign in button -->
      <!--button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button-->      
<button class="btn px-2 btn-info btn-block" type="submit"  name="register-user" value="Login"
>Register</button>
      <!-- Register -->
      <p>Already a registered member?
        <a href="student-signin.php" style="color:#c00000">Login</a>
      or sign in with:</p>
      <a type="button" class="btn-floating btn-fb btn-sm">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a type="button" class="btn-floating btn-tw btn-sm">
        <i class="fab fa-twitter"></i>
      </a>
      <a type="button" class="btn-floating btn-li btn-sm">
        <i class="fab fa-linkedin-in"></i>
      </a>
      <a type="button" class="btn-floating btn-git btn-sm">
        <i class="fab fa-github"></i>
      </a>
    </form>
    <!-- Form -->
  </div>
  </div>
</div>
</div>
<!-- Material form login -->
<!-- Take the whole width-->
</main>
<footer>
<div class="">
<!-- Footer -->
<footer class="page-footer font-small blue-grey lighten-5" style="margin-top:2%;">

  <div style="background-color: black;">
    <div class="container">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center">

        <!-- Grid column -->
        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
          <h6 class="mb-0">Get connected with us on social networks!</h6>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-6 col-lg-7 text-center text-md-right">

          <!-- Facebook -->
          <a class="fb-ic">
            <i class="fab fa-facebook-f white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic">
            <i class="fab fa-twitter white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic">
            <i class="fab fa-google-plus-g white-text mr-4"> </i>
          </a>
          <!--Linkedin -->
          <a class="li-ic">
            <i class="fab fa-linkedin-in white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic">
            <i class="fab fa-instagram white-text"> </i>
          </a>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
  </div>

  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5">

    <!-- Grid row -->
    <div class="row mt-3 dark-grey-text">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

        <!-- Content -->
        <h6 class="text-uppercase font-weight-bold"><img src="img/logo.png" style="height:35px;"/></h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>We connect students to the best and brightest minds, so they can get help exactly when it's needed most. This is all done through our own awesome technology, accreditation, and academic integrity standards.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Student Zone</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Free practice tests </a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Calendars and Organisers</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Study survival guides</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Student FAQs
</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <a class="dark-grey-text" href="#!">Your Account</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Become a Tutor</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Tutorial Rates</a>
        </p>
        <p>
          <a class="dark-grey-text" href="#!">Help</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Contact</h6>
        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p>
          <i class="fas fa-home mr-3"></i> Mthatha, EC 5100, South Africa</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@enkosidigital.co.za</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +27 613 340 629</p>
        <p>
          <i class="fas fa-print mr-3"></i> +27 613 340 629</p>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center text-black py-3" style="color:black; font-size:18px;">� 2020 Copyright:Designed by
    <a style="color:#c00000;" href="https://www.enkosidigital.co.za/"> EnkosiDigital</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</div>
</footer>

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
