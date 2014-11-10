<?php
/**
 * Created by PhpStorm.
 * User: gbueno
 * Date: 10/14/2014
 * Time: 10:35 AM
 *
 * @package WordPress
 * @subpackage ObservantRecords2015
 * @since Observant Records 2015 1.0
 */

namespace ObservantRecords\WordPress\Themes\ShinkyokuAdvocacy;
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : // Start the Loop. ?>
		<?php the_post(); ?>
		<?php get_template_part( 'content', 'home' ); ?>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer();
