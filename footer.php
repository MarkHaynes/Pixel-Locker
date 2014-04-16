			
			<footer id="mainFooter" role="contentinfo">
				
					
				<section id="bottomStrip">

					<h1 class="title">It would be great to hear from you :)</h1>

					<div class="btn"><a href="http://pixellocker.co.uk">Contact Us</a></div>

				</section>

				<div class="wrap">
					<div id="copyright">
						
						<p><img id="pl-logo" alt="Pixel Locker Logo" src="<?php bloginfo('template_url'); ?>/images/pixellockerlogo.png" height="15px"> Copyright © 2011-2014 Pixel Locker</p>

					</div>

					<nav id="bottomNav">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</nav>

				</div>
			</footer>
			
			<?php wp_footer();?> <!-- Must not be removed -->
		
		</div> <!--#siteWrap-->

	</body>
</html>