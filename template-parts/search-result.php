<article <?php post_class() ?> id="post_<?php the_ID(); ?>">
    <h2><a href="<?php the_permalink(); ?>"><?=ucfirst(get_post_type())?>: <?php the_title(); ?></a></h2>
    <small class="permalink"><a href="<?php the_permalink(); ?>"><?=75 >= strlen($permalink = str_replace(get_bloginfo('url'), '', get_the_permalink())) ? $permalink : substr($permalink, 0, 74) . '...' ?></a></small>
    <div class="excerpt"><?php the_excerpt(); ?></div>
</article>