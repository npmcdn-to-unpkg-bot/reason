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
			<section class="uslugi">
				<ul class="nav">
					<li><h2><a href="/services-style/">Фирменные стили</a></h2></li>
					<li><h1>Сайты и интерфейсы</h1></li>
					<li><h2><a href="/services-mobile/">Мобильные приложения</a></h2></li>
				</ul>
				<div class="tabs_container">
					<p>Удобство сайта — первоочередно. Следом идет соответствие фирменному стилю, психоэмоциональной воздействие и богатство функционала. Но, ясность для посетителя на первом месте.</p>
					<h3>Услуги в направлении сайты и интерфейсы:</h3>
					<ul>
						<li>Высоконагруженные проекты</li>
						<li>Корпоративные сайты</li>
						<li>Промо-сайты</li>
						<li>Адаптивные сайты и мобильные версии</li>
						<li>Интернет-магазины</li>
						<li>Сервисы и порталы</li>
					</ul>
					<h3>Примеры работ в этом направлении:</h3>
					<div class="grid">
						<?php $args = array(
							'category__in' => array(3),
							'posts_per_page' => 3
							);
						$projects_all = new WP_Query($args);
						if($projects_all->have_posts()):
							while($projects_all->have_posts()): $projects_all->the_post();?>

							<div class="grid-item">
								<a href="<?php the_permalink(); ?>" class="img-cont" style="background: url(<?php echo get_field("cover"); ?>) 50% 100% no-repeat;background-size:contain;"></a>
								<h4><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h4>
								<h5><?php echo get_field("category"); ?></h5>
								<div class="arrow-block">
									<div class="arrow-stvol"></div>
									<div class="arrow-head"></div>
								</div>
							</div>

						<? endwhile; endif; ?>
					</div>
				</div>
			</section>
		</div>
	</main>

<?php get_footer(); ?>