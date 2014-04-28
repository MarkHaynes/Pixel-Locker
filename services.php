<?php
/*
Template Name: Services Page
*/

/* Custom Pages have to have the template data above */
?>

<?php

	$child_pages = new WP_Query( array(
	    'post_type'      => 'page', // set the post type to page
	    'posts_per_page' => 10, // number of posts (pages) to show
	    'post_parent'    => $post->ID, // enter the post ID of the parent page
	) );

	 get_header();
?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title">What can we do for you?</h1>

				<span class="tagline">Our teams skill set gives us the ability to provide solutions tailored to meet your requirements.</span>
			
			</div>
		</section>

		<?php echo $parent_name; if ( $child_pages->have_posts() ) : while ( $child_pages->have_posts() ) : $child_pages->the_post(); ?>  

		<section id="<?php echo $post->post_name; ?>">
			<div class="serviceWrap">

				<?php if ( has_post_thumbnail() ): ?>

				<div class="serviceImg">
                    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute();?>"><?php the_post_thumbnail(); ?></a>
				</div>

				<?php  endif; ?>

				<div class="serviceDesc">	
					<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

					<?php the_excerpt(); ?>

					<div class="serviceBtn"><a href="<?php the_permalink() ?>">Find out more...</a></div>

				</div>
				<div class="clear"></div>
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

		<?php wp_reset_postdata(); ?>

	</main>

	<div style="clear:both"></div>

<?php get_footer(); ?>