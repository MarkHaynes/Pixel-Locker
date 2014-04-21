<?php
/*
Template Name: Services Page
*/

/* Custom Pages have to have the template data above */
?>

<?php get_header(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title">What can we do for you?</h1>

				<span class="tagline">Our teams skill set gives us the ability to provide solutions tailored to meet your requirements.</span>
			
			</div>
		</section>

		<section class="whiteStrip">
			<div class="wrap">
					
				<h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

			</div>
		</section>
	</main>

	<div style="clear:both"></div>

<?php get_footer(); ?>