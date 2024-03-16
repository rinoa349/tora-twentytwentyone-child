<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


<!---------------------- ヘッダー ---------------------->

<div id="header">
		<div class="headerInner">
			<a class="headerLogo" href="<?php echo esc_url( home_url( '/' ) ); ?>">HEALTH & BEAUTY TORa</a>
			<nav>
				<ul class="navLinks">
					<li><a href="<?php echo home_url('/menu/'); ?>">施術メニュー</a></li>
					<li><a href="<?php echo home_url('/menu-list/'); ?>">メニュー表</a></li>
					<li><a href="<?php echo home_url('/access/'); ?>">アクセス</a></li>
					<li><a href="<?php echo home_url('/contacts/'); ?>">お問い合わせ</a></li>
				</ul>
					<div class="burger">
						<div class="line1"></div>
						<div class="line2"></div>
						<div class="line3"></div>
					</div>	
			</nav>
		</div>
	</div>
	
<!-------------------- //ヘッダー ---------------------->
	<?php/* get_template_part( 'template-parts/header/site-header' ); */?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
