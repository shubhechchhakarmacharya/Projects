<!doctype html>
<html lang="en">


<?php
    $number = "0413 064 043";
    $email = "info@4eceramics.com.au";
    $address = "Greenacre, NSW, 2190";
    $abn = "60 638 830 209";
    $owner = "Elie";
    $company = "4E Ceramics";
?>

<head>
  <!-- Meta -->
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $company; ?></title>

  <!-- LInks -->
  <!-- Boostrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- FontAwesome version 4.7 -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- FontAwesome version 5.8 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <!-- Simple Line Icons -->
  <link rel="stylesheet" href="css/simple-line-icons.css">

  <!-- Animate Css -->
  <link rel="stylesheet" href="css/animate.min.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="css/magnific-popup.css">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <!-- Jquery UI 1.12.1 -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

  <!-- Slick Slider -->
  <link rel="stylesheet" href="css/slick.min.css">


  <!-- Custom Style -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">

</head>
<!-- End of Head Section -->

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
          <figure>
            <img src="images/logo.png" alt="">
          </figure>
        </a>
        <button type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
          aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler">
          <img src="images/menu2.png" alt="">
        </button>
        <div class="collapse navbar-collapse text-right" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item <?php if($page== 'home'){echo 'active';} ?>">
              <a href="./" class="nav-link">Home</a>
            </li>

            <li class="nav-item <?php if($page== 'about'){echo 'active';} ?>">
              <a href="about" class="nav-link">About Us</a>
            </li>

            <li class="nav-item <?php if($page== 'services'){echo 'active';} ?>">
              <a href="services" class="nav-link">Services</a>
            </li>

            <li class="nav-item <?php if($page== 'gallery'){echo 'active';} ?>">
              <a href="gallery" class="nav-link">Gallery</a>
            </li>

            <li class="nav-item <?php if($page== 'contact'){echo 'active';} ?>">
              <a href="contact" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- Header Ends -->