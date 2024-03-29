<?php get_header(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
					$cat_title = single_cat_title('',false);;

					if (false !== strpos($url,'/category/')) {
					    $top_title = 'Posts in: '. $cat_title;
					    $top_tagline = 'These posts are filed under the '. $cat_title .' category.';
					} else {
					    $top_title = "Pixel Blogger";
					    $top_tagline = "Here you can find out about our latest adventures and projects.";
					}

				?>	
				<h1 class="title"><?php echo $top_title;?></h1>
				<span class="tagline"><?php echo $top_tagline;?></span>
			
			</div>
		</section>

		<?php query_posts('category_name=-blog&paged='.get_query_var('paged')) ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article class="blogPost">

			<section class="whiteStrip">
				<div class="postWrap">

				<?php if (has_post_thumbnail( $post->ID ) ){ ?>
					<?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'blog-list-thumbnail' );?>

					<div class="thumb">
	                    <a href="<?php the_permalink() ?>">
	                    	<img src="<?php echo $featuredImage[0]; ?>" class="blog-list-thumbnail" title="<?php the_title_attribute();?>" alt="<?php echo the_title();?>">
	                    </a>
	                </div>

					<?php } ?>

					<h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

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