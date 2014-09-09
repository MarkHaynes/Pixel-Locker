<?php
/*
Template Name: Custom Responsive Page
*/
?>

<?php get_header(); ?>

	<main>
		<section id="topStrip">
			<div class="wrap">
				
				<h1 class="title">Responsive, Mobile Friendly Website Design</h1>

				<span class="tagline">It's important to cater to all vistors not only those on desktops. At Pixel Locker we specialise in providing all users with the best experience for the device they are using. </span>
			
			</div>
		</section>

		<section class="lightStrip">
			<div class="contentWrap">
				<h1 class="title">Make your website accessible to all with responsive design.</h1>
				<img class="left" src="<?php bloginfo('template_url')?>/images/responsive-03.png" alt="Example of Responsive Web Design">
				<p >At Pixel Locker <strong>we create websites with mobile users in mind from the start.</strong> Providing a mobile experience to users isn't about hiding elements of the website or giving a dumbed down version of your website to visitors. Mobile Design focuses on <strong>providing your visitors with a rich user experience</strong> focusing on the goals of visitor. <strong>We understand the needs and goals of a mobile visitor are different than other users</strong> and our design philosophy represents that.</p>
				<br>
				<div class="cf featuredBtn"><a href="<?php echo get_permalink(get_page_by_path('contact')); ?>" alt="Contact Us Now!">Contact Us Now!</a></div>
			
			</div>
		</section>

		<section class="whiteStrip">
			<div class="contentWrap">
					<img class="left" src="<?php bloginfo('template_url')?>/images/responsive-01.png" alt="25% of browsers use mobiles.">
				<h2>Providing your Customers with a Mobile Experience. </h2>
					<p class="cf">As of March 2014 a <strong>staggering 23.91%</strong> of all browsing is completed by a mobile device and this number is increasing year on year. That is <strong>almost 25% of your customers will attempt to view your website using their mobile</strong> phone and stats show <strong>61% of people have a better opinion towards a company / brand when they offer a good mobile experience.</strong> This is why at Pixel Locker our websites are not just "mobile compatible" but <strong>"Designed with Mobile Mind"</strong>.</p>
					
					<img class="right" src="<?php bloginfo('template_url')?>/images/responsive-02.png" alt="55% of businesses have a mobile website do you?">
				<h2>Don't fall behind.</h2>
					<p class="cf">Many businesses now understand how crucial a mobile experience is to their customers and ultimately, their sales however 45% of businesses continue not to provide their visitors with a mobile experience. <strong>Don't fall behind!</strong> Surveys have shown vistors greated with a none mobile experience when using a mobile device <strong>leave the website immediately</strong> and often then visit a competitors website. <strong>Don't loose business to your competitors by not providing a rich mobile experience,</strong> afterall we both know how hard it can be to get a customer. </p>
	 		</div>
	 	</section>

 	</main>



<?php get_footer(); ?>