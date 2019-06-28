<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

      <div class="row page-footer">
        <!---footer info -->
        <div class="col-sm-12 footer-copyright text-center">© 2019 rewriteherstory.org

          <div class="col-sm-12 footer-copyright text-center"> <a href="https://www.facebook.com/rewrite.herstory/" target="_blank">Facebook-rewriteherstory</a>
            <div class"col-sm-12 footer-copyright text-center"> <a href="https://www.instagram.com/rewrite.herstory/" target="_blank">Instagram-@rewrite.herstory</a>
    </div>
            <div id="mc_embed_signup_scroll">
              <label for="mce-EMAIL">Subscribe to our email list</label>
              <br/>
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdadfe01e219f8a377491f8f6_0cf51ed0f8" tabindex="-1" value=""></div>
              <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>

            </div>
          </div>
        </div>
      </div>

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>
</body>

</html>

