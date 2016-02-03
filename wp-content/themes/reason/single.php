<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Reason
 */

get_header();
$post = $wp_query->post;
// Деталка проектов
if (in_category( array( 2, 3, 4 ) )) :
	while ( have_posts() ) : the_post(); ?>

	<main class="main">
		<div class="center">
			<section class="left">
				<h1><?php echo get_the_title(); ?></h1>
				<div id="tabs">
					<!-- Меню табов -->
					<ul>
						<li><a href="#tabs1">Результат</a></li>
						<?php if ( get_field("process") ) {
							echo '<li><a href="#tabs2">Процесс</a></li>';
						} ?>
						<?php if ( get_field("client") ) {
							echo '<li><a href="#tabs3">О заказчике</a></li>';
						} ?>
					</ul>
					<div id="tabs_container">
						<!-- Таб 1 -->
						<div id="tabs1">
							<div class="content">
								<?php echo the_content(); ?>
							</div>
							<div class="go-speek">
								<p>Нравится работа? Давайте обсудим Ваш проект</p>
								<a class="button" href="/form/">Давайте</a>
							</div>
							<p class="share-please">Поделитесь:</p>
							<section class="ya-share2" data-services="vkontakte,facebook,twitter"></section>
							<!-- Блок с ссылками на проекты -->
							<div class="nav-links">
								<?php previous_post_link( '%link', 'Предыдущий проект', true );
								next_post_link( '%link', 'Следующий проект', true ); ?>
							</div>
						</div>
						<!-- Таб 2 -->
						<div id="tabs2">
							<div class="content">
								<?php echo get_field("process"); ?>
							</div>
							<div class="go-speek">
								<p>Нравится работа? Давайте обсудим Ваш проект</p>
								<a class="button" href="/form/">Давайте</a>
							</div>
							<p class="share-please">Поделитесь:</p>
							<section class="ya-share2" data-services="vkontakte,facebook,twitter"></section>
							<!-- Блок с ссылками на проекты -->
							<div class="nav-links">
								<?php previous_post_link( '%link', 'Предыдущий проект', true );
								next_post_link( '%link', 'Следующий проект', true ); ?>
							</div>
						</div>
						<!-- Таб 3 -->
						<div id="tabs3">
							<div class="content">
								<?php echo get_field("client"); ?>
							</div>
							<div class="go-speek">
								<p>Нравится работа? Давайте обсудим Ваш проект</p>
								<a class="button" href="/form/">Давайте</a>
							</div>
							<p class="share-please">Поделитесь:</p>
							<section class="ya-share2" data-services="vkontakte,facebook,twitter"></section>
							<!-- Блок с ссылками на проекты -->
							<div class="nav-links">
								<?php previous_post_link( '%link', 'Предыдущий проект', true );
								next_post_link( '%link', 'Следующий проект', true ); ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<aside class="aside">
				<?php if ( get_field("link_to_site") ) {
					echo '<a href="' . get_field("link_to_site") . '" class="link-to-site" target="_blank">Посмотреть сайт</a>';
				} ?>
				<h2>Проект разработан:</h2>
				<div class="desing-cont">
					<?php echo get_field("developers"); ?>
				</div>
			</aside>
		</div>
	</main>

<?php endwhile;
// Деталка "О нас"
elseif (in_category( array( 10 ) )) :
	while ( have_posts() ) : the_post(); ?>

	<main class="main">
		<div class="center">
			<section class="nastavnik">
				<div class="img-cont">
					<div class="photo" style="background: url(<?php echo get_field("foto"); ?>) 50% 50% no-repeat;background-size:cover;"></div>
					<h1><?php echo get_the_title(); ?></h1>
					<p class="dolzhnost"><?php echo get_field("profi"); ?></p>
					<span class="soc-button" style="background: url() no-repeat;"></span>
					<span class="soc-button" style="background: url() no-repeat;"></span>
				</div>
				<div class="blockquote">
					<blockquote><?php echo get_field("quote"); ?></blockquote>
				</div>
				<div class="opisanie">
					<?php echo get_the_content(); ?>
				</div>
			</section>
			<section class="last-news">
				<h2>Мой блог</h2>
				<ul class="news-grid">

					<?php $args = array(
						'category__and' => array( 14, 15 ),
						'posts_per_page' => 12
						);
					$blog = new WP_Query($args);
					if($blog->have_posts()):
						while($blog->have_posts()): $blog->the_post();?>

						<article class="grid-item">
							<h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
							<time datetime="<?php the_time( 'Y-m-d' ); ?>" class="date-time"><?php the_time(); ?></time>
						</article>

					<?php endwhile; else:
						echo '<p class="fuuu">У этого сотрудника ещё нет статей</p>';
					endif; ?>

				</ul>
			</section>
		</div>
	</main>

<?php endwhile;
// Деталка блога
elseif (in_category( array( 6, 7, 8, 9 ) )) :
	while ( have_posts() ) : the_post(); ?>

	<main class="content-all">
		<div class="scroll-line">
			<a href="#preview" class="h2-line" id="h2-line-1">
				<span class="width-line width-line-1"></span>
			</a>
			<a href="#h2-block-1" class="h2-line" id="h2-line-2">
				<span class="width-line width-line-2"></span>
				<p><span>1.&nbsp;<?php echo get_field("h2-1"); ?></span></p>
			</a>
			<a href="#h2-block-2" class="h2-line" id="h2-line-3">
				<span class="width-line width-line-3"></span>
				<p><span>2.&nbsp;<?php echo get_field("h2-2"); ?></span></p>
			</a>
			<a href="#h2-block-3" class="h2-line" id="h2-line-4">
				<span class="width-line width-line-4"></span>
				<p><span>3.&nbsp;<?php echo get_field("h2-3"); ?></span></p>
			</a>
			<a href="#h2-block-4" class="h2-line" id="h2-line-5">
				<span class="width-line width-line-5"></span>
				<p><span>4.&nbsp;<?php echo get_field("h2-4"); ?></span></p>
			</a>
			<a href="#h2-block-5" class="h2-line" id="h2-line-6">
				<span class="width-line width-line-6"></span>
				<p><span>5.&nbsp;<?php echo get_field("h2-5"); ?></span></p>
			</a>
			<a href="#h2-block-6" class="h2-line" id="h2-line-7">
				<span class="width-line width-line-7"></span>
				<p><span>6.&nbsp;<?php echo get_field("h2-6"); ?></span></p>
			</a>
			<a href="#h2-block-7" class="h2-line" id="h2-line-8">
				<span class="width-line width-line-8"></span>
				<p><span>7.&nbsp;<?php echo get_field("h2-7"); ?></span></p>
			</a>
			<a href="#h2-block-8" class="h2-line" id="h2-line-9">
				<span class="width-line width-line-9"></span>
				<p><span>8.&nbsp;<?php echo get_field("h2-8"); ?></span></p>
			</a>
			<a href="#h2-block-9" class="h2-line" id="h2-line-10">
				<span class="width-line width-line-10"></span>
				<p><span>9.&nbsp;<?php echo get_field("h2-9"); ?></span></p>
			</a>
			<a href="#h2-block-10" class="h2-line" id="h2-line-11">
				<span class="width-line width-line-11"></span>
				<p><span>10.&nbsp;<?php echo get_field("h2-10"); ?></span></p>
			</a>
		</div>
		<div class="center">
			<div class="content-main">
				<div class="preview-container" id="preview">
					<h1><?php echo get_the_title(); ?></h1>
					<?php echo the_content(); ?>
				</div>
				<div class="h2-block" id="h2-block-1">
					<?php if ( get_field("h2-1") ) {
						echo '<h2>' . get_field("h2-1") . '</h2>';
					} ?>
					<?php echo get_field("text-1"); ?>
				</div>
				<div class="h2-block" id="h2-block-2">
					<?php if ( get_field("h2-2") ) {
						echo '<h2>' . get_field("h2-2") . '</h2>';
					} ?>
					<?php echo get_field("text-2"); ?>
				</div>
				<div class="h2-block" id="h2-block-3">
					<?php if ( get_field("h2-3") ) {
						echo '<h2>' . get_field("h2-3") . '</h2>';
					} ?>
					<?php echo get_field("text-3"); ?>
				</div>
				<div class="h2-block" id="h2-block-4">
					<?php if ( get_field("h2-4") ) {
						echo '<h2>' . get_field("h2-4") . '</h2>';
					} ?>
					<?php echo get_field("text-4"); ?>
				</div>
				<div class="h2-block" id="h2-block-5">
					<?php if ( get_field("h2-5") ) {
						echo '<h2>' . get_field("h2-5") . '</h2>';
					} ?>
					<?php echo get_field("text-5"); ?>
				</div>
				<div class="h2-block" id="h2-block-6">
					<?php if ( get_field("h2-6") ) {
						echo '<h2>' . get_field("h2-6") . '</h2>';
					} ?>
					<?php echo get_field("text-6"); ?>
				</div>
				<div class="h2-block" id="h2-block-7">
					<?php if ( get_field("h2-7") ) {
						echo '<h2>' . get_field("h2-7") . '</h2>';
					} ?>
					<?php echo get_field("text-7"); ?>
				</div>
				<div class="h2-block" id="h2-block-8">
					<?php if ( get_field("h2-8") ) {
						echo '<h2>' . get_field("h2-8") . '</h2>';
					} ?>
					<?php echo get_field("text-8"); ?>
				</div>
				<div class="h2-block" id="h2-block-9">
					<?php if ( get_field("h2-9") ) {
						echo '<h2>' . get_field("h2-9") . '</h2>';
					} ?>
					<?php echo get_field("text-9"); ?>
				</div>
				<div class="h2-block" id="h2-block-10">
					<?php if ( get_field("h2-10") ) {
						echo '<h2>' . get_field("h2-10") . '</h2>';
					} ?>
					<?php echo get_field("text-10"); ?>
				</div>
			</div>
		</div>
	</main>

<?php endwhile;
// Деталка новостей
elseif (in_category( array( 11, 12 ) )) :
	while ( have_posts() ) : the_post(); ?>

	<main>
		<div class="center">
			<h1><?php echo get_the_title(); ?></h1>
			<div class="content">
				<?php echo the_content(); ?>
			</div>
		</div>
	</main>

<?php endwhile; endif;
get_footer(); ?>