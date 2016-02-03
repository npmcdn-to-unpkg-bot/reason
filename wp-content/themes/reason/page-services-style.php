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
					<li><h1>Фирменные стили</h1></li>
					<li><h2><a href="/services-websites/">Сайты и интерфейсы</a></h2></li>
					<li><h2><a href="/services-mobile/">Мобильные приложения</a></h2></li>
				</ul>
				<div class="tabs_container">
					<p>Разработка фирменного стиля является одним из ключевых этапов в брендинге компаний и продуктов. Айдентика объединяет всю маркетинговую активность и создает синергию взаимодействия, когда один маркетинговый канал усиляет следующий. Студия знает всё о психологических аспектах фирменного стиля.</p>
					<h3>Под фирменным стилем Студия имеет ввиду:</h3>
					<ul>
						<li>Логотип</li>
						<li>Элементы корпоративной идентичности (Элементы фирменного стиля)</li>
						<li>Нейминг</li>
						<li>Системы коммуникации</li>
						<li>Рекламные материалы</li>
						<li>Гайдлайны</li>
					</ul>
					<h3>Примеры работ в этом направлении:</h3>
					<div class="grid">
					
						<?php $args = array(
							'category__in' => array(2),
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