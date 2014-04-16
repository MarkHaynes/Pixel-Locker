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

				<span class="subtitle">We are a friendly team that loves to design innovative and creative websites which comply with modern standards.</span>
			
			</div>
		</section>

		<section class="lightStrip">
			<div class="wrap">

					<h1 class="title">Always happy to help,</h1>

					<span class="subtitle">We pride ourselves in our ability to provide all that you need to get started on the web. Our team has you covered...</span>

				<div class="strip">
					<ul id="servicesList">
						<li class="serviceBox">
							
							<img class="serviceIcon" alt="Design Icon" src="<?php bloginfo('template_url'); ?>/images/wedesign.png" height="30px">

							<h2 class="red">We Design</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li>		
						<li class="serviceBox">
							
							<img class="serviceIcon" alt="Develop Icon" src="<?php bloginfo('template_url'); ?>/images/wedesign.png" height="30px">

							<h2 class="dev">We Develop</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li>		
						<li class="serviceBox">
							
							<img class="serviceIcon" alt="Host Icon" src="<?php bloginfo('template_url'); ?>/images/wedesign.png" height="30px">

							<h2 class="host">We Host</h2>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li>
					</ul>
				</div>
				<div>

					<h3 class="title">We have a lot to offer.</h3>

					<div class="btn"><a href="#">Read More</a></div>

				</div>
			</div>
		</section>

		<section class="whiteStrip">
			<div class="wrap">
			
				<div class="meetTheTeam">

					<h1>Meet The Team</h1>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

				</div>

				<ul id="teamMembers">
					<li>
						<img class="avatar" alt="Photo Of Mark" src="<?php bloginfo('template_url'); ?>/images/mark.png" height="30px">

						<h2>Mark Haynes</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<div class="btn"><a href="#">Personal Website</a></div>

					</li>

					<li>
						<img class="avatar" alt="Photo Of Chris" src="<?php bloginfo('template_url'); ?>/images/mark.png" height="30px">

						<h2>Chris Huxley</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<div class="btn"><a href="#">Personal Website</a></div>

					</li>
				</ul>

			</div>		
		</section>
		<div class="wrap">
   			<?php the_content(); ?>

			<?php endwhile; else: ?>

 				<p>Sorry, no posts matched your criteria.</p>

 			<?php endif; ?>
 		</div>
	</main>

<?php get_footer(); ?>