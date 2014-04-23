
<?php get_header(); ?>

	<main>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<article class="post">
			<section id="topStrip">
				<div class="wrap">
					
					<h1 class="title"><?php the_title(); ?></h1>

					<span class="postInfo">Posted in: <?php the_category(' ~ '); ?> ( <?php the_time( 'D, jS F, Y' ); ?> ) </span>
				
				</div>
			</section>

			<section class="lightStrip">
				<div class="wrap">

					<?php if ( has_post_thumbnail() ): ?>
						<div class="thumb">
		                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
		                </div>
		            <?php  endif; ?>

		        </div>
			</section>

			<section class="whiteStrip">
				<div class="postWrap">
		   		
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