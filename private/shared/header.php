<?php
$home="";
$features="";
$company="";
$new_blog="";
$triumps="";
$blog="";
if(!isset($currentpage)){
  $currentpage =" ";
}elseif ($currentpage=="home"){
$home="active";
}elseif ($currentpage=="features"){
$features="active";
}elseif ($currentpage=="company"){
$company="active";
}elseif ($currentpage=="new_blog"){
$new_blog="active";
}elseif ($currentpage=="triumphs"){
$triumphs="active";
}elseif ($currentpage=="blog"){
$blog="active";
}elseif ($currentpage=="contact"){
$contact="active";
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tilt The Pole</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,600,100" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href=" <?php echo WWW_ROOT . '/stylesheets/css/bootstrap.css'; ?>">
    <!-- <link rel="stylesheet" href="../public/stylesheets/css/bootstrap.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="<?php echo WWW_ROOT . '/stylesheets/styles.css'; ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .fa {
      padding:10px;
      font-size: 25px;
      width: 25px;
      text-align: center;
      text-decoration: none;
      list-style-type: none;
      color:black;
      vertical-align: top;
    }
  </style>



  </head>
<body>
    <div class="container">

    <header>
    <div class="row">
    <div class="col-md-12"> <!--Navigation Left-->

      <nav class="navbar navbar-expand-lg navbar-light ttp-navbar" style="background-color:white;">
        <a class="navbar-brand" href="#"> <img width="70px" src="<?php echo WWW_ROOT . '/images/ttp_logo.png';?>" alt=""> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-start" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item <?php echo $home; ?>">
              <a class="nav-link " href="<?php echo WWW_ROOT . '/index.php';?>"> Home </a>
            </li>
            <li class="nav-item <?php echo $features;?>">
              <a class="nav-link" href="<?php echo WWW_ROOT . '/features.php';?>">Features </a>
            </li>
            <li class="nav-item dropdown <?php echo $triumphs;?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tilt Triumphs
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo WWW_ROOT . '/triumphs.php';?>"> <strong>Tilt Triumphs</strong></a>
                <a class="dropdown-item" href="<?php echo WWW_ROOT . '/triumphs.php#sanibel';?>">Sanibel Island</a>
                <a class="dropdown-item" href="<?php echo WWW_ROOT . '/triumphs.php#captiva';?>">Captiva Island</a>
                <a class="dropdown-item" href="<?php echo WWW_ROOT . '/triumphs.php#patio';?>">Pool</a>
                <a class="dropdown-item" href="<?php echo WWW_ROOT . '/triumphs.php#beach';?>">Beach</a>
              </div>
            </li>
            <li class="nav-item <?php echo $company;?>">
              <a class="nav-link" href="<?php echo WWW_ROOT . '/company.php';?>">Company</a>
            </li>
            <li class="nav-item <?php echo $contact;?>">
              <a class="nav-link" href="<?php echo WWW_ROOT . '/contact.php';?>">Contact</a>
            </li>
            <li class="nav-item <?php echo $blog;?>">
              <a class="nav-link" href="<?php echo WWW_ROOT . '/blog.php';?>">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="https://resort-umbrella-solutions.com/store.php">Purchase Today</a>
            </li>
            <li class="nav-item">
              <img src="images/the-united-states-flag-icon.jpg" alt="" class="made_usa" width="60px">
            </li>
<li class="nav-item" style="margin-left:20px;">

              <a href="https://www.linkedin.com/in/davidyoungrus/" target="_blank" class="fa parler">
              <img href="https://parler.com/profile/TiltthePole/posts" src="images/Parler-Logo.png" width="25px" alt="">
              </a>

            <a href="https://www.linkedin.com/in/davidyoungrus/" target="_blank" class="fa fa-linkedin"></a>
            <a href="https://www.youtube.com/channel/UCaVMnUv0LIIPCf2554LAy0A" target="_blank" class="fa fa-youtube"></a>
            <a href="https://www.pinterest.com/2156lvdtaz6ic8n/" target="_blank" class="fa fa-pinterest"></a>

</li>

            </ul>

        </div>
      </nav>

    </div><!--col-->
    </div><!--row-->
  </header>
