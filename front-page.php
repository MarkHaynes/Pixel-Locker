<?php
/*
Template Name: Custom Front Page
*/

/* Custom Pages have to have the template data above */
?>

<?php get_header(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<img id="featuredImg" alt="Responsive web design." src="<?php bloginfo('template_url'); ?>/images/responsivedesign.png"><!--
				<img id="featuredImg" alt="Responsive web design." src="<?php bloginfo('template_url'); ?>/images/responsivedesign.jpg"><!--
				--><div id="featuredDesc">

					<img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png">

					<h1 class="title">Responsive web design</h1>

					<ul id="featuredList">
						<li>Appeal to a new generation of internet users.</li>
						<li>Turn your mobile visitors into customers.</li>
						<li>Fully flexible, responsive websites.</li>
					</ul>

					<div class="featuredBtn"><a href="<?php the_permalink()?>" alt="<?php echo the_title(); ?>">Contact Us Now!</a></div>

				</div>

			</div>
		</section>

		<section class="lightStrip">
			<div class="wrap">

					<h1 class="title">Always happy to help,</h1>

					<span class="tagline">We pride ourselves in our ability to provide all that you need to get started on the web. Our team has you covered...</span>

				<div class="strip">
					<ul id="servicesList">
						<li class="serviceBox design">
							
							<img class="serviceIcon" alt="Design Icon" src="<?php bloginfo('template_url'); ?>/images/wedesign.png">

							<h2 class="designT">We Design</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li><!--
						--><li class="serviceBox dev">
							
							<img class="serviceIcon" alt="Develop Icon" src="<?php bloginfo('template_url'); ?>/images/wedevelop.png">

							<h2 class="devT">We Develop</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li><!--
						--><li class="serviceBox host">
							
							<img class="serviceIcon" alt="Host Icon" src="<?php bloginfo('template_url'); ?>/images/wehost.png">

							<h2 class="hostT">We Host</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li>
					</ul>
				</div>
				<div>

					<h3 class="subHeading">We have a lot to offer.</h3>

					<div class="btn"><a href="#">Read More</a></div>

				</div>
			</div>
		</section>

		<section class="whiteStrip">
			<div class="wrap">
				<div id="meetTheTeam">
					<div id="teamDesc">
						<h1>Meet The Team</h1>
					</div><!--
					--><div id="teamMembers">
						<div class="teamMember">

							<img class="memberAvatar" alt="Photo Of Mark" src="<?php bloginfo('template_url'); ?>/images/avatar.png" height="30px"><!--
							--><div class="memberDesc">
								<h2>Mark Haynes</h2>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

								<div class="btn"><a href="#">Personal Website</a></div>
							</div>
						</div><!--
						--><div class="teamMember">

							<img class="memberAvatar" alt="Photo Of Chris" src="<?php bloginfo('template_url'); ?>/images/avatar.png" height="30px"><!--
							--><div class="memberDesc">
								<h2>Chris Huxley</h2>

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

								<div class="btn"><a href="#">Personal Website</a></div>
							</div>
						</div>
					</div>
				</div>
		</section>

		<section class="lightStrip">
			<div class="wrap">
				<h1 class="title"> Featured Work </h1>
				<span class="tagline">We have worked on many exciting projects, feel free to take a look around...</span>

				<div class="strip">
					<ul id="portfolioList">

					<?php query_posts( array( 'category_name' => 'portfolio', 'posts_per_page' => 6 ) );
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			   			<li class="portfolioBox">
			   			<div class="boxContainer">
			   				<?php if (has_post_thumbnail( $post->ID ) ){
							 	$featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'portfolio-list-thumbnail' );?>
									<div class="portfolioThumb">
					                    <a href="<?php the_permalink() ?>">
					                    	<img src="<?php echo $featuredImage[0]; ?>" class="portfolio-thumbnail" title="<?php the_title_attribute();?>" alt="<?php echo the_title();?>">
					                    </a>
					                </div>
							<?php } ?>

			   				<h1><a href="<?php the_permalink() ?>"><?php the_title()?></a></h1>

							<p><?php echo get_portfolio_excerpt(270);?></p>
							<div class="btn">
								<a class="portfolioLink" href="<?php the_permalink()?>" alt="<?php echo the_title(); ?>">Take a Look</a>
							</div>
						</div>
			   			</li>

					<?php endwhile; else: ?>

			 			<li><p>Sorry, no posts matched your criteria.</p></li>

		 			<?php endif; ?>
		 			<?php wp_reset_query(); ?>

		 			</ul>
		 		</div>
		 	</div>
		</section>
	</main>
<?php get_footer(); ?>