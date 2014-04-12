<?php
/*
Template Name: Custom Front Page
*/

/* Custom Pages have to have the template data above */
?>

<?php get_header(); ?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="darkStrip">
			
			<div class="wrap">
				<h1>Welcome to <img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png" height="30px"></h1>

				<span>We are a friendly team that loves to design innovative and creative websites which comply with modern standards.</span>
			</div>
		
		</section>

		<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

		
   		
   		<?php the_content(); ?>

		<?php endwhile; else: ?>

 			<p>Sorry, no posts matched your criteria.</p>

 		<?php endif; ?>







<?php get_sidebar(); ?>
<?php get_footer(); ?>