<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package jewerly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" name="viewport">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/build/css/all.css">

	<?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header class="main-header">
		<?php
		$fields = get_fields('options');
		$header = $fields['header'];
		?>
		<div class="menu-width">
			<a href="<?php echo(get_home_url()); ?>" class="logo">
				<img src="<?php echo($header['logo']['url']); ?>" alt="<?php echo($header['logo']['alt']); ?>"/>
			</a>
			<nav class="main-menu">
				<?php
				wp_nav_menu([
					'theme_location' => get_nav_menu_locations(),
					'menu' => 'Header Menu',
					'container' => false,
					'menu_class' => 'menu-items',
					'menu_id' => 'header-menu']) ?>
				<div id="burger-menu" class="wrap-burger-menu">
					<span class="burger-menu"></span>
				</div>
			</nav>
		</div>
	</header>
	
