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

get_header(); ?>

	<main class="main">
		<div class="center">
			<section class="form-cont">
				<h1>Заполните заявку чтобы обсудить Ваш проект, либо задайте вопросы — мы скоро ответим.</h1>
				<form class="head">
					<input type="text" name="name" placeholder="Имя">
					<input type="tel" name="number" placeholder="Телефон">
					<input type="email" name="email" placeholder="Электронная почта">
					<textarea name="message" placeholder="Сообщение"></textarea>
					<button>Отправить</button>
				</form>
			</section>
		</div>
	</main>

<?php get_footer(); ?>