<?php /* Template Name: News & Updates */ ?>
<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- article -->
				<div class="container">
					<div class="row">
						<?php get_template_part('loop'); ?>
					</div>
				</div>

			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>