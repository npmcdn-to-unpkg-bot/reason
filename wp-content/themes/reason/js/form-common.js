$(document).ready(function() {

	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$(".head").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				
				$(".head").trigger("reset");
			}, 100);
		});
		return false;
	});

});