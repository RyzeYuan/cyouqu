<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

setcookie("cyouqu", "cyq", NULL, NULL, NULL, NULL, TRUE);
header('X-Frame-Options: deny');
get_header(); ?>
	

	<div id="primary" class="content-area">
		

		<style type="text/css">
#so360{white-space:nowrap;background-color: whitesmoke;
    text-align: center;
	display: none;
}
#so360 form{margin:0;padding:0}
#so360_keyword{width:307px;height:24px;line-height:24px;font:14px arial;padding:
2px 5px;margin-right:5px;border:2px solid #3FB30E;outline:0;vertical-align:middle}
#so360_keyword{background:url(https://p.ssl.qhimg.com/t01ab1a3fb05f0ee893.png)
 no-repeat 236px center}
#so360_submit{width:70px;height:32px;border:0;color:#fff;
 background:#3FB30E;font-weight:bold;font:bold 14px arial;padding:0;
 padding-top:3px\9;cursor:pointer;
vertical-align:middle}
</style>
<div id="so360">
    <form action="http://www.so.com/s" target="_blank" id="so360form">
   <input type="text" autocomplete="off" name="q" id="so360_keyword">
        <input type="submit" id="so360_submit" value="搜 索">
        <input type="hidden" name="ie" value="utf8">
        <input type="hidden" name="src" value="zz_cyouqu.com">
        <input type="hidden" name="site" value="cyouqu.com">
        <input type="hidden" name="rg" value="1">
    </form>
</div>



		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content-search', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content-search', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>