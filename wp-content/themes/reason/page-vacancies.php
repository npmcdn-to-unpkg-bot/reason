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
			<section class="vakancii">
				<h1>Вакансии</h1>
				<div class="accordion">
					<div class="accordion-section">

						<a class="accordion-section-title" href="#accordion-1">Дизайнер</a>
						<div id="accordion-1" class="accordion-section-content">
							<p>Да. поселок газифицирован. ГРП была установлена, как и планировалось, 01 октября 2015 г.</p>
							<ul>
								<li>Dоселок газифи</li>
								<li>поселок газифи</li>
								<li>поселок газифи</li>
							</ul>
						</div>

						<a class="accordion-section-title" href="#accordion-2">Если я решу построить сам - выйдет дешевле?</a>
						<div id="accordion-2" class="accordion-section-content">
							<p>Мы покупаем стройматериалы вагонами и поставщики дают нам цены значительно ниже, чем сможет получить розничный покупатель. Рабочие у нас работают за значительно меньшие деньги, т.к. знают, что обеспечены работой на несколько лет вперед, чего Вы никак не сможете получить нанимая бригаду на строительство 1 дома. И так, во всем...</p>
						</div>

						<a class="accordion-section-title" href="#accordion-3">Как получить прописку?</a>
						<div id="accordion-3" class="accordion-section-content">
							<p>Вы без проблем сможете прописаться в своём коттедже, подав заявление в районную администрацию.</p>
						</div>

						<a class="accordion-section-title" href="#accordion-4">Если Я хочу дом по своему проекту - построите?</a>
						<div id="accordion-4" class="accordion-section-content">
							<p>Да, безусловно - мы можем построить дом по Вашему проекту и на Вашей земле, однако стоимость такого строительства необходимо пересчитывать.</p>
						</div>

						<a class="accordion-section-title" href="#accordion-5">Ипотека</a>
						<div id="accordion-5" class="accordion-section-content">
							<p>Наши дома проходят под ипотеку, которую Вы можете оформить в любом банке по оптимальным для себя условиям.</p>
						</div>

						<a class="accordion-section-title" href="#accordion-6">Как и сколько добираться до центра города?</a>
						<div id="accordion-6" class="accordion-section-content">
							<p>До исторического центра Ярославля на машине - 15 мин, на автобусе 20. По дороге никогда не бывает пробок, т.к. вы едете через новый Юбилейный мост построенный к 1000-летию Ярославля.</p>
						</div>

					</div>
				</div>
			</section>
		</div>
	</main>

<?php get_footer(); ?>