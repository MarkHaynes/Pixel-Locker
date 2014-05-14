			
			<footer id="mainFooter" role="contentinfo">
				
					
				<section id="bottomStrip">
					<div class="wrap">
						<?php get_footerMsg();?>
					</div>
				</section>

				<div class="wrap">

					<nav id="bottomNav">
						<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
					</nav>

				</div>
			</footer>
			
			<?php wp_footer();?> <!-- Must not be removed -->
		
		</div> <!--#siteWrap-->

	</div><!--Main Wrapper-->

		<!-- Mobile Nav -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url')?>/scripts/cycle.js"></script>

		<script type"text/javascript">
			$(document).ready(function(){
				var pageHeight = $(window).height();
				var correctHeight = pageHeight - 120;
				if (pageHeight >=600) {
					$(".homeWrap").css("height", correctHeight);
				}

			});

		</script>



		<script type="text/javascript">

			$(document).ready(function(){
			    var pageWidth = $(window).width();  
			    if ( pageWidth >= 801 ) {
			        $("#mobile-button").html("Menu");
					$( "main" ).css("right", "0");
					$( "footer" ).css("right", "0");
					$( "#nav-wrap-mobile" ).css("display", "none");

			    }
			    $(window).resize(function() {
			        if ($(window).width() >= 801) {
			         	$("#mobile-button").html("Menu");
						$( "main" ).css("right", "0");
						$( "footer" ).css("right", "0");
						$( "#nav-wrap-mobile" ).css("display", "none");
			        }
			    });
			});

		
			$( "#mobile-button" ).click(function() {
				var value = $("#mobile-button").html();
				if (value=="Menu"){
					$("#mobile-button").html("Close");
					$( "main" ).css("right", "-70%");
					$( "footer" ).css("right", "-70%");
					$( "#nav-wrap-mobile" ).css("display", "block");
				}

				else {
					$("#mobile-button").html("Menu");
					$( "main" ).css("right", "0");
					$( "footer" ).css("right", "0");
					setTimeout( function(){
      					$( "#nav-wrap-mobile" ).css("display", "none");
    				},0);					
				}
			  	
			  	$( "#nav-wrap-mobile" ).css("height", "90%");


			});
    	</script>
	</body>
</html>