<?php
/**
 * Template Name: Herstory: About Page Template
 *
 * Template for displaying the About Page
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



    <!--- edit content here -->
    <div class="row">
      <div class="col-sm-12 text-center">

        <div class="row">
          <div class="col-lg-6">
            <div class="halfrow">
              <!--spans allow for multi-color text-->
              <h1 id="title">About <span>Her</span>Story</h1>
              <h2> Our <span>Origins</span></h2>
              <p class="paragraph">
                <?php echo PostSnippets::getSnippet( 'about_paragraph1', ''); ?>
              </p>
              <h2> Our <span>Mission</span></h2>
              <p class="paragraph">
                <?php echo PostSnippets::getSnippet( 'about_paragraph2', ''); ?>
              </p>
              <h2> Our <span>Values</span> </h2>
              <p class="paragraph">
                <?php echo PostSnippets::getSnippet( 'about_paragraph3', ''); ?>
              </p>
              <h2> Our <span>Demographics</span> </h2>
              <p class="paragraph">
                <?php echo PostSnippets::getSnippet( 'about_paragraph4', ''); ?>
              </p>
              <h2> What We <span>Do</span></h2>
              <ol class="paragraph">
                <?php echo PostSnippets::getSnippet( 'about_paragraph5', ''); ?>
                </ol>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="halfrow">
                <h2 > Our <span>Founder</span> <h2>
                  <!--new row helps with img edits-->
                  <div class= "row">
                    <div class= "col-lg-6">
                      <figure>
                        <img id=bridget_headshot  src="/wp-content/uploads/2019/06/bridget_headshot.jpg" alt="Bridget in Fargo Inc black&white"/>
                        <figcaption id=caption>Bridget <span>McManamon</span></figcaption>
                      </figure>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <h2> Bridget's 2017 <span>TED</span> talk </h2>
                      <!--iframes works to embed youtube videos (to get code for embeded video, click share, embed, then copy&paste)-->
                      <iframe width="530" height="295" src="https://www.youtube.com/embed/tBpR5GiCA10" frameborder="0"
                      allow="accelerometer; encrypted-media;
                      gyroscope; picture-in-picture" allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>
