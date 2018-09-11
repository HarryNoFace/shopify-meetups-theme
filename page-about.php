<?php /* Template Name: About Us */ ?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

				<?php the_content(); ?>
				<br class="clear">

		<?php endwhile; ?>

		<?php else: ?>

			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>