<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reason
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title><?php echo wp_get_document_title(); ?></title>
	<meta name="description" content="">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,400italic&subset=cyrillic,latin' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon-114x114.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="main-header">
		<nav class="main-nav">
			<ul>
				<li><a href="http://academy.reason.kz/">Академия</a></li>
				<li><a href="/blog/">Блог</a></li>
				<li><a href="/news/">Новости</a></li>
			</ul>
		</nav>
		<a class="phone-number" href="tel:+77212507800">+7 (7212) 507-800</a>
		<div class="bot-nav">
			<a href="/" class="logo-main"></a>
			<input type="checkbox" name="menu-trans" id="menu-trans">
			<label for="menu-trans" class="menu-but">
				<div class="cmn-toggle-switch cmn-toggle-switch__htx">
					<span></span>
				</div>
				Меню
			</label>
			<label for="menu-trans" class="menu-close"></label>
			<div class="side-menu">
				<ul class="side-ul">
					<li><a href="/portfolio/">Проекты</a></li>
					<li><a href="/services/">Услуги</a></li>
					<li><a href="/about-us/">О нас</a></li>
					<li><a href="/contacts/">Контакты</a></li>
					<li><a href="http://academy.reason.kz/">Академия</a></li>
					<li><a href="/blog/">Блог</a></li>
					<li><a href="/news/">Новости</a></li>
				</ul>
			</div>
		</div>
	</header>


