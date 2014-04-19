
<?php get_header(); ?>
		
		<main>
			<section class="whiteStrip">
				<div class="wrap">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
		   		
			   		<?php the_content(); ?>

					<?php endwhile; else: ?>

			 			<p>Sorry, no posts matched your criteria.</p>

			 		<?php endif; ?>
			 	</div>
			</section>
	 	</main>

<?php get_footer(); ?>