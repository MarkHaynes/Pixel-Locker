<?php get_header(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title">Pixel Blogger</h1>

				<span class="tagline">Here you can find out about our latest adventures and projects.</span>
			
			</div>
		</section>

		<?php query_posts('category_name=-blog&paged='.get_query_var('paged')) ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="blogPost">
			<section class="whiteStrip">
				<div class="postWrap">

					<?php if ( has_post_thumbnail() ): ?>

						<div class="thumb">
		                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
		                </div>

					<?php  endif; ?>
					
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