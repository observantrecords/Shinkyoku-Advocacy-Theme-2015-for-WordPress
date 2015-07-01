<?php
/**
 * Created by PhpStorm.
 * User: gregbueno
 * Date: 11/10/14
 * Time: 7:45 AM
 */

namespace ObservantRecords\WordPress\Themes\ShinkyokuAdvocacy;

?>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body>
	<div id="container" class="container">
		<div id="masthead" class="row">
			<header class="text-center col-md-12">
				<h1 id="title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo __('Home', WP_TEXT_DOMAIN); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shinkyoku_advocacy_logo.png" alt="[<?php bloginfo( 'name' ); ?>]" title="[<?php bloginfo( 'name' ); ?>]" id="shinkyoku-advocacy-logo" />
					</a>
				</h1>
			</header>
		</div>

		<div id="content" class="row">
			<div class="full-column col-md-12">
