<?php
/**
 * Template Name: Herstory: How To Donate Template
 *
 * Template for displaying the Donate Page
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

    <!--- This is where the dicription goes on why to donate------>
    <div class="row pink">
      <div class="col-sm-12">
        <h1 class="title"> Donate </h1>
        <h3><span class="pink-color"> Products</span> Donations</h3>
        <p><?php echo PostSnippets::getSnippet( 'donate_paragraph1', ''); ?></p>
          
        <h3><span class="pink-color"> Monetary</span> Donations</h3>
        <p><?php echo PostSnippets::getSnippet( 'donate_paragraph2', ''); ?></p>

        </p>
      </div>
    </div>

    <div class="row white" >
      <div class="col-sm-6" >
        <div class="halfrow">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_donations" />
        <input type="hidden" name="business" value="CT33WR6TTB4AG" />
        <input type="hidden" name="currency_code" value="USD" />
        <input type="image" src="/wp-content/uploads/2019/06/btn_imgs.jpg" class="ppbutton" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
        </form>

        </div>
      </div>
      <div class="col-sm-6" id="email">
        <div class="halfrow">
          <a target="_blank" href="mailto:herstorymn@gmail.com?subject=product%20donation"><img src="/wp-content/uploads/2019/06/email.png">
          </a>

            <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&source=mailto&to=herstorymn@gmail.com"></a>
          </div>
        </div>


      </div>

<?php get_footer(); ?>
