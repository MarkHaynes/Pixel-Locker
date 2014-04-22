
<?php get_header(); ?>
	
   		
	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title">Posts in <?php single_cat_title() ?></h1>

				<span class="tagline">Here you can find out about our latest adventures and projects.</span>
			
			</div>
		</section>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="post">
			<section class="lightStrip">
				<div class="wrap">

					<h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

					<span class="postInfo"><?php the_time( 'D, jS F Y' ); ?> / / Posted in <?php the_category(', '); ?></span>
				
				</div>
			</section>

			<section class="whiteStrip">
				<div class="postWrap">

					<div class="thumb"></div>

					<?php if ( has_post_thumbnail() ): ?>
						<div class="thumb">
		                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
		                </div>
		            <?php  endif; ?>

					<?php the_excerpt(); ?>

				</div>

				<div class="readMore"><a href="<?php the_permalink() ?>">Read More</a></div>

		 	</section>

        </article>
        
        <?php endwhile; ?>

            <nav id="postsNav"><?php posts_nav_link(' ','« Newer Articles','Older Articles »'); ?></nav>
            
        <?php else: ?>
        
			<section class="notFound">
				<div class="wrap">
					<h1><?php _e('Sorry, we could not find what you are looking for.'); ?></h1>

	            	<div class="btn"><a href="<?php echo get_option('home'); ?>">Return to the homepage</a></div>
	            </div>
		 	</section>
            
        <?php endif; ?>

	</main>

	<div style="clear:both"></div>
	<?php get_footer(); ?>