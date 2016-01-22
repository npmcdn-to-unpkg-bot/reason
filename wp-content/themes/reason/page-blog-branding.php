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
				<li><a href="/blog/">Все</a></li>
				<li><h1><a href="/blog-branding/">Брендинг</a></h1></li>
				<li><a href="/blog-digital/">Диджитал</a></li>
				<li><a href="/blog-doings/">События</a></li>
				<li><a href="/blog-trends/">Технологии и тренды</a></li
			</ul>
		</div>
	</section>

	<main>
		<div class="center">
			<div class="grid">

				<?php $args = array(
					'category__in' => array(7),
					'posts_per_page' => 12
					);
				$blog = new WP_Query($args);
				if($blog->have_posts()):
					while($blog->have_posts()): $blog->the_post();?>

					<article class="grid-item">
						<h1><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" class="date-time"><?php the_time(); ?></time>
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_field("cover"); ?>" width="250" height="auto" alt="<?php echo get_the_title(); ?>"></a>
						<p class="anons"><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt() ?></a></p>
					</article>

				<? endwhile; endif; ?>

			</div>
		</div>
	</main>

<?php get_footer(); ?>