$(document).ready(function() {

	// Sticky Navigate Line
	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if(scroll > 160 ){
			$('.scroll-line').css({'position' : 'fixed', 'top' : '0'});
		} else {
			$('.scroll-line').css({'position' : 'absolute', 'top' : '160px'});
		}
	});

	// Navigate Line
	// Высота блоков с контентом
	var contentAllHeight = $('.content-all').height(),
	previewHeight = $('#preview').height(),
	content1Height = $('#h2-block-1').height(),
	content2Height = $('#h2-block-2').height(),
	content3Height = $('#h2-block-3').height(),
	content4Height = $('#h2-block-4').height(),
	content5Height = $('#h2-block-5').height(),
	content6Height = $('#h2-block-6').height(),
	content7Height = $('#h2-block-7').height(),
	content8Height = $('#h2-block-8').height(),
	content9Height = $('#h2-block-9').height(),
	content10Height = $('#h2-block-10').height();

	// Ширина блоков ссылок на раздел контента
	var previewWidth = ( previewHeight/contentAllHeight ) * 100,
	content1Width = ( content1Height/contentAllHeight ) * 100,
	content2Width = ( content2Height/contentAllHeight ) * 100,
	content3Width = ( content3Height/contentAllHeight ) * 100,
	content4Width = ( content4Height/contentAllHeight ) * 100,
	content5Width = ( content5Height/contentAllHeight ) * 100,
	content6Width = ( content6Height/contentAllHeight ) * 100,
	content7Width = ( content7Height/contentAllHeight ) * 100,
	content8Width = ( content8Height/contentAllHeight ) * 100,
	content9Width = ( content9Height/contentAllHeight ) * 100,
	content10Width = ( content10Height/contentAllHeight ) * 100;

	// Проверка наличия контента через высоту и задание ширины ссылке
	if (previewWidth != 0) {
		$('#h2-line-1').css({
			'display' : 'block',
			'width' : previewWidth + '%'
		});
	};
	if (content1Width != 0) {
		$('#h2-line-2').css({
			'display' : 'block',
			'width' : content1Width + '%'
		});
	};
	if (content2Width != 0) {
		$('#h2-line-3').css({
			'display' : 'block',
			'width' : content2Width + '%'
		});
	};
	if (content3Width != 0) {
		$('#h2-line-4').css({
			'display' : 'block',
			'width' : content3Width + '%'
		});
	};
	if (content4Width != 0) {
		$('#h2-line-5').css({
			'display' : 'block',
			'width' : content4Width + '%'
		});
	};
	if (content5Width != 0) {
		$('#h2-line-6').css({
			'display' : 'block',
			'width' : content5Width + '%'
		});
	};
	if (content6Width != 0) {
		$('#h2-line-7').css({
			'display' : 'block',
			'width' : content6Width + '%'
		});
	};
	if (content7Width != 0) {
		$('#h2-line-8').css({
			'display' : 'block',
			'width' : content7Width + '%'
		});
	};
	if (content8Width != 0) {
		$('#h2-line-9').css({
			'display' : 'block',
			'width' : content8Width + '%'
		});
	};
	if (content9Width != 0) {
		$('#h2-line-10').css({
			'display' : 'block',
			'width' : content9Width + '%'
		});
	};
	if (content10Width != 0) {
		$('#h2-line-11').css({
			'display' : 'block',
			'width' : content10Width + '%'
		});
	};

	$('a[href^="#"]').click(function(){
		var el = $(this).attr('href');
		$('body').animate({
			scrollTop: ($(el).offset().top - 30)}, 800);
		return false;
	});

	// Контейнеры скролла
	var previewContainer = $('#preview'),
	h2Block1 = $('#h2-block-1'),
	h2Block2 = $('#h2-block-2'),
	h2Block3 = $('#h2-block-3'),
	h2Block4 = $('#h2-block-4'),
	h2Block5 = $('#h2-block-5'),
	h2Block6 = $('#h2-block-6'),
	h2Block7 = $('#h2-block-7'),
	h2Block8 = $('#h2-block-8'),
	h2Block9 = $('#h2-block-9'),
	h2Block10 = $('#h2-block-10');

	// Заполнение линии скроллом
	$('.width-line-1').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], previewContainer);

	$('.width-line-2').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block1);

	$('.width-line-3').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block2);

	$('.width-line-4').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block3);

	$('.width-line-5').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block4);

	$('.width-line-6').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block5);

	$('.width-line-7').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block6);

	$('.width-line-8').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block7);

	$('.width-line-9').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block8);

	$('.width-line-10').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block9);

	$('.width-line-11').scroolly([
	{
		from: 'con-top = vp-top + 30',
		to: 'con-bottom = vp-top + 30',
		cssFrom:{
			'width': '0%'
		},
		cssTo:{
			'width': '100%'
		}
	}
	], h2Block10);

	$('.h2-line p').scroolly([
	{
		from: 'doc-top + 161',
		to: 'doc-bottom',
		css:{
			'display' : 'none'
		}
	},
	{
		from: 'doc-top',
		to: 'doc-top + 161',
		css:{
			'display' : 'block'
		}
	}
	]);

});