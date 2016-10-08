            <section class="post">
                <header class="post-header">
                    <img class="post-avatar" alt="<?php the_author(); ?>" height="48" width="48" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>">

                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php $categories = get_the_category(); ?>
                    <p class="post-meta">
                        By <a class="post-author" href="#"><?php the_author(); ?></a> under <a class="post-category post-category-js" href="<?php esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo esc_html( $categories[0]->name ); ?></a> on <?php the_date(); ?> | <a href="<?php comments_link(); ?>">
	<?php
	printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
</a>
                    </p>
                </header>

                <div class="post-description">
                  <p>
                      <?php if ( has_post_thumbnail() ) {?>
                        <?php	the_post_thumbnail('medium'); ?>
                      <?php } ?>
                      <?php the_excerpt(); ?>
                    </p>
                </div>
            </section>
