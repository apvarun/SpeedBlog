<?php get_header(); ?>
<div id="layout" class="pure-g">
    <?php get_sidebar(); ?>

    <div class="content pure-u-1 pure-u-md-3-4">
      <div class="posts">
          <h1 class="content-subhead">Recent Posts</h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!-- contents of the loop -->
          <?php get_template_part( 'content', get_post_format() ); ?>

      <?php endwhile; ?>
      <nav>
      	<ul class="pager">
      		<li><?php next_posts_link( 'Previous' ); ?></li>
      		<li><?php previous_posts_link( 'Next' ); ?></li><!--check-->
      	</ul>
      </nav>
      <?php endif; ?>
    </div>
      <?php get_footer(); ?>
