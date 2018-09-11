<?php get_header(); ?>

	<main role="main">
		<section>
			<div class="container">
				<div class="row">
					<?php get_template_part('loop'); ?>
				</div>
				<hr>
				<div class="row">
					<?php get_template_part('loop'); ?>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
