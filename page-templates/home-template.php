<?php
/**
 * Template Name: Herstory: Home Page Template
 *
 * Template for displaying the Home Page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



<!-- Page Content -->
<div class="herstory-container container">

  <!-- Page Content -->
  <!-- picture carousel below  -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval=20000>
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="/wp-content/uploads/2019/06/periodsandraceNEW.jpg" alt="First slide">

          <div class="carousel-caption d-none d-md-block">
            <h1>Periods &amp; Race</h1>
            <p>A night talking about hard topics</p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/wp-content/uploads/2019/06/products2NEWEST.jpg" alt="Second slide">

          <div class="carousel-caption d-none d-md-block">
            <h1>Period Product Donations</h1>
            <p><a href="/donate" class="btn" id="home-btn-1">Donate Now</a></p>
          </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="/wp-content/uploads/2019/06/tedtalkNEW.jpg" alt="Third slide">

          <div class="carousel-caption d-none d-md-block">
            <h1>Ted Talk about the B.Y.O.T. Society</h1>
            <p><a href='/about' class="btn" id="home-btn-2">Learn More</a></p>
          </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <!-- end content -->

    <!--- edit content here -->
    <div class="row">
      <div class="col-sm-12 text-center">
        <h1 id="title">Rewrite <span>His</span>tory to <span>Her</span>story</h1>

      </div>
    </div>
    <!--icon bar-->
    <div class="row">
      <div class="col-sm-4">
        <a href="/about" class="icon-link"><i class='fas fa-info-circle' id="about"></i></a>
        <p>Learn About Us</p>
      </div>
      <div class="col-sm-4">
        <a href="/donate" class="icon-link"><i class='fas fa-gift' id="donate"></i></a>
        <p>Donate To HerStory</p>
      </div>
      <div class="col-sm-4">
        <a href="/volunteer" class="icon-link"><i class='fas fa-hand-holding-heart' id="volunteer"></i></a>
        <p>Learn About Volunteer Opportunities</p>
      </div>
    </div>

    <!-- end content -->

    <!-- "Get Free Period Products" button code-->
    <div class="row">
      <div class="col-sm-12">
        <div class="halfrow">
          Get Free Period Products!
          <p id="body"> <a href="free-products.html">Herstory is working to make sure period products are accessible in every restroom. Click here to find out more! </a> </p>
        </div>
      </div>
    </div>
    <!--end of button code-->

<?php get_footer(); ?>
