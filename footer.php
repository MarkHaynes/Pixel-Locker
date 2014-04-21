			
			<footer id="mainFooter" role="contentinfo">
				
					
				<section id="bottomStrip">
					<div class="wrap">
						<?php get_footerMsg();?>
					</div>
				</section>

				<div class="wrap">

					<nav class="social">
						<ul>
							<li class="facebook"><a href="#">facebook</a></li>
							<li class="twitter"><a href="#">twitter</a></li>
						</ul>
					</nav>

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