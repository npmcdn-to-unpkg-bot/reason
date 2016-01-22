<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reason
 */
get_header(); ?>

	<section class="planets-vertical">
		<div class="planets-cont">

			<div class="rasporka-left"></div>

			<div class="planet-1 planets"><a href="/portfolio-styles/">
					<img class="mini-img-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-planet.png" alt="Чёрная маленькая планета-1.1">
					<img class="mini-img-2" src="<?php echo get_template_directory_uri(); ?>/img/mini-planet.png" alt="Чёрная маленькая планета-1.2">
					<img class="planet-img" src="<?php echo get_template_directory_uri(); ?>/img/planet-1.png" alt="Чёрная планета-1">
					<h2 class="fir-stil">Фирменные стили</h2>
				</a></div>

			<div class="planet-margin"></div>

			<div class="planet-2 planets"><a href="">
					<img class="mini-img-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-planet.png" alt="Чёрная маленькая планета-2">
					<img class="planet-img" src="<?php echo get_template_directory_uri(); ?>/img/planet-2.png" alt="Чёрная планета-2">
					<h2 class="services">Услуги</h2>
				</a></div>

			<div class="planet-margin"></div>

			<div class="planet-3 planets"><a href="/portfolio-websites/">
					<img class="mini-img-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-planet.png" alt="Чёрная маленькая планета-3">
					<img class="planet-img" src="<?php echo get_template_directory_uri(); ?>/img/planet-3.png" alt="Чёрная планета-3">
					<h2 class="saity">Сайты и интерфейсы</h2>
				</a></div>

			<div class="planet-margin"></div>

			<div class="planet-4 planets"><a href="">
					<img class="planet-img" src="<?php echo get_template_directory_uri(); ?>/img/planet-4.png" alt="Чёрная планета-4">
					<h2 class="about-us">О&nbsp;нас</h2>
				</a></div>

			<div class="planet-margin"></div>

			<div class="planet-5 planets"><a href="/portfolio-mobile/">
					<img class="mini-img-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-planet.png" alt="Чёрная маленькая планета-5">
					<img class="planet-img" src="<?php echo get_template_directory_uri(); ?>/img/planet-5.png" alt="Чёрная планета-5">
					<h2 class="apps">Разработка приложений</h2>
				</a></div>

			<div class="planet-margin"></div>
			
			<div class="planet-6 planets"><a href="/portfolio/">
					<img class="mini-img-1" src="<?php echo get_template_directory_uri(); ?>/img/mini-big.png" alt="Чёрная маленькая планета-6">
					<img class="planet-img" src="<?php echo get_template_directory_uri(); ?>/img/planet-6.png" alt="Чёрная планета-6">
					<h2 class="all">Все проекты</h2>
				</a></div>

			<div class="rasporka-right"></div>

		</div>
	</section>
	
	<div class="hidden"></div>

	<div class="loader">
		<div class="loader_inner"></div>
	</div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

	<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/libs/plugins-scroll/plugins-scroll.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/common-main.js"></script>

<?php wp_footer(); ?>
<script>
	$(document).ready(function() {
		$('.planets').addClass('one-line');
		$('.planets-vertical').addClass('opacity');
	});
</script>
</body>
</html>