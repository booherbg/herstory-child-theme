<?php
/**
 * Template Name: Herstory: Free Products Template
 *
 * Template for displaying the Free Products Page
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>



  <div class="herstory-container container">
    <div class="row">
      <div class="col-sm-12" id="freeproducts">
        <span id="title"> Free Products </span>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 subtitle">
        <span> How to get these products </span>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-2 " id=text>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div id="text-1"> Herstory believes that if toilet paper, hand soap and
          paper towels are provided in public restrooms, period products should too.
          Herstory works with local businesses and schools to make sure period
          products are accessible in every restroom.  </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 subtitle">
          <span> Where to find these products </span>
        </div>
      </div>
      <!-- <list on the free products page> -->
      <div class="col-sm-12">

        <ul id="list">
          <li> The Prairie Den</li>
          <li> The Toasted Frog</li>
          <li> The Plains Art Museum</li>
          <li> Atomic Coffee</li>
          <li> Eyes on Broadway</li>
          <li> Mezzaluna</li>
          <li> Boots and Heels</li>
          <li> Ps and Qs Etuquette</li>
          <li> Fargo Brewing Company</li>
          <li> Country Financial</li>
          <li> Some Moorhead Public Schools</li>
          <li> Some Fargo Public Schools</li>
        </ul>
      </div>
      <div class="row">
        <!-- <picture on the free products page> -->
        <div class="col-sm-12">
          <img id=coverimage src="/wp-content/uploads/2019/06/products1.jpg" alt="menstrual products ">
        </div>
      </div>

<?php get_footer(); ?>
