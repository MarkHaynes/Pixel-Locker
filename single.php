
<?php get_header(); ?>

	<main>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<section class="lightStrip">
			<div class="wrap">
				
				
				<h1 class="title"><?php the_title(); ?></h1>

				<span class="postInfo"><?php the_time( 'D, jS F Y' ); ?> / / Posted in <?php the_category(', '); ?></span>
			
			</div>
		</section>

		<section class="whiteStrip">

			<?php if ( has_post_thumbnail() ): ?>
				<div class="thumb">
                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                </div>
            <?php  endif; ?>

			<div class="post">
	   		
		   		<?php the_content(); ?>

				<?php endwhile; else: ?>

		 			<h1>Sorry, no posts matched your criteria.</h1>

				<?php endif; ?>

	 		</div>
	 	</section>

 	</main>

<?php get_footer(); ?>