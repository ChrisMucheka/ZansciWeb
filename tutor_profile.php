<?php
session_start();  
   $email=$_SESSION['email'];
    $conn = mysqli_connect('localhost:3306','root', 'TakudzwaSiyabonga@21761', 'zansci_users') or die("Cannot connect to the database server now". mysql_error());
    $result=$conn->query("select * FROM registered_tutors WHERE email ='$email'");
    $getDataIndex=mysqli_fetch_assoc($result);
    $getName=$getDataIndex['name'];
    $getSurname=$getDataIndex['surname'];
    $getName=$getName.' '.$getSurname;
    $getEmail=$getDataIndex['email'];
    if(empty($email))
    {
     header('Location: tutor_signin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile-Zansci</title>
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

<header class="header-bg" style="height:5%">
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

</header>
<main class="mt-5">
<!-- Take the whole width-->

<section id="offers" class="text-left">
<div class="container gray">
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-5 mb-5" style="padding-top:2.5%;">
    <h4 class="mb-4 text-left"><strong>Payment details</strong></h4>
    <h6 class="text-left"><strong>Account Holder</strong></h6>
    <p class="text-left"><?php echo $getName;?></p>
    <h6 class="text-left"><strong>Bank Name</strong></h6>
    <p class="text-left">First National / FirstRand / Rand Merchant Bank</p>
    <h6 class="text-left"><strong>Account Number</strong></h6>
    <p class="text-left">25558848489745</p>
    <p class="text-left"><a href="#" class="text-left" data-toggle="modal" data-target="#centralModalSm">Edit details</a></p>

<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-md " role="document">
    <div class="modal-content">
      <div class="modal-header" style="background:#560101;color:white">
        <h4 class="modal-title w-100" id="myModalLabel">Edit bank account</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
<div class="col-md-12 mb-12 grey lighten-5">
<form class="border border-light p-4">
    <label for="defaultContactForm" class="text-left">Account Holder <span style="font-size:12px;"> (the name on your account)</span></label>
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-2" placeholder="Name and Surname">
    <label for="defaultContactForm" class="text-left">Bank Name</label>
    <select class="browser-default custom-select mb-2" id="defaultSelect">
        <option value="" disabled="" selected="">-First National / FirstRand / Rand Merchant Bank-</option>
        <option value="1">Standard Bank</option>
        <option value="2">Capitec</option>
        <option value="3">ABSA</option>    
    </select>
    <label for="defaultContactForm" class="text-left">Account Number <span style="font-size:12px;"> (7 to 16 digits/letters)</span></label>
    <input type="text" id="" class="form-control mb-2" placeholder="Phone No">
    <label for="defaultContactForm" class="text-left">Street address 1 <span style="font-size:12px;"> (can not be a PO Box)</span></label>
    <input type="text" id="" class="form-control mb-2" placeholder="Street address 1">
    <label for="defaultContactForm" class="text-left">Street address 2 <span style="font-size:12px;"> (can not be a PO Box)</span></label>
    <input type="text" id="" class="form-control mb-2" placeholder="Street address 2">
    <label for="defaultContactForm" class="text-left">City </label>
    <input type="number" id="" class="form-control mb-2" placeholder="City">
    <label for="defaultContactForm" class="text-left">Postcode</label>
    <input type="number" id="" class="form-control mb-2" placeholder="Postcode">
   
</form>
</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-sm">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->
    <p>&nbsp</p>
    <h4 class="mb-4 text-left"><strong>Assigned subjects</strong></h4>
    <ul>
      <li class="text-left">Maths</li>
      <li class="text-left">Computer Science</li>
      <li class="text-left">Physics</li>
   </ul>
    <p class="text-left"><a href="#" class="text-left" data-toggle="modal" data-target="#centralModal">Change your password</a></p>
    <!-- Button trigger modal -->
<!-- Central Modal Small -->
<div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm" role="document">


    <div class="modal-content">
      <div class="modal-header" style="background-color: #560101">
        <h4 class="modal-title w-100" id="myModalLabel">Update Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="p-1">
    <label for="defaultContactForm" clas="text-left">Please enter your new password.</label>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Password">
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-sm">Update Password</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->
</div>

    <div class="col-md-7 mb-7" style="padding-top:2.5%;">
<div class="container-fluid col-md-12 mb-12"   >
<h4 class="mb-4"><strong>What do you need to know about the service?</strong></h4>
<div class="row">
<div class="col-md-12 mb-12 grey lighten-5">
<form class="border border-light p-4">
    <input type="text" id="defaultLoginFormEmail" class="form-control mb-2" placeholder=<?php echo $getName; ?>>
    <input type="text" id="" class="form-control mb-2" placeholder="Phone No">
    <input type="email" id="" class="form-control mb-2" placeholder=<?php echo $email; ?>>
    <input type="text" id="" class="form-control mb-2" placeholder="Street address 1">
    <input type="text" id="" class="form-control mb-2" placeholder="Street address 2">
    <input type="text" id="" class="form-control mb-2" placeholder="City">
    <input type="number" id="" class="form-control mb-2" placeholder="Postcode">
    <input type="text" id="" class="form-control mb-2" placeholder="Country">
    <select class="browser-default custom-select mb-2" id="defaultSelect">
        <option value="" disabled="" selected="">-Select Province-</option>
        <option value="1">EC</option>
        <option value="2">KZN</option>
        <option value="3">WC</option>    
    </select>
  <select class="browser-default custom-select mb-2" id="defaultSelect">
        <option value="" disabled="" selected="">-Select Timezone-</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>    
    </select>
    <input type="email" id="" class="form-control mb-2" placeholder="Date of birth">
   <div class="custom-control custom-checkbox mb-2">
    </div>
    <button class="btn btn-info btn-block" type="submit">Please help me with this information</button>
</form>
</div>
</div>
</div>
</div>
</div>    
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-8 offset-md-0 mb-8" >
<div class="container-fluid">
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-3 mb-3">
    <h6 class="text-left"><strong>Qualification Level</strong></h6>    
</div>
<div class="col-md-3 mb-3">
    <h6 class="text-left"><strong>Field</strong></h6>    
</div>
<div class="col-md-3 mb-3">
    <h6 class="text-left"><strong>Year Awarded</strong></h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left"><strong></strong></h6>    
</div>
 <hr class="teal accent-3 mt-o mb-0 d-inline-block mx-auto" style="width: 100%;">
</div>
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-3 mb-3">
    <h6 class="text-left">Masters</h6>    
</div>
<div class="col-md-4 mb-4">
    <h6 class="text-left">Environmental Science</h6>    
</div>
<div class="col-md-3 mb-3">
    <h6 class="text-left">2018</h6>    
</div>
<div class="col-md-1 mb-1">
    <h6 class="text-left"><a href>Edit</a></h6>    
</div>
 <hr class="teal accent-3 mt-0 mb-0 d-inline-block mx-auto" style="width: 100%;">
</div>
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-3 mb-3">
    <h6 class="text-left">Masters</h6>    
</div>
<div class="col-md-4 mb-4">
    <h6 class="text-left">Environmental Science</h6>    
</div>
<div class="col-md-3 mb-3">
    <h6 class="text-left">2018</h6>    
</div>
<div class="col-md-1 mb-1">
    <h6 class="text-left"><a href="" data-toggle="modal" data-target="#centralModal2">Edit</a></h6> 
<!-- Central Modal Small -->
<div class="modal fade" id="centralModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header justify-content-center" style="background-color: #560101">
        <h4 class="modal-title w-100 white-text text-center" id="myModalLabel">New Qualification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="p-1">
    <label for="defaultContactForm" clas="text-left">Degree Type *</label>
  <select class="browser-default custom-select mb-2" id="defaultSelect">
        <option value="" disabled="" selected="">-Select Timezone-</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>    
    </select>
    <label for="defaultContactForm" clas="text-left">Degree name *</label>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Degree name">
    <label for="defaultContactForm" clas="text-left">Year of Completion *</label>
    <input type="number" id="defaultContactFormName" class="form-control mb-4" placeholder="Year of Completion">
    
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-sm">Update Password</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->   
</div>
 <hr class="teal accent-3 mb-0 mt-0 d-inline-block mx-auto" style="width: 100%;">
</div>
<div class="row d-flex  mb-4">
<div class="col-md-6 mb-6">
<div class="col-md-8 mb-8">
   <button class="btn btn-info btn-block" type="submit" data-toggle="modal" data-target="#centralModal4">Add new qualification</button><!-- Central Modal Small -->
<div class="modal fade" id="centralModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header justify-content-center" style="background-color: #560101">
        <h4 class="modal-title w-100 white-text text-center" id="myModalLabel">New Qualification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="p-1">
    <label for="defaultContactForm" clas="text-left">Degree Type *</label>
  <select class="browser-default custom-select mb-2" id="defaultSelect">
        <option value="" disabled="" selected="">-Select Timezone-</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>    
    </select>
    <label for="defaultContactForm" clas="text-left">Degree name *</label>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Degree name">
    <label for="defaultContactForm" clas="text-left">Year of Completion *</label>
    <input type="number" id="defaultContactFormName" class="form-control mb-4" placeholder="Year of Completion">
    
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-sm">Update Password</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->   
</div>
</div>
</div>
</div>
</div>
</div>
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-8 offset-md-0 mb-8" >
<div class="container-fluid">
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-3 mb-3">
    <h6 class="text-left"><strong>Type</strong></h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left"><strong>Number</strong></h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left"><strong>Issue Date</strong></h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left"><strong>Expires</strong></h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left"><strong>Current</strong></h6>    
</div>
<div class="col-md-1 mb-1">
    <h6 class="text-left"><strong></strong></h6>    
</div>
 <hr class="teal accent-3 mt-o mb-0 d-inline-block mx-auto" style="width: 100%;">
</div>
<div class="row d-flex justify-content-center mb-4">
<div class="col-md-3 mb-3">
    <h6 class="text-left">Criminal record check</h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left">2018426028</h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left">2018-10-31</h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left">2019-10-30</h6>    
</div>
<div class="col-md-2 mb-2">
    <h6 class="text-left"><a href="">Delete</a></h6>    
</div>
<div class="col-md-1 mb-1">
    <h6 class="text-left"><a href="" data-toggle="modal" data-target="#centralModal5">Edit</a></h6> 
<!-- Central Modal Small -->
<div class="modal fade" id="centralModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header justify-content-center" style="background-color: #560101">
        <h4 class="modal-title w-100 white-text text-center" id="myModalLabel">New Qualification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="p-1">
    <label for="defaultContactForm" clas="text-left">Degree Type *</label>
  <select class="browser-default custom-select mb-2" id="defaultSelect">
        <option value="" disabled="" selected="">-Select Timezone-</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>    
    </select>
    <label for="defaultContactForm" clas="text-left">Degree name *</label>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Degree name">
    <label for="defaultContactForm" clas="text-left">Year of Completion *</label>
    <input type="number" id="defaultContactFormName" class="form-control mb-4" placeholder="Year of Completion">
    
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-sm">Update Password</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->      
</div>
 <hr class="teal accent-3 mb-0 mt-0 d-inline-block mx-auto" style="width: 100%;">
</div>
<div class="row d-flex  mb-4">
<div class="col-md-6 mb-6">
<div class="col-md-8 mb-8">
   <button class="btn btn-info btn-block" type="submit" data-toggle="modal" data-target="#centralModal5">Add new certificate</button>
<!-- Central Modal Small -->
<div class="modal fade" id="centralModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg" role="document">

    <div class="modal-content">
      <div class="modal-header justify-content-center" style="background-color: #560101">
        <h4 class="modal-title w-100 white-text text-center" id="myModalLabel">New Qualification</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form class="p-1">
    <label for="defaultContactForm" clas="text-left">Degree Type *</label>
  <select class="browser-default custom-select mb-2" id="defaultSelect">
        <option value="" disabled="" selected="">-Select Timezone-</option>
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>    
    </select>
    <label for="defaultContactForm" clas="text-left">Degree name *</label>
    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Degree name">
    <label for="defaultContactForm" clas="text-left">Year of Completion *</label>
    <input type="number" id="defaultContactFormName" class="form-control mb-4" placeholder="Year of Completion">
    
    </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary btn-sm">Update Password</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->   
</div>
</div>
</div>
</div>
</div>
</div>  

<div class="row d-flex justify-content-center mb-4">
<div class="col-md-2 mb-2">
   <button class="btn btn-info btn-block" type="submit">Update</button>
</div>  
</div> 
</section>

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
