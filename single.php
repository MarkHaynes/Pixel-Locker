
<?php get_header(); ?>

	<main>
		<section class="lightStrip">
			<div class="wrap">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<h1 class="title"><?php the_title(); ?></h1>

				<span class="meta"><?php the_time( 'D, jS F Y' ); ?> / / Posted in <?php the_category(', '); ?></span>
			
			</div>
		</section>

		<section class="whiteStrip">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				<div class="post">
		   		
			   		<?php the_content(); ?>

					<?php endwhile; else: ?>

			 			<p>Sorry, no posts matched your criteria.</p>

			 		<?php endif; ?>

		 		</div>
	 	</section>
 	</main>

<?php get_footer(); ?>