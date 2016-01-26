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
			<section class="top-news">

				<h1>Все новости за 2015 год</h1>

				<?php $args = array(
					'category__in' => array(12),
					'posts_per_page' => 3
					);
				$query = new WP_Query($args);
				if($query->have_posts()):
					while($query->have_posts()): $query->the_post();?>

					<article>
						<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a><span class="arrow"></span></h2>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time(); ?></time>
						<a href="<?php the_permalink(); ?>"><p><?php echo get_the_excerpt(); ?></p></a>
					</article>

				<? endwhile; endif; ?>

			</section>
			<section class="grid">

				<?php $args = array(
					'category__in' => array(11),
					'posts_per_page' => 12
					);
				$query_grid = new WP_Query($args);
				if($query_grid->have_posts()):
					while($query_grid->have_posts()): $query_grid->the_post();?>

					<article class="grid-item">
						<h2><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a><span class="arrow"></span></h2>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time(); ?></time>
						<a href="<?php the_permalink(); ?>"><p><?php echo get_the_excerpt(); ?></p></a>
					</article>

				<? endwhile; endif; ?>

			</section>
		</div>
	</main>

<?php get_footer(); ?>