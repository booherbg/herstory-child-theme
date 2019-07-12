<?php
/**
 * Template Name: Herstory: Volunteer Template
 *
 * Template for displaying the Volunteer Page
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

<!--- information paragraph codes -->
      <div class=row>
        <div class="col-sm-12">
          <span id="title">Get Involved</span>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <span id="heading">Volunteer</span>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <p id="body"><?php echo PostSnippets::getSnippet( 'volunteer_paragraph1', ''); ?></p>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <span id="heading">Donate</span>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <p id="body"><?php echo PostSnippets::getSnippet( 'volunteer_paragraph2', ''); ?></p>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <span id="heading">Support Us</span>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <p id="body"><?php echo PostSnippets::getSnippet( 'volunteer_paragraph3', ''); ?></p>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <span id="heading">Contact Us</span>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <p id="body">Instagram-@rewrite.herstory</p>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <p id="body">Facebook-rewriteherstory </p>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <p id="body">Phone-(701)-630-2087</p>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <p id="body">Email-herstorymn@gmail.com</p>
        </div>
      </div>

      <div class=row>
        <div class="col-sm-12">
          <span id="heading">Our Supporters</span>
        </div>
      </div>
<!---end info code -->

<!---images code -->
      <div class="row">
       <div class="col-lg-3 col-sm-6">
        <img class=logo src="/wp-content/uploads/2019/06/anntaylor.png"
        alt="Ann Taylor">
      </div>


       <div class="col-lg-3 col-sm-6">
        <img class=logo src="/wp-content/uploads/2019/06/vitalvoices.jpg" alt="Vital Voices">
       </div>


       <div class="col-lg-3 col-sm-6">
        <img class=logo src="/wp-content/uploads/2019/06/thechamber.jpg" alt="The Chamber">
       </div>


       <div class="col-lg-3 col-sm-6">
        <img class=logo src="/wp-content/uploads/2019/06/herlead.png" alt="Her Lead">
       </div>

       <div class="col-lg-3 col-sm-6">
        <img class=logo src="/wp-content/uploads/2019/06/youngentrepreneurs.jpg" alt="Young Entrepreneures">
       </div>
      </div>
<!---end images code -->
<?php get_footer(); ?>
