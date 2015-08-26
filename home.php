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
					<p>toronto based. <br> business guy. <br> web dev guy. <br> sports guy.</p>
				</div>
			</div>
		</section>

		<section class="portfolio-section" id="portfolio">
			<div class="portfolio-content-wrapper">
				<h2>Check Out My Work!</h2>
				<div class="project project-container-one">
					<a href="http://leemacd.com/project2" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/project2.png" class="pic-one">
					</a>
					<div class="project-info one">
						<h4>PSD Conversion</h4>
						<p>Provided with a design from a "client", I converted a PSD into
						an actual site using only HTML and CSS.</p>
					</div>
					<a href="http://leemacd.com/project2" target="_blank" class="live-button first">See it LIVE</a>
				</div>
				<div class="project project-container-two">
					<a href="http://leemacd.com/project4" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/project4.png" class="pic-two">
					</a>
					<div class="project-info two">
						<h4>jQuery Interactive Project</h4>
						<p>In groups we pair-programmed a fun, interactive quiz
						to help those in Toronto find out where they should live within the city.</p>
					</div>
					<a href="http://leemacd.com/project4" target="_blank" class="live-button second">See it LIVE</a>
				</div>
				<div class="project project-container-three">
					<a href="http://leemacd.com/project7" target="_blank">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/project7.png" class="pic-three">
					</a>
					<div class="project-info three">
						<h4>Custom Wordpress Theme</h4>
						<p>In pairs we designed and built a custom Wordpress theme to be used 
						for those wanting to show-off their work.</p>
					</div>
					<a href="http://leemacd.com/project7" target="_blank" class="live-button third">See it LIVE</a>
				</div>
			</div>
		</section>

		<section class="contact-section" id="contact">
			<div class="contact-content-wrapper">
				<h2>Get At Me!</h2>
				<div class="contact-content">
					<a href="mailto:leemacd.com">
						<p>lee@leemacd.com</p>
					</a>
					<div class="social-icons">
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
				</div>
			</div>
		</section>
	</div>
	<!-- close wrapper div -->
	<?php get_footer(); ?>