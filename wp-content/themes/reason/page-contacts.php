<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Reason
 */

get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main class="main">
		<div class="center">
			<section class="contacts">
				<h1>Наши контакты</h1>
				<div class="first-cont">
					<div class="client-area">
						<h2>Клиентский отдел:</h2>
						<p><?php echo get_field("phone_number"); ?></p>
					</div>
					<div class="pochta">
						<h2>Почта:</h2>
						<p><?php echo get_field("mail"); ?></p>
					</div>
					<div class="soc-cont">
						<h2>Мы в соц. сетях:</h2>
						<p>
							<a href="">Facebook</a>,
							<a href="">Twitter</a>,
							<a href="">Bechance</a> или
							<a href="">ВКонтакте</a>
						</p>
					</div>
				</div>
				<div class="go-speek">
					<p>Хотите с нами работать? Давайте обсудим Ваш проект</p>
					<a class="button" href="/form/">Давайте</a>
				</div>
				<div class="address">
					<h2>Караганда</h2>
					<p>
						<b>+7 (7212)</b> 507-800<br>
						<br>
						ул. Мустафина,<br>
						д. 9/2, оф. 303<br>
						<br>
						<span class="biruza">Пн. Вт. Ср. Чт. Пт.</span><br>
						10:00 - 19:00
					</p>
				</div>
			</section>
		</div>
	</main>
<?php endwhile; endif; 
get_footer(); ?>