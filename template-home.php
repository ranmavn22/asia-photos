<?php
/**
 * Template Name: Home
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>
<?php
while (have_posts()) : the_post(); ?>
<div class="listImages">
    <?php
    $terms = get_terms('media_category', array(
        'order' => 'ASC',
        'orderby' => 'id',
    ));
    foreach ($terms as $term){
        $posts = get_posts(array(
            'post_type' => 'attachment',
                'posts_per_page' => -1,
                'post_status' => 'inherit',
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'media_category',
                        'field'    => 'slug',
                        'terms'    => $term->slug,
                    ),
                ),
            )
        );
        ?>
        <h2><?php echo $term->name ?></h2>
        <div class="listItem grid">
        <?php
        if(!empty($posts)) {
            foreach ($posts as $post) {
                $image = wp_get_attachment_image_src($post->ID, 'full');
                if ($image[1] >= $image[2]) {
                    $img = wp_get_attachment_image_src($post->ID, 'horizontal-thumbnail');
                } else {
                    $img = wp_get_attachment_image_src($post->ID, 'vertical-thumbnail');
                }
                ?>
                <a rel="gallery" class="lightBox grid-item" href="<?php echo $image[0] ?>" title="">
                    <img src="<?php echo $img[0] ?>" alt="">
                </a>
                <?php
            }
        }
        ?>
        </div>
        <?php
    }
    ?>
</div>
<?php endwhile; ?>
<?php
get_footer();
