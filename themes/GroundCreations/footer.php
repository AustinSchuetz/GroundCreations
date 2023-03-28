<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StarterTheme
 */

?>

	</div><!-- #content -->

	<footer id="contact">
        <div class="footer-wrapper">
            <div class="top-footer">
                <h2>Create your custom <br>outdoor oasis.</h2>
            </div>
            <div class="footer-content">
                <div class="footer-item">
                    <a href="/#tom-schuetz" class="footer-link-title page-scroll">Who We Are</a>
                    <a href="/#design-focus" class="footer-link-title page-scroll">Design Focus</a>
                    <a href="/#design-process" class="footer-link-title page-scroll">Design Process</a>
                    <a href="/#maintenance" class="footer-link-title page-scroll">Care & Maintenance</a>     
                    <a href="/plant-palette/" class="footer-link-title">Plant Palette</a>    
                </div>
                <div class="footer-item">
                    <?php echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]'); ?>
                </div>
                <div class="footer-item">
                    <p>Erie, CO<br>
                    Phone: (630)-772-7315<br>
                    tom@groundcreationscolorado.com</p>
                    <a href="/">
                        <img src="/assets/GroundCreations-Landscape-Design-White-Logo.svg" alt="Ground Creations Logo">                
                    </a>
                    <p class="small-link">A website by <a target="_blank" href="https://austinschuetz.com">Austin Schuetz</a></p>    
                </div>
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/3fca15e1a8.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js" integrity="sha512-VHsNaV1C4XbgKSc2O0rZDmkUOhMKPg/rIi8abX9qTaVDzVJnrDGHFnLnCnuPmZ3cNi1nQJm+fzJtBbZU9yRCww==" crossorigin="anonymous"></script>
    <script src="/js/jquery.easing.min.js"></script>
        
        
<script>
    $(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
        $('.main-nav').toggleClass('menu-open');
        $('body').toggleClass('mobile-opened');
	});
});
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('.sticky-header').addClass('sticky-header-locked');
    } else {
        $('.sticky-header').removeClass('sticky-header-locked');
    }
});
    $(document).ready(function(){
    if ($(this).scrollTop()) {
        $('.sticky-header').addClass('sticky-header-locked');
    } else {
        $('.sticky-header').removeClass('sticky-header-locked');
    }
});

// hover onload so menu isn't buggy
$(document).ready(function(){
    $(".main-nav-item").addClass("main-nav-item-ready");
});    

    
    
    
$(document).ready(function(){
  if ($(window).width() <= 850) {
    $(".left-nav .main-nav-item > a").addClass("mobile-top-level");
    $(".inner-nav").addClass("mobile-second-level-ul");
      
    $(".main-nav-item").removeClass("main-nav-item-ready");
    $(".main-nav-item-ready").removeClass("main-nav-item-hovered");    
    $(".mobile-second-level-ul").hide();

$('.mobile-top-level').click(function(){
     $(this).next(".mobile-second-level-ul").slideToggle(200);    
});
      
      
$('a.page-scroll').click(function(){
		$('#nav-icon').removeClass('open');
        $('.main-nav').removeClass('menu-open');
        $('body').removeClass('mobile-opened');
});
  } else {
    $(".main-nav-item-ready").hover(function(){
        $(this).toggleClass("main-nav-item-hovered");  //Toggle the active class to the area is hovered
    });
  }
});    

    
var mql = window.matchMedia('(max-width: 850px)');    
    
function screenTest(e) {
  if (e.matches) {
    $(".left-nav .main-nav-item > a").addClass("mobile-top-level");
    $(".inner-nav").addClass("mobile-second-level-ul");
    $(".main-nav-item").removeClass("main-nav-item-ready");
    $(".mobile-second-level-ul").hide();

$('.mobile-top-level').click(function(){
     $(this).next(".mobile-second-level-ul").slideToggle(200);    
});
    
  } else {     
      
		$('#nav-icon').removeClass('open');
        $('.main-nav').removeClass('menu-open');
        $('body').removeClass('mobile-opened');
      
    $('.mobile-second-level-ul').show();
    $(".main-nav-item").addClass("main-nav-item-ready");  
    $(".left-nav").removeClass("mobile-top-level");
    $(".inner-nav ul").removeClass("mobile-second-level-ul");
    $(".main-nav-item-ready").hover(function(){
        $(this).toggleClass("main-nav-item-hovered");  //Toggle the active class to the area is hovered
    });
  }
}

mql.addListener(screenTest);
    
    

    
    
<!-- Initialize Swiper -->
var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    loop: true,
    autoplay: {
        delay: 6500,
        disableOnInteraction: false
      },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
        clickable: true
    },    
    effect: 'fade',

    // Navigation arrows
//    navigation: {
//      nextEl: '.swiper-button-next',
//      prevEl: '.swiper-button-prev',
//    }
  })


//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $(document).on('click', 'a.page-scroll', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});
</script>



<?php wp_footer(); ?>
</div><!-- #page -->

</body>
</html>
