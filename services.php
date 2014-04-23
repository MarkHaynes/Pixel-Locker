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

		<section id="design">
			<div class="wrap">
				<div class="serviceDesc">	
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="serviceBtn"><a href="<?php the_permalink() ?>">Find out more...</a></div>

				</div>
				<div class="clear"></div>
			</div>
		</section>

		<section id="develop">
			<div class="wrap">
				<div class="serviceDesc">	
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="serviceBtn"><a href="<?php the_permalink() ?>">Find out more...</a></div>

				</div>
				<div class="clear"></div>
			</div>
		</section>

		<section id="host">
			<div class="wrap">
				<div class="serviceDesc">	
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

					<div class="serviceBtn"><a href="<?php the_permalink() ?>">Find out more...</a></div>

				</div>
				<div class="clear"></div>
			</div>
		</section>
	</main>

	<div style="clear:both"></div>

<?php get_footer(); ?>