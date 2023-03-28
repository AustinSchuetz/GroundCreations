<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
    <link rel="icon" href="/assets/favicon-16x16.png" type="image/png">  
    <link rel="icon" href="/assets/favicon.ico" type="image/png"> 
    <link rel="icon" href="/assets/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/assets/Icon.png" type="image/png"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css" integrity="sha512-uCQmAoax6aJTxC03VlH0uCEtE0iLi83TW1Qh6VezEZ5Y17rTrIE+8irz4H4ehM7Fbfbm8rb30OkxVkuwhXxrRg==" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php get_site_url(); ?>/wp-content/themes/GroundCreations/styles/basic.css">
    

	<?php wp_head(); ?>
        
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164064112-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-164064112-1');
</script>


    
    <link rel="stylesheet" href="<?php get_site_url(); ?>/wp-content/themes/GroundCreations/style.css?v=1.1.1">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<header id="header">
        <div class="sticky-header">
        <div class="header-frame">
            <a href="/">
                <img class="main-logo" src="/assets/GroundCreations-Landscape-Design-Logo.svg" alt="Ground Creations Logo">
            </a>
            <div class="main-nav">
                <ul class="left-nav">
                </ul>
                <ul class="right-nav">
                    <li class="main-nav-item">
                        <a class="page-scroll" href="/#tom-schuetz">Who We Are</a>
                    </li>
                    <li class="main-nav-item">
                        <a class="page-scroll" href="/#design-focus">Design Focus</a>
                    </li>
                    <li class="main-nav-item">
                        <a class="page-scroll" href="/#design-process">Design Process</a>
                    </li>
                    <li class="main-nav-item">
                        <a class="page-scroll" href="/#maintenance">Care & Maintenance</a>
                    </li>
                    <li class="main-nav-item">
                        <a class="page-scroll" href="/plant-palette/">Plant Palette</a>
                    </li>
                    <li class="main-nav-item">
                        <a class="cta-btn page-scroll" href="/#contact">Contact Us</a>
                    </li>
<!--                    <div class="mobile-search"><?php get_search_form(); ?></div>-->
                </ul> 
            </div>
            <div class="mobile-menu-btn-holder">
                <div id="nav-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        </div>
    </header>

	<div id="content" class="site-content">
