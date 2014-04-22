<?php get_header(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title"><?php the_title(); ?></h1>
			
			</div>
		</section>

		<section class="whiteStrip">
			<div class="wrap">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

		   		<?php the_content(); ?>

				<?php endwhile; else: ?>
        
					<section class="notFound">
						<div class="wrap">
							<h1><?php _e('Sorry, we could not find what you are looking for.'); ?></h1>

			            	<div class="btn"><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></div>
			            </div>
				 	</section>
		            
		        <?php endif; ?>
			</div>
		</section>
	</main>

	<div style="clear:both"></div>

<?php get_footer(); ?>