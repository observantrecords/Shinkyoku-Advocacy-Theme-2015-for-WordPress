<?php
/**
 * Created by PhpStorm.
 * User: gbueno
 * Date: 10/14/2014
 * Time: 11:05 AM
 *
 * @package WordPress
 * @subpackage Musicwhore 2015
 * @since Musicwhore 2014 1.0
 */

namespace ObservantRecords\WordPress\Themes\ShinkyokuAdvocacy;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<?php if ( is_single() || is_page() ): ?>
			<?php echo the_title('<h3 class="entry-title">', '</h3>'); ?>
		<?php else: ?>
			<?php echo the_title('<h3 class="entry-title"><a href="' . esc_url( get_permalink() )  . '" rel="bookmark">', '</a></h3>'); ?>
		<?php endif; ?>

		<div class="entry-meta">
			<ul class="list-inline">
				<?php if ( 'post' == get_post_type() ): ?>
					<?php TemplateTags::posted_on(); ?>
				<?php endif; ?>

				<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
					<li><span class="glyphicon glyphicon-comment"></span> <?php comments_popup_link( __( 'Leave a comment', WP_TEXT_DOMAIN ), __( '1 Comment', WP_TEXT_DOMAIN ), __( '% Comments', WP_TEXT_DOMAIN ) ); ?></li>
				<?php endif; ?>

				<?php edit_post_link( __( 'Edit', WP_TEXT_DOMAIN ), '<li><span class="glyphicon glyphicon-pencil"></span>', '</li>' ); ?>
			</ul>
		</div>

	</header>

	<?php the_content( __( 'Continue reading &raquo;', WP_TEXT_DOMAIN ) ); ?>
	<?php wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'musicwhore2014' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
	) ); ?>
</article>
