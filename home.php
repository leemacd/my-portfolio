	<?php

	/*
		Template Name: Home
	*/

	get_header();  ?>

	<section class="home-section" id="home">

	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

	      <h1>Lee MacDonald</h1>
	      <h3>Front-End Web Developer</h3>
	      <?php the_content(); ?>

	    <?php endwhile; // end the loop?>
	</section>

	</div> 
	<!-- end of container -->

	<section class="about-section" id="about">
		<h2>About</h2>
		<img src="" alt="">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut mollitia, 
		 quibusdam nostrum eveniet, libero, maxime quam
		 hic earum laudantium unde commodi culpa accusamus, aperiam cupiditate 
		 sed dolorum. Velit, cumque voluptatem.</p>
	</section>

	<section class="portfolio-section" id="portfolio">
		<h2>Portfolio</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
		Ex a nobis nemo qui! Quasi aliquam magnam voluptates ullam a, non qui 
		deserunt facere quo debitis dolorem assumenda officia harum repudiandae.</p>
	</section>

	<section class="contact-section" id="contact">
		<h2>Contact</h2>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-github-alt"></i>
		<i class="fa fa-linkedin"></i>
	</section>









	

	<?php get_footer(); ?>