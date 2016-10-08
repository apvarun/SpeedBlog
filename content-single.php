<section class="post" itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
    <header class="post-header">
        <img class="post-avatar" alt="<?php the_author(); ?>" height="48" width="48" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>">

        <h2 class="post-title"><?php the_title(); ?></h2>
        <?php $categories = get_the_category(); ?>
        <p class="post-meta">
            By <a class="post-author" href="#"><?php the_author(); ?></a> under <a class="post-category post-category-js" href="<?php esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo esc_html( $categories[0]->name ); ?></a> on <?php the_date(); ?>
        </p>
    </header>

    <div class="post-description">
        <p></p>
        <?php if ( has_post_thumbnail() ) {?>
          <div class="pure-img">
          <?php the_post_thumbnail('medium_large',array('itemprop'=>'image' ) ); ?>
          </div>
        <?php } ?>
        <p>
          <?php the_content(); ?>
        </p>
    </div>
</section>
