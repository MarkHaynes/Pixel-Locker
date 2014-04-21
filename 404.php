<?php get_header(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title">Whoops!</h1>

				<span class="tagline">Something went wrong :(</span>
			
			</div>
		</section>

		<section class="notFound">

				<h1><?php _e('We could not find what you are looking for.'); ?></h1>

	            <div class="btn"><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></div>

	 	</section>
 	</main>

<?php get_footer(); ?>