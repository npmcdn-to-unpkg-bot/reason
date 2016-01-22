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

<?php if (have_posts()) : while (have_posts()) : the_post();?>
	<main class="main">
		<div class="center">
			<section class="about-us">
				<div class="about-desc">
					<?php echo get_the_content(); ?>
				</div>
			</section>
			<section class="team-container">
				<h2>Наша команда</h2>

				<?php $args = array(
					'category__in' => array(10)
					);
				$projects_all = new WP_Query($args);
				if($projects_all->have_posts()):
					while($projects_all->have_posts()): $projects_all->the_post();?>

				<div class="dark-siders" style="background: url(<?php echo get_field("foto"); ?>) 50% 50% no-repeat;"><a href="<?php the_permalink(); ?>">
						<h3><span class="biruza"><?php echo get_the_title(); ?></span><br>
						<?php echo get_field("profi"); ?></h3>
					</a></div>

				<? endwhile; endif; ?>

			</section>
			<section class="vacancies-cont">
				<p>
					Хочешь пополнить<br>
					наши ряды?<br>
					<br>
					Жми сюда <span class="arrow"></span> <a href="/vacancies/"><b>Вакансии</b></a>
				</p>
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
<?php endwhile; endif; ?>

<?php get_footer(); ?>