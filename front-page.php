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

			<div class="cycle-slideshow" data-cycle-speed="1000" data-cycle-fx="fade">
			    <img alt="Responsive web design." src="<?php bloginfo('template_url'); ?>/images/responsivedesign.png">
				<img alt="Responsive web design." src="<?php bloginfo('template_url'); ?>/images/responsivedesign2.png">
				<img alt="Responsive web design." src="<?php bloginfo('template_url'); ?>/images/responsivedesign3.png">
			</div><!--
				--><div id="featuredDesc">

					<img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png">

					<h1 class="title">Responsive web design</h1>

					<ul id="featuredList">
						<li>Pixel Locker is a Website Design company based in Stoke on Trent, Staffordshire. We create bespoke
						responsive websites for our clients. Whether your a small SME or larger business we want to work with you on your
						next project.</li>
					</ul>

					<div class="featuredBtn"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" alt="Contact US">Request a Quotation.</a></div>

				</div>
				<div style="clear:both"></div>
			</div>
		</section>

		<section class="purpleStrip">
							<div class="strip">
					<div class="promo">
						<div class="promo-img">
							<img src="<?php bloginfo('template_url'); ?>/images/starterpackage-smaller.png" alt="Starter Package">
						</div>

						<div class="promo-details">
							<h1> Starter Package </h1>
							<ul>
								<li>A Bespoke Website Using the Wordpress Content Management System.</li>
								<li>Up to 5 pages of your choosing. (We can be add more if you wish)</li>
								<li>A contact page with Google Map integration and an enquiry form.</li>
								<li>Guides on how to use your new system plus 3 months of support.</li>
								<li>Free Website hosting for 12 months.</li>
								<li>Free Unlimited Email accounts for 12 months.</li>
								<li>Free .co.uk domain if you require one.</li>
							</ul>

							<a class"promo-link" href="<?php echo get_permalink(get_page_by_path('websites/starter-package')); ?>" alt="Find Out More">Find Out More</a>
						</div>

						<div style="clear: both"></div>
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

							<p>We love to create unique designs that meet your requirements and complement your brand.</p>
							<p>Our approach to design focuses on human experience to ensure that your message is absorbed by your audience clearly and concisely.</p>

						</li><!--
						--><li class="serviceBox dev">
							
							<img class="serviceIcon" alt="Develop Icon" src="<?php bloginfo('template_url'); ?>/images/wedevelop.png">

							<h2 class="devT">We Develop</h2>

							<p>We enjoy a challenge and thrive on developing the perfect solution to a problem.</p>
							<p>Our development process is fuelled by your ideas, allowing us to realise the best solution that will promote success for your business online.</p>

						</li><!--
						--><li class="serviceBox host">
							
							<img class="serviceIcon" alt="Host Icon" src="<?php bloginfo('template_url'); ?>/images/wehost.png">

							<h2 class="hostT">We Host</h2>

							<p>We understand that choosing the most suitable web host can be difficult, so we keep things simple.</p>
							<p>Every client who we design a website for is offered Web Hosting. We set it up, optimise it and can fully manage it for you if you wish.</p>

						</li>
					</ul>
				</div>
				<div>

					<h3 class="subHeading">We have a lot to offer.</h3>

					<div class="btn"><a href="<?php echo get_permalink(get_page_by_path('websites')); ?>" alt="Read More">Read More</a></div>

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

							<img class="memberAvatar" alt="Photo Of Mark" src="<?php bloginfo('template_url'); ?>/images/avatar-mark.jpg" height="70px"><!--
							--><div class="memberDesc">
								<h2>Mark Haynes</h2>

								<p>"I specialise in Wordpress Development and look forward to working with our clients using my skills obtained from my Degree to create the very best experiences."</p>

							</div>
						</div><!--
						--><div class="teamMember">

							<img class="memberAvatar" alt="Photo Of Chris" src="<?php bloginfo('template_url'); ?>/images/avatar-chris.jpg" height="70px"><!--
							--><div class="memberDesc">
								<h2>Chris Huxley</h2>

								<p>"I graduated from University with a Degree in Web Development, and look forward to using my skills in Graphic and Web Design to bring your project to life."</p>
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
					                    <a href="<?php the_permalink() ?>" alt="<?php echo the_title(); ?>">
					                    	<img src="<?php echo $featuredImage[0]; ?>" class="portfolio-thumbnail" title="<?php the_title_attribute();?>" alt="<?php echo the_title();?>">
					                    </a>
					                </div>
							<?php } ?>

			   				<h1><a href="<?php the_permalink() ?>" alt="<?php echo the_title(); ?>"><?php the_title()?></a></h1>

							<p><?php echo get_portfolio_excerpt(270);?></p>
							<div class="btn">
								<a class="portfolioLink" href="<?php the_permalink()?>" alt="<?php echo the_title(); ?>" alt="<?php echo the_title(); ?>">Take a Look</a>
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
