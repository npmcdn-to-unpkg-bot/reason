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

get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>
	<main class="main">
		<div class="center1030">
			<section class="uslugi">
				<p class="ways">
					Ключевые направления Cтудии Ризн — создание сайтов, мобильных приложений, проектирование интерфейсов, айдентика и дизайн упаковки. Ризн помогает клиентам построить долгосрочные отношения со своей аудиторией, создать новый продукт и увеличить продажи при помощи дизайна.
				</p>
				<p class="sfera"><?php echo get_field("callout"); ?></p>
				<ul class="nav">
					<li><a href="/services-style/">Фирменные стили</a></li>
					<li><a href="/services-websites/">Сайты и интерфейсы</a></li>
					<li><a href="/services-mobile/">Мобильные приложения</a></li>
				</ul>
				<h2>Студия поможет Вам:</h2>
				<ul class="help">
					<li>Создать:</li>
					<li>образ<br>
					впечатление<br>
					эмоции</li>
					<li>Укрепить:</li>
					<li>позиции на рынке<br>
					отношения с клиентом<br>
					рекламные каналы</li>
					<li>Продать:</li>
					<li>продукт<br>
					услугу<br>
					пользу</li>
				</ul>
				<p class="shema">Схема работы Студии учитывает индивидуальность каждого клиента и сегмент, в котором он работает. Для этого существует длительный этап предварительной подготовки, он позволяет максимально вникнуть в бизнес клиента и понять его ключевые механизмы.</p>
			</section>

			<section class="process">
				<div class="center1030-620">
					<div class="lines"></div>
					<div class="process-circle"></div>
					<h3>Процесс работы</h3>
					<div class="circle circle-1">
						<p>Выясняем задачи и потребности бизнеса</p>
					</div>
					<h4>Задаем<br>вопросы</h4>
					<div class="circle circle-2">
						<p>Жизнь проекта только началась, учим его ходить</p>
					</div>
					<h4>Развиваем</h4>
					<div class="circle circle-3">
						<p>Проводим анализ целей и задач. Ищем средства их достижения</p>
					</div>
					<h4>Определяем направление</h4>
					<div class="circle circle-4">
						<p>Все результаты кропотливой работы попадают в портфолио</p>
					</div>
					<h4>Создаем</h4>
					<div class="circle circle-5">
						<p>Чтобы понимать — это повторять не стоит, а вот это — идея очень даже ничего</p>
					</div>
					<h4>Исследуем рынок</h4>
					<div class="circle circle-6">
						<p>И не в конце проекта, а как можно скорее</p>
					</div>
					<h4>Проверяем</h4>
					<div class="circle circle-7">
						<p>Определяем целевую аудиторию, чтобы оценить точность выбранного</p>
					</div>
					<h4>Работаем<br>с целевой аудиторией</h4>
					<div class="circle circle-8">
						<p>Проектиро-вание помогает устранить ошибки с наименьшими потерями времени</p>
					</div>
					<h4>Проектируем</h4>
					<div class="desc-cont">
						<div class="desc-div desc-div-1">
							<h5>Как?</h5>
							<p>Проводим брифинг, глубинное интервью с клиентом, встречи и мозговые штурмы. Погружаемся в мир клиента</p>
						</div>
						<div class="desc-div desc-div-2">
							<h5>Как?</h5>
							<p>Исходя из ресурсов и сроков выбираем наиболее оптимальные инструменты</p>
						</div>
						<div class="desc-div desc-div-3">
							<h5>Как?</h5>
							<p>Проводим аудит конкурентов и их маркетинговой активности, ищем слабые и сильные стороны, проецируем на проект</p>
						</div>
						<div class="desc-div desc-div-4">
							<h5>Как?</h5>
							<p>Сегментируем, разбиваем на группы, на каждую моделируем «персонажа»</p>
						</div>
						<div class="desc-div desc-div-5">
							<h5>Как?</h5>
							<p>Проектируем «сценарий пользователя», создаем мудборды</p>
						</div>
						<div class="desc-div desc-div-6">
							<h5>Как?</h5>
							<p>Тестируем на фокус-группах, запускаем проект в тестовом режиме, советуемся с коллегами</p>
						</div>
						<div class="desc-div desc-div-7">
							<h5>Как?</h5>
							<p>Людьми. Используя мозговые штурмы, специализированные программы и множество новых инструментов, требуемых в рамках проекта</p>
						</div>
						<div class="desc-div desc-div-8">
							<h5>Как?</h5>
							<p>Сопровождаем, поддерживаем, наблюдаем и регулярно корректируем</p>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>

<?php endwhile; endif;
get_footer(); ?>