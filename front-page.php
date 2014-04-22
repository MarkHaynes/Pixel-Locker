<?php
/*
Template Name: Custom Front Page
*/

/* Custom Pages have to have the template data above */
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">

				<h1 class="title">Welcome to <img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png" height="30px"></h1>

				<span class="tagline">We are a friendly team that loves to design innovative and creative websites which comply with modern standards.</span>
			
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

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

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
				<div class="wrap">

		   			<?php the_content(); ?>

					<?php endwhile; else: ?>

		 				<p>Sorry, no posts matched your criteria.</p>

		 			<?php endif; ?>

				</div>		
			</div>
		</section>
	</main>
</div>

<?php get_footer(); ?>