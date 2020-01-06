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
    <div class="container grid-container">
        <h1><?php the_title() ?></h1>
        <?php the_content()?>
    </div>
<?php endwhile; ?>
<?php
get_footer();
