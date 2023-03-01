<?php get_header(); ?>

        
        

        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
              <article class="post">
                <?php $categories = get_the_category();
                foreach($categories as $category) {
                  echo "<a href=\"/category/" . $category->slug . "\" class=\"post__category post__category--color-" . $category->slug . "\">" . $category->name . "</a>";
                }
                ?>
                
                <h3><?php the_title() ?></h3>
                <div class="post__meta">
                  
                  
                  
                </div>
                <p><?php the_excerpt(); ?></p>
                </article>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Aucun article trouvé.</p>
        <?php endif; ?>

        </div>

<?php get_footer(); ?>
