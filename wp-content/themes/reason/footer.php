<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Reason
 */

?>

	<footer class="main-footer">
		<div class="center">
			<p class="license">© РИЗН Студия графического дизайна<br>
				<br>
				2013&#8209;2015&nbsp;Все&nbsp;права&nbsp;защищены</p>
			<p class="address">Казахстан, г. Караганда<br>
				ул. Алиханова, дом 37, офис 625<br>
				+7 (7212) 507-800</p>
		</div>
	</footer>
	
	<div class="hidden"></div>

	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->

<?php wp_footer(); ?>
<script>
	$(window).load(function() {
		var w = $(window).height();
		var b = $('body').height() - 140;
		var f = $('.main-footer');
		if( ((w - b) - 140) >= 0 ) {
			f.height(w - b);
		} else {
			f.height(140);
		}
	});
</script>
</body>
</html>
