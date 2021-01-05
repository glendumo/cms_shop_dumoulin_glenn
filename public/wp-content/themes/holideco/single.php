<?php get_header(); ?>

<div class="container post">
    <div class="row post-info">
        <div class="col-6 post-info--main">
            <h1>
                <a href="<?php echo site_url('nieuws'); ?>">Nieuws</a> > <?php the_title(); ?>
            </h1>
            <div class="post-info--item">
                <h4>Auteur</h4>
                <?php the_author_posts_link(); ?>
            </div>
            <div class="post-info--item">
                <h4>Categorieën</h4>
                <?php 
                    if (!has_category('Uncategorized')) {
                        the_category(null);
                    }
                    else { ?>
                        <span>Geen categorieën</span>
                    <?php }
                ?>
            </div>
            <div class="post-info--item">
                <h4>Tags</h4>
                <?php 
                    if (has_tag()) {
                        the_tags('', null, '');
                    }
                    else { ?>
                        <span>Geen tags</span>
                    <?php }
                ?>
            </div>
        </div>
        <div class="col-6 post-info--img">
            <?php the_post_thumbnail('large'); ?>
        </div>
    </div>
    <div class="post-content"><?php the_content(); ?></div>
</div>

<?php get_footer(); ?>