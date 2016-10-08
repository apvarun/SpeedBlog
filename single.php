<?php get_header(); ?>
<div id="layout" class="pure-g">
    <?php get_sidebar(); ?>

    <div class="content pure-u-1 pure-u-md-3-4">
      <div class="posts">

        <?php
  				if ( have_posts() ) : while ( have_posts() ) : the_post();

  					get_template_part( 'content-single', get_post_format() );

            if ( comments_open() || get_comments_number() ) :
          	  comments_template();
          	endif;

  				endwhile; endif;
  			?>
    </div>
      <?php get_footer(); ?>
