<?php get_header(); ?>

<div class="container page--zoeken">
    <a href="<?php echo esc_url(site_url('zoeken')) ?>">
        <?php _e('Back to search', 'holideco'); ?>
    </a>

    <h1>
        <?php _e('Searchresults for', 'holideco'); ?> <?php the_search_query() ?>
    </h1>

    <?php get_search_form() ?>

    <div class="row result-containers">
        <div class="col-4 pages-container">
            <h2><?php _e('Pages', 'holideco'); ?></h2>
            <ul class="all-results">
                <?php

                $pageResults = new WP_Query(array(
                    'post_type' => 'page',
                    's' => get_search_query(),
                ));

                while ($pageResults->have_posts()) { $pageResults->the_post() ?>
                    <?php get_template_part( 'components/search/result' ); ?>
                <?php } ?>
            </ul>
        </div>
        <div class="col-4 posts-container">
            <h2><?php _e('Posts', 'holideco'); ?></h2>
            <ul class="all-results">
                <?php

                $postResults = new WP_Query(array(
                    'post_type' => 'post',
                    's' => get_search_query(),
                ));

                while ($postResults->have_posts()) { $postResults->the_post() ?>
                    <?php get_template_part( 'components/search/result' ); ?>
                <?php } ?>
            </ul>
        </div>
        <div class="col-4 events-container">
            <h2><?php _e('Events', 'holideco'); ?></h2>
            <ul class="all-results">
                <?php

                $eventResults = new WP_Query(array(
                    'post_type' => 'event',
                    's' => get_search_query(),
                ));

                while ($eventResults->have_posts()) { $eventResults->the_post() ?>
                    <?php get_template_part( 'components/search/result' ); ?>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>