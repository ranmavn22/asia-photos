<?php
/**
 * The template for displaying the footer.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
</div><!-- #page -->
<footer>
    <div class="container grid-container">
    <?php
    if (is_active_sidebar('footer-1')) :
        dynamic_sidebar('footer-1');
    endif;
    ?>
    </div>
</footer>
<?php
wp_footer(); ?>

</body>
</html>
