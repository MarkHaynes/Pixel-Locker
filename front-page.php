<?php
/*
Template Name: Custom Front Page
*/

/* Custom Pages have to have the template data above */
?>

<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<main>
		<div class="darkStrip">
		
			<h1>Welcome to <img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png" height="30px"></h1>

			<p>We are a friendly team that loves to design innovative and creative websites which comply with modern standards.</p>
	
		</div>

		<div class="lightStrip">
		
			<h2>Always happy to help,</h2>

			<p>We pride ourselves in our ability to provide all that you need to get started on the web. Our team has you covered...</p>
	
			<div class="servicesStrip">
				<div class="wrap">
					<ul>
						<li>
							
							<img class="serviceIcon" alt="Design Icon" src="<?php bloginfo('template_url'); ?>/images/wedesign.png" height="30px">

							<h3>We Design</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li>		
						<li>
							
							<img class="serviceIcon" alt="Develop Icon" src="<?php bloginfo('template_url'); ?>/images/wedesign.png" height="30px">

							<h3>We Develop</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li>		
						<li>
							
							<img class="serviceIcon" alt="Host Icon" src="<?php bloginfo('template_url'); ?>/images/wedesign.png" height="30px">

							<h3>We Host</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

						</li>
					</ul>
				</div>
			</div>
		
			<h4>We have a lot to offer.</h4>

			<div class="button">Read More</div>
	
		</div>

		<div class="whiteStrip">
			<div class="wrap">
			
				<div class="meetTheTeam">

					<h2>Meet The Team</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

				</div>

				<ul class="teamMembers">
					<li>
						<img class="avatar" alt="Photo Of Mark" src="<?php bloginfo('template_url'); ?>/images/mark.png" height="30px">

						<h4>Mark Haynes</h4>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<div class="button">Personal Website</div>

					</li>

					<li>
						<img class="avatar" alt="Photo Of Chris" src="<?php bloginfo('template_url'); ?>/images/mark.png" height="30px">

						<h4>Chris Huxley</h4>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

						<div class="button">Personal Website</div>

					</li>
				</ul>

			</div>		
		</div>

		<div class="darkStrip">
		
			<h4>It would be great to hear from you :)</h4>

			<div class="button"><a href="http://pixellocker.co.uk">Contact Us</a></div>
	
		</div>

	</main>
	
   		
   		<?php the_content(); ?>

		<?php endwhile; else: ?>

 			<p>Sorry, no posts matched your criteria.</p>

 		<?php endif; ?>

<?php get_footer(); ?>