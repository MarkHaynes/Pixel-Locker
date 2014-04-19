			
			<footer id="mainFooter" role="contentinfo">
				
					
				<section id="bottomStrip">

					<?php get_footerMsg();?>

				</section>

				<div class="wrap">

					<nav id="bottomNav">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</nav>

					<div id="copyright">
						
						<p>Copyright © 2011-2014 Pixel Locker</p>

					</div>

				</div>
			</footer>
			
			<?php wp_footer();?> <!-- Must not be removed -->
		
		</div> <!--#siteWrap-->

	</body>
</html>