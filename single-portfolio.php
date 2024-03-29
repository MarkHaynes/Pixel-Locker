
<?php get_header(); ?>

	<main>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="post">
			<section id="topStrip">
				<div class="wrap">
					
					<h1 class="title"><?php the_title(); ?></h1>
				
				</div>
			</section>

			<?php if ( has_post_thumbnail() ): ?>
				
			<section class="lightStrip">
				<div class="portfolio-wrap">

						<div class="portfolio-thumb">
		                    <?php the_post_thumbnail('full'); ?>
		                </div>
						<div class="portfolio-excerpt">
		                	<p><?php the_excerpt(); ?></p>
		                </div>

				</div>
			</section>

			<?php  endif; ?>

			<section class="whiteStrip">
				<div class="contentWrap">
					
			   		<?php the_content(); ?>

		 		</div>
		 	</section>
		</article>

		<?php endwhile; else: ?>
        
			<section class="notFound">
				<div class="wrap">
					<h1><?php _e('Sorry, we could not find what you are looking for.'); ?></h1>

	            	<div class="btn"><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></div>
	            </div>
		 	</section>
            
        <?php endif; ?>

 	</main>

<?php get_footer(); ?>