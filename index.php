<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package RTL_Demo
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hentry example-floats">
				<h2><?php esc_html_e( 'Floats', 'rtl-demo' ); ?></h2>
				
				<p class="floated-div">
					<?php esc_html_e( 'This div will float to the left on LTR, and to the right on RTL.', 'rtl-demo' ); ?>
				</p>
			</div>

			<div class="hentry example-text-aligns">
				<h2><?php esc_html_e( 'Text Aligns', 'rtl-demo' ); ?></h2>
				
				<p class="text-align-div">
					<?php esc_html_e( 'This text will be right-aligned on LTR, and left-aligned on RTL.', 'rtl-demo' ); ?>
				</p>
			</div>

			<div class="hentry example-positioning">
				<h2><?php esc_html_e( 'Positioning', 'rtl-demo' ); ?></h2>
				
				<p class="positioning-div">
					<?php esc_html_e( 'This will have 1em of left positioning on LTR, and 1em of right positioning on RTL.', 'rtl-demo' ); ?>
				</p>
			</div>

			<div class="hentry example-directional-arrows">
				<h2><?php esc_html_e( 'Directional Arrows', 'rtl-demo' ); ?></h2>
				<p class="alternate-directional-arrow-div">
					<?php esc_html_e( 'This directional arrow will point to the right on LTR, then use an alternative left-pointing arrow icon on RTL.', 'rtl-demo' ); ?>					
				</p>

				<p class="rotated-directional-arrow-div">
					<?php esc_html_e( 'This directional arrow will point to the right on LTR, then use CSS rotation to horizontally flip the same icon image.', 'rtl-demo' ); ?>
				</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
