<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="col-12 col-md-6 col-lg-4 content">
		<!-- article -->

			<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(array(350,180)); // Declare pixel size you need inside the array ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post details -->
			<h6 class="date"><?php the_time('d/m/Y - '); ?> <?php the_time('g:i A'); ?></h6>
			<!-- /post details -->

			<!-- post title -->
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="">
				<h2><?php the_title(); ?></h2>
			</a>
			<!-- /post title -->

			<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
		<!-- /article -->
	</div>
<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
