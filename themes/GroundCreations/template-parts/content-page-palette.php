<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package StarterTheme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    
    
            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' ); ?>
            <div class="single-hero" style="background-color: #276749;padding:80px 20px;">
                <div class="single-hero-text">
                    <h1><?php the_title(); ?></h1>
                    <p>(Plants listed below are Hardy in Colorado)</p>
                </div>
            </div>

	<div class="entry-content page-wrap palette-wrap">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
