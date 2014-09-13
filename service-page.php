<?php
/*
Template Name: Custom Service Page
*/

/* Apply this page to each service page so design, devlop and host. The id in the first section will pull in the slug of the page and apply the right colour and other styles to the header. Then you can just enter the content in the wordpress page editor. */
?>
<?php get_header(); ?>

	<main>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section id="<?php echo $post->post_name; ?>" class="service">

			<div class="serviceHeaderWrap">

				<?php if ( has_post_thumbnail() ): ?>

				<div class="servicePageImg">
                    <?php the_post_thumbnail('medium'); ?>
				</div>

				<?php  endif; ?>

				<h1 class="title"><?php the_title(); ?></h1>

			</div>
		</section>

		<section class="whiteStrip">
			<div class="contentWrap">
				
		   		<?php the_content(); ?>

	 		</div>
	 	</section>

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