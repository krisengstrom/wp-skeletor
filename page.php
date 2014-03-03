<?php
/**
 * The page template file
 *
 * @package WordPress
 * @subpackage SKEL-ETOR
 * @since SKEL-ETOR 1.0
 */

get_header(); ?>

<div id="main">
	<div id="content">

		<?php while( have_posts() ) : the_post(); ?>
			<?php get_template_part('content/page'); ?>
		<?php endwhile; ?>

	</div>
	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>