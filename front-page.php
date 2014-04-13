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

				<h1 class="pageTitle">Welcome to <img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png" height="30px"></h1>

				<p>We are a friendly team that loves to design innovative and creative websites which comply with modern standards.</p>
			
			</div>
		</section>

		<section class="lightStrip">
			<div class="wrap">

				<h1>Always happy to help,</h1>

				<p>We pride ourselves in our ability to provide all that you need to get started on the web. Our team has you covered...</p>
	
				<div class="servicesStrip">

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
		
				<h3>We have a lot to offer.</h3>

				<div class="button">Read More</div>

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

						<div class="button">Personal Website</div>

					</li>

					<li>
						<img class="avatar" alt="Photo Of Chris" src="<?php bloginfo('template_url'); ?>/images/mark.png" height="30px">

						<h2>Chris Huxley</h2>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<div class="button">Personal Website</div>

					</li>
				</ul>

			</div>		
		</section>
	</main>
	
   		
   		<?php the_content(); ?>

		<?php endwhile; else: ?>

 			<p>Sorry, no posts matched your criteria.</p>

 		<?php endif; ?>

<?php get_footer(); ?>