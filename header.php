<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
   exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="profile" href="http://gmpg.org/xfn/11">


     <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC&display=swap" rel="stylesheet">

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>

<div class="site" id="page">

   <!-- ******************* The Navbar Area ******************* -->
     <!-- Navigation -->
      <nav class="navbar navbar-expand-lg navbar-dark herstory-nav static-top">
          <div class="container">
            <a href="home.html" class="navbar-left"><?= the_custom_logo(); ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

               <!-- The WordPress Menu goes here -->
               <?php wp_nav_menu(
                  array(
                     'theme_location'  => 'primary',
                     'container_class' => 'collapse navbar-collapse',
                     'container_id'    => 'navbarResponsive',
                     'menu_class'      => 'navbar-nav ml-auto',
                     'fallback_cb'     => '',
                     'menu_id'         => 'main-menu',
                     'depth'           => 2,
                     'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                  )
               ); ?>

         </div><!-- .container -->
      </nav><!-- .site-navigation -->
