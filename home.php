	<?php

	/*
		Template Name: Home
	*/

	get_header();  ?>


		<section class="home-section" id="home">

		    <?php // Start the loop ?>
		    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<div class="home-content-wrapper">
		      <h1>Lee <br> MacDonald</h1>
		      <h3>Front-End <br> Web Developer</h3>
		      <!-- <blockquote><span>"Stay Hungry, Stay Foolish."</span> - Steve Jobs</blockquote> -->
		     </div>
		      <?php the_content(); ?>

		    <?php endwhile; // end the loop?>
		</section>

		</div> 
		<!-- end of container -->

		<section class="about-section" id="about">
			<h2>About ME</h2>
			<div class="about-content-wrapper">
				<div class="about-content">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/PAM_2534.jpg">
					<p>toronto based. business guy. web development guy. sports guy.</p>
				</div>
			</div>
		</section>

		<section class="portfolio-section" id="portfolio">
			<h2>Check Out My Work!</h2>
			<div class="portfolio-content-wrapper">
				
			</div>
		</section>

		<section class="contact-section" id="contact">
			<h2>Get At Me!</h2>
			<div class="contact-content-wrapper">
				
			</div>
			<div class="social-icons">
				<a href="mailto:lee@leemacd.com" target="_blank">
					<i class="fa fa-envelope-o"></i>
				</a>
				<a href="http://twitter.com/leemacd" target="_blank">
					<i class="fa fa-twitter"></i>
				</a>
				<a href="http://github.com/leemacd" target="_blank">
					<i class="fa fa-github-alt"></i>
				</a>
				<a href="https://ca.linkedin.com/in/macdonaldlee" target="_blank">
					<i class="fa fa-linkedin"></i>
				</a>
			</div>
		</section>







	<?php get_footer(); ?>