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

	<!-- Blog filter -->
	<section class="category-cont">
		<div class="center">
			<ul class="filter">
				<li><h1><b>Портфолио</b></h1></li>
				<li><a href="/portfolio-styles/"><h2>Фирменные стили</h2></a></li>
				<li><a href="/portfolio-websites/"><h2>Сайты и интерфейсы</h2></a></li>
				<li><a href="/portfolio-mobile/"><h2>Мобильные приложения</h2></a></li>
			</ul>
		</div>
	</section>

	<main class="main">
		<div class="center">
			<section class="grid">

				<?php $args = array(
					'category__in' => array(2, 3, 4),
					'posts_per_page' => 12
					);
				$projects_all = new WP_Query($args);
				if($projects_all->have_posts()):
					while($projects_all->have_posts()): $projects_all->the_post();?>

					<div class="grid-item">
						<a href="<?php the_permalink(); ?>" class="img-cont" style="background: url(<?php echo get_field("cover"); ?>) 50% 100% no-repeat;background-size: contain;"></a>
						<h3><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
						<h4><?php echo get_field("category"); ?></h4>
						<div class="arrow-block">
							<div class="arrow-stvol"></div>
							<div class="arrow-head"></div>
						</div>
					</div>

				<? endwhile; endif; ?>

			</section>
		</div>
	</main>

<?php get_footer(); ?>