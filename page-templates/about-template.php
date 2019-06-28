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
                HerStory was started in the summer of 2016 by then high school student, Bridget McManamon. In response to her own struggles with menstrual health and problematic periods, Bridget wanted to find a way to support other women and make sure all women had the resources they needed to manage their periods.
                <br/>
                <br/>
                Now 3 years later Herstory has raised over $13,000, distributed 3,500 period kits to women in need, launched a program to get free period products in schools and business restrooms and done a variety of programming that sparks conversation on menstrual health in hopes to end the period stigma. Herstory has received generous funding and support from Vital Voices, Ann Taylor, HERlead Fellowship, The Young Entrepreneurs Academy and The Fargo Moorhead West Fargo Chamber of Commerce. Bridget has spoken locally and nationally on the topic from New York, San Francisco, Washington DC and on the TED Stage.
              </p>
              <h2> Our <span>Mission</span></h2>
              <p class="paragraph">
                HerStory seeks to increase women’s access to menstrual hygiene products and empower them to have a better understanding of their physical wellbeing.
              </p>
              <h2> Our <span>Values</span> </h2>
              <p class="paragraph">
                At HerStory we value empowerment, healthy living and gender equality through access to menstrual products.
              </p>
              <h2> Our <span>Demographics</span> </h2>
              <p class="paragraph">
                Our programming is for all women,but we are trying to appeal to get funding from all sorts of people, not just women!
              </p>
              <h2> What We <span>Do</span></h2>
              <ol class="paragraph">
                <li>We work with local homeless shelter partners and international nonprofits to provide period kits and products to homeless and underprivileged women.</li>
                  <br/>
                  <li>We partner with local businesses and schools to get free period products in restrooms so they are accessible to all women.</li>
                    <br/>
                    <li>We have programming and events to spark conversation on periods</li>
                      <ul>
                        <li>We partnered with the Minority Inclusion Association for our Periods and Race event, a night of conversation about difficult topics.</li>
                        </ul>
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
