<?php
/**
 * The template for displaying content in the single.php template
 *
 * @package Black Walnut
 * @since Black Walnut 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-details">
			<div class="entry-date">
				<a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
			</div><!-- end .entry-date -->
			<?php if ( comments_open() ) : ?>
			<div class="entry-comments">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'blackwalnut' ) . '</span>', __( 'comment 1', 'blackwalnut' ), __( 'comments %', 'blackwalnut' ) ); ?>
			</div><!-- end .entry-comments -->
			<?php endif; // comments_open() ?>
			<?php edit_post_link( __( 'Edit', 'blackwalnut' ), '<div class="entry-edit">', '</div>' ); ?>
		</div><!-- end .entry-details -->
	</header><!-- end .entry-header -->

	<?php if ( '' != get_the_post_thumbnail() && ! post_password_required() &&  ! get_theme_mod('hide_singlethumb') ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail('blackwalnut-single'); ?>
		</div><!-- end .entry-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'blackwalnut' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- end .entry-content -->

	<footer class="entry-meta cf">
		<div class="entry-cats">
			<span><?php _e('Category', 'blackwalnut') ?></span><?php the_category(' '); ?>
		</div><!-- end .entry-cats -->
		<?php $tags_list = get_the_tag_list();
			if ( $tags_list ): ?>
				<div class="entry-tags"><span><?php _e('Tags', 'blackwalnut') ?></span><?php the_tags('', ' ', ''); ?></div>
		<?php endif; // get_the_tag_list() ?>

		<?php if ( get_the_author_meta( 'description' ) ): ?>
			<div class="authorbox cf">
				<div class="author-info">
					<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'blackwalnut_author_bio_avatar_size', 90 ) ); ?>
					<h3 class="author-name"><span><?php _e('by ', 'blackwalnut') ?></span><?php printf( "<a href='" .  esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . "' rel='author'>" . get_the_author() . "</a>" ); ?></h3>
					<p class="author-description"><?php the_author_meta( 'description' ); ?></p>
				</div><!-- end .author-info -->
			</div><!-- end .author-wrap -->
		<?php endif; ?>
	</footer><!-- end .entry-meta -->

</article><!-- end .post-<?php the_ID(); ?> -->