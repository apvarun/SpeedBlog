<div class="sidebar pure-u-1 pure-u-md-1-4">
    <div class="header">
        <h1 class="brand-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <h2 class="brand-tagline"><?php echo get_bloginfo( 'description' ); ?></h2>

        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="pure-button" target="_blank" href="<?php echo get_option('facebook'); ?>">Facebook</a>
                </li>
                <li class="nav-item">
                    <a class="pure-button" target="_blank" href="<?php echo get_option('twitter'); ?>">Twitter</a>
                </li>
                <li class="nav-item">
                    <a class="pure-button" target="_blank" href="<?php echo get_option('googleplus'); ?>">Google Plus</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
