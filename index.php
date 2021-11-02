<?php
/*
This template for displaying the header
 */

?>

<?php get_header();?>

<section id="body_area">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <?php
if (have_posts()):
    while (have_posts()): the_post();
        ?>
		        <div class="blog_area">
		          <div class="post_thumbnail">
		          <a href="<?php the_permalink();?>">
		            <?php
        echo the_post_thumbnail('post-thumbnails');
        ?>
		            </a>
		          </div>
		          <div class="post_details">
		          <h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
		            <?php the_excerpt();?>
		          </div>
		        </div>
		        <?php
    endwhile;
else:

    _e("No post found");

endif

?>
<div id="page_nav">
  <?php if('akash_pagenav'){akash_pagenav();} else{?>
    <?php next_posts_link();?>
    <?php previous_posts_link();?>
    <?php }?>
</div>

      </div>
      <div class="col-md-3">
     <h1>This is sidebar area</h1>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
?>

<?php wp_footer();?>
</body>
</html>