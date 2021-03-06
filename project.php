<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<html lang="en" >
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enok Madrid</title>

    <!-- Vendor CSS -->
    <link href="../vendors/animate-css/animate.min.css" rel="stylesheet">
    <link href="../vendors/material-icons/material-design-iconic-font.min.css" rel="stylesheet">
    <link href="../vendors/socicon/socicon.min.css" rel="stylesheet">

    <!-- CSS -->
    <link href="../css/app.min.1.css" rel="stylesheet">
    <link href="../css/app.min.2.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/main.css"  media="screen,projection"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>

<?php
  $project = 'true';
  include('partials/header.php');
?>


<!--  PROJECT  -->
<section class="jumbotron project" style="background-image:url('../img/project.jpg')">
    <div class="container cta text-center">
        <h1 ><small class="c-white">Anthem Vault</small></h1>
    </div>
</section>
<!--  END PROCESS -->



</div><!-- End hero-image -->




<section class="project-view">
  <div class="container">

    <p class="introduction">
    There was about to be a monumental change in the Gold industry. I was brought on to clean up their Identity and bring a world class look to a world class company.
    </p>

    <div class="row m-t-25">

      <div class="project-info col-sm-3">
          <h4>Project Info</h4>
          <b>Client:</b>
          <p>Anthem Vault, one of the leader in Gold industry and Economics.</p>

          <ul>
            <li>Research</li>
            <li>UX</li>
            <li>Wireframes</li>
            <li>Style Guides</li>
            <li>Illustrations</li>
            <li>UI Design</li>
            <li>Front-End Dev</li>
          </ul>

          <a class="btn c-white no-shadow"><i class="md-share"></i> Share this project</a>
      </div>


      <div class="project-about col-sm-8 col-sm-offset-1">
          <h3 class="project-title">The Challenge</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>

          <h3 class="project-title-work">Getting to Work</h3>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
      </div>



    </div>

  </div>
</section>


<section class="project-images">
  <div class="container">
      <img src="http://placehold.it/1140x500" alt=""/>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <img src="http://placehold.it/1140x500" alt=""/>
      <img src="http://placehold.it/1140x500" alt=""/>

  </div>
</section>




<!-- PORTFOLIO SECTION -->
<section class="portfolio">
    <div class="container-fluid">
        <div class="row">

          <?php
            $x = 1;
            while($x <= 3) { ?>

             <a href="project.php" class="project col-lg-4 col-sm-6 col-xs-12">
                 <div class="project-info">
                   <h4 class="project-title">Project Title Here</h4>
                   <!-- <span class="project-description">Project Description</span> -->
                   <ul class="project-tags">
                     <li>Research</li>
                     <li>UX</li>
                     <li>UI Design</li>
                     <li>Front-End Development</li>
                   </ul>
                 </div>
                 <img src="img/mac.jpg" alt="Project" class="project-img img-responsive"/>
             </a>

           <?php $x++; } ?>

        </div>
    </div>
</section>
<!-- END PORTFOLIO SECTION -->

<section class="view-process">
    <div class="container c-white">
      <div class="row">

            <a href="process.php" class="process-link tk-futura-pt">View Process <i class="fa fa-arrow-right c-white"></i></a>

      </div>
    </div>
</section>




<?php include('partials/footer.php'); ?>


<!-- Javascript Libraries -->
<script src="../js/jquery-2.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="https://use.typekit.net/ouo0ddh.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<script src="../vendors/auto-size/jquery.autosize.min.js"></script>
<script src="../vendors/nicescroll/jquery.nicescroll.min.js"></script>
<script src="../vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="../vendors/waves/waves.min.js"></script>

<script src="../js/functions.js"></script>

<!-- CUSTOM SCRIPTS -->
<script src="../js/app.js"></script>

</body>
</html>
