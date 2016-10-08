<?php get_header(); ?>
<div id="layout" class="pure-g">
    <?php get_sidebar(); ?>

    <div class="content pure-u-1 pure-u-md-3-4">
      <div class="posts">

        <?php
  				if ( have_posts() ) : while ( have_posts() ) : the_post();

  					get_template_part( 'content', get_post_format() );

  				endwhile; endif;
  			?>
    </div>
      <<?php get_footer(); ?>
