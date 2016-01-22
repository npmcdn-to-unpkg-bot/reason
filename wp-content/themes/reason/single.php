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
if (in_category( array( 2, 3, 4 ) )) :
	while ( have_posts() ) : the_post(); ?>
	<main class="main">
		<div class="center">
			<section class="left">
				<h1><?php echo get_the_title(); ?></h1>
				<div id="tabs">
					<ul>
						<li><a href="#tabs1">Результат</a></li>
						<li><a href="#tabs2">Процесс</a></li>
						<li><a href="#tabs3">О заказчике</a></li>
					</ul>
					<div id="tabs_container">
						<?php $next = next_post_link( '%link', 'cледующий проект', true ); ?>
						<?php $previous = previous_post_link( '%link', 'предыдущий проект', true ); ?>
						<div id="tabs1">
							<?php echo get_the_content(); ?>
							<?php echo $previous; ?>
							<?php echo $next; ?>
						</div>
						<div id="tabs2">
							<?php echo get_field("process"); ?>
							<?php echo $previous; ?>
							<?php echo $next; ?>
						</div>
						<div id="tabs3">
							<?php echo get_field("client"); ?>
							<?php echo $previous; ?>
							<?php echo $next; ?>
						</div>
						<br>
						<br><p class="share-please">Поделитесь:</p>
						<section class="ya-share2" data-services="vkontakte,facebook,twitter"></section>
					</div>
				</div>
			</section>
			<aside class="aside">
				<a href="<?php echo get_field("link_to_site"); ?>" class="link-to-site">Посмотреть сайт</a>
				<h2>Дизайн разработан:</h2>
				<div class="desing-cont">
					<?php echo get_field("developers"); ?>
				</div>
			</aside>
		</div>
	</main>
<?php endwhile;
elseif (in_category( array( 10 ) )) :
	while ( have_posts() ) : the_post(); ?>

	<main class="main">
		<div class="center">
			<section class="nastavnik">
				<div class="img-cont">
					<div class="photo" style="background: url(<?php echo get_field("foto"); ?>) 50% 50% no-repeat;"></div>
					<h1><?php echo get_the_title(); ?></h1>
					<p class="dolzhnost"><?php echo get_field("profi"); ?></p>
					<div class="soc-button"></div>
					<div class="soc-button"></div>
				</div>
				<div class="blockquote">
					<blockquote><?php echo get_field("quote"); ?></blockquote>
				</div>
				<div class="opisanie">
					<?php echo get_the_content(); ?>
				</div>
			</section>
			<section class="last-news">
				<h2>Новости</h2>
				<ul class="news-grid">
					<li>
						<h3>Дизайнерские оргазмы и KPI Посоны, кажется я панк Посоны, кажется я панк кажется я панк кажется я панк кажется я панк</h3>
						<time>04 окт, 11:55</time>
					</li>
					<li>
						<h3>Дизайнерские оргазмы и KPI Посоны, кажется я панк Посоны, кажется я панк</h3>
						<time>04 окт, 11:55</time>
					</li>
					<li>
						<h3>Посоны, кажется я панк Посоны, кажется я панк Посоны, кажется я панк</h3>
						<time></time>
					</li>
					<li>
						<h3></h3>
						<time></time>
					</li>
					<li>
						<h3></h3>
						<time></time>
					</li>
				</ul>
			</section>
		</div>
	</main>

<?php endwhile;
elseif (in_category( array( 6, 7, 8, 9 ) )) :
	while ( have_posts() ) : the_post(); ?>

	<main class="content-all">
		<div class="scroll-line">
			<a href="#preview" class="h2-line" id="h2-line-1">
				<span class="width-line width-line-1"></span>
			</a>
			<a href="#h2-block-1" class="h2-line" id="h2-line-2">
				<span class="width-line width-line-2"></span>
				<p><?php echo get_field("h2-1"); ?></p>
			</a>
			<a href="#h2-block-2" class="h2-line" id="h2-line-3">
				<span class="width-line width-line-3"></span>
				<p><?php echo get_field("h2-2"); ?></p>
			</a>
			<a href="#h2-block-3" class="h2-line" id="h2-line-4">
				<span class="width-line width-line-4"></span>
				<p><?php echo get_field("h2-3"); ?></p>
			</a>
			<a href="#h2-block-4" class="h2-line" id="h2-line-5">
				<span class="width-line width-line-5"></span>
				<p><?php echo get_field("h2-4"); ?></p>
			</a>
			<a href="#h2-block-5" class="h2-line" id="h2-line-6">
				<span class="width-line width-line-6"></span>
				<p><?php echo get_field("h2-5"); ?></p>
			</a>
			<a href="#h2-block-6" class="h2-line" id="h2-line-7">
				<span class="width-line width-line-7"></span>
				<p><?php echo get_field("h2-6"); ?></p>
			</a>
			<a href="#h2-block-7" class="h2-line" id="h2-line-8">
				<span class="width-line width-line-8"></span>
				<p><?php echo get_field("h2-7"); ?></p>
			</a>
			<a href="#h2-block-8" class="h2-line" id="h2-line-9">
				<span class="width-line width-line-9"></span>
				<p><?php echo get_field("h2-8"); ?></p>
			</a>
			<a href="#h2-block-9" class="h2-line" id="h2-line-10">
				<span class="width-line width-line-10"></span>
				<p><?php echo get_field("h2-9"); ?></p>
			</a>
			<a href="#h2-block-10" class="h2-line" id="h2-line-11">
				<span class="width-line width-line-11"></span>
				<p><?php echo get_field("h2-10"); ?></p>
			</a>
		</div>
		<div class="center">
			<div class="preview-container" id="preview">
				<h1><?php echo get_the_title(); ?></h1>
				<?php echo get_the_content(); ?>
			</div>
			<div class="h2-block" id="h2-block-1">
				<h2><?php echo get_field("h2-1"); ?></h2>
				<?php echo get_field("text-1"); ?>
			</div>
			<div class="h2-block" id="h2-block-2">
				<h2><?php echo get_field("h2-2"); ?></h2>
				<?php echo get_field("text-2"); ?>
			</div>
			<div class="h2-block" id="h2-block-3">
				<h2><?php echo get_field("h2-3"); ?></h2>
				<?php echo get_field("text-3"); ?>
			</div>
			<div class="h2-block" id="h2-block-4">
				<h2><?php echo get_field("h2-4"); ?></h2>
				<?php echo get_field("text-4"); ?>
			</div>
			<div class="h2-block" id="h2-block-5">
				<h2><?php echo get_field("h2-5"); ?></h2>
				<?php echo get_field("text-5"); ?>
			</div>
			<div class="h2-block" id="h2-block-6">
				<h2><?php echo get_field("h2-6"); ?></h2>
				<?php echo get_field("text-6"); ?>
			</div>
			<div class="h2-block" id="h2-block-7">
				<h2><?php echo get_field("h2-7"); ?></h2>
				<?php echo get_field("text-7"); ?>
			</div>
			<div class="h2-block" id="h2-block-8">
				<h2><?php echo get_field("h2-8"); ?></h2>
				<?php echo get_field("text-8"); ?>
			</div>
			<div class="h2-block" id="h2-block-9">
				<h2><?php echo get_field("h2-9"); ?></h2>
				<?php echo get_field("text-9"); ?>
			</div>
			<div class="h2-block" id="h2-block-10">
				<h2><?php echo get_field("h2-10"); ?></h2>
				<?php echo get_field("text-10"); ?>
			</div>
			<?php /*for ($i=1, $j=2; $i < 11; $i++, $j++) {
				echo '
					<div class="h2-block" id="h2-block-' . $i . '">
						<h2>' . echo get_field("h2-' . $i . '"); . '</h2>
						' . get_field("text-' . $i . '"); . '
					</div>
				'
			} */?>
		</div>
	</main>

<?php endwhile;
elseif (in_category( array( 11, 12 ) )) :
	while ( have_posts() ) : the_post(); ?>

	<main>
		<div class="center">
			<h1><?php echo get_the_title(); ?></h1>
			<div class="content">
				<?php echo get_the_content(); ?>
			</div>
		</div>
	</main>

<?php endwhile; endif;
get_footer(); ?>