<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _twp
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Theme Check and Update -->
	<script>
		const html = document.querySelector('html');
		const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
		const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

		if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
		else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
		else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
		else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page">
	<a href="#content" class="sr-only"><?php esc_html_e( 'Skip to content', '_twp' ); ?></a>

	<?php get_template_part( 'template-parts/layout/header', 'content' ); ?>

	<div id="content">
