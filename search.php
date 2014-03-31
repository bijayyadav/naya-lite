<?php
/**
 * The template for displaying Search Results pages
 * @package sampression framework v 1.0
 * @theme naya 1.0
 */
if ( ! defined('ABSPATH')) exit('restricted access');
get_header();
?>
<!-- #header-->
<section class="block">
    <div class="container">
        <div id="content" class="<?php sampression_content_class() ?>">
            <?php if ( have_posts() ) : ?>
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php
                        get_template_part( 'content', get_post_format() );
                    ?>

                <?php endwhile; ?>

                <?php sampression_content_nav(); ?>

            <?php else : ?>

                <?php get_template_part( 'content', 'none' ); ?>

            <?php endif; ?>
            <!-- .post-->
        </div>
        <!-- #content-->
        <?php sampression_right_sidebar() ?>
    </div>
</section>
<!-- .block-->
<?php get_footer(); ?>