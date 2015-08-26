<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,800,700italic,700,400italic,300italic,300,800italic|Fjalla+One' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
  <link type="image/png" href="<?php bloginfo('template_directory'); ?>/images/leaf.png" rel="icon">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/leaf.png"/>
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<div class="wrapper">
  <div class="container">
      <nav id="navigation">
        <ul>
          <li class="home selected">
            <a href="#home" class="smoothScroll"><span>Home</span></a>
          </li>
          <li class="about">
            <a href="#about" class="smoothScroll"><span>About</span></a>
          </li>
          <li class="portfolio">
            <a href="#portfolio" class="smoothScroll"><span>Portfolio</span></a>
          </li>
          <li class="contact">
            <a href="#contact" class="smoothScroll"><span>Contact</span></a>
          </li>
        </ul>      
      </nav>

