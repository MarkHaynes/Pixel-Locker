
<?php get_header(); ?>
	
   		
	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title">Posts in: <?php single_cat_title() ?></h1>

				<span class="tagline">These posts are filed under the <?php single_cat_title() ?> category.</span>
			
			</div>
		</section>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="blogPost">

			<?php if ( has_post_thumbnail() ): ?>
				
			<section class="thumbStrip">
				<div class="postWrap">

					<div class="thumb">
	                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
	                </div>

				</div>
			</section>

			<?php  endif; ?>


			<section class="whiteStrip">
				<div class="postWrap">

					<h1 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

					<?php the_excerpt(); ?>

					<div class="postInfoWrap">
						<span class="postInfo"><?php the_time( 'D, jS F, Y' ); ?></span><span class="postInfo">Posted in: <?php the_category(' ~ '); ?></span>
					</div>

				</div>
			</section>
        </article>
        
        <?php endwhile; ?>

            <nav id="postsNav"><?php posts_nav_link(' ','« Newer','Older »'); ?></nav>
            
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