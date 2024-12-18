<?php
/**
 * The Sidebar containing the main blog widget area
 *
 * @package Black Walnut
 * @since Black Walnut 1.0
 */

if ( ! is_active_sidebar( 'blog-sidebar' ) ) {
	return;
}
?>
<div id="blog-sidebar" class="default-sidebar widget-area" role="complementary">
	<?php dynamic_sidebar( 'blog-sidebar' ); ?>
</div><!-- end #blog-sidebar -->