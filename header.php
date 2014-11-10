<?php
/**
 * Created by PhpStorm.
 * User: gregbueno
 * Date: 11/10/14
 * Time: 7:45 AM
 */

namespace ObservantRecords\WordPress\Themes\ShinkyokuAdvocacy;

use ObservantRecords\WordPress\Themes\ObservantRecords2015\TemplateTags;

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
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700italic,400italic' type='text/css'>
	<link rel="stylesheet" href="<?php echo TemplateTags::get_cdn_uri(); ?>/web/css/facebox.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/typography.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/layout.css">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo TemplateTags::get_cdn_uri(); ?>/web/js/facebox.js"></script>
	<script type="text/javascript">
		var facebox_options = {
			closeImage: '<?php echo TemplateTags::get_cdn_uri(); ?>/web/images/closelabel.gif',
			loadingImage: '<?php echo TemplateTags::get_cdn_uri(); ?>/web/images/loading.gif'
		};
		(function ($) {
			$(function () {
				$('a[rel*=facebox]').facebox(facebox_options);
			});
		})(jQuery);
	</script>
</head>

<body>
	<div id="container" class="container">
		<div id="masthead" class="row">
			<header class="centered col-md-12">
				<h1 id="title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo __('Home', WP_TEXT_DOMAIN); ?>" rel="home">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/shinkyoku_advocacy_logo.png" alt="[<?php bloginfo( 'name' ); ?>]" title="[<?php bloginfo( 'name' ); ?>]" id="shinkyoku-advocacy-logo" />
					</a>
				</h1>
			</header>
		</div>

		<div id="content" class="row">
			<div class="full-column col-md-12">
