<?php
/*
This template for displaying the header
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes();?>" class="no-js">
<head>
  <meta charset="<?php bloginfo('charset');?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head();?>
</head>
<body <?php body_class();?> >
<header id="header_area" class="<?php echo get_theme_mod('akash_menu_position'); ?>" >
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('akash_logo'); ?>" alt=""></a>
      </div>
      <div class="col-md-9">
      <nav id="main_menu">
    <div class="inner_menu container">
      <?php wp_nav_menu(array('theme_location' => 'main_menu'))?>
    </div>
  </nav>
      </div>
    </div>
  </div>
</header>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php the_content();?>
      </div>
    </div>
  </div>
</section>

<footer id="footer_area">
<section id="copyright_area">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p><?php echo get_theme_mod( 'akash_copyright_section' ) ;?></p>
      </div>
    </div>
  </div>
</section>
</footer>

<?php wp_footer();?>
</body>
</html>