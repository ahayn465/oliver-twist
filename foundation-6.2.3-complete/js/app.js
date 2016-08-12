$(document).ready(function() {
	$(".wine-menu__tab").click(function(){
		$('.wine-menu__tab').children().removeClass('active');
		$(this).children().addClass('active');

		var id = $(this).attr('id');
		$('.wine-menu__section').removeClass('wine-menu__section--active');
		var selector = '#wine-menu__section--' + id;
		$(selector).addClass('wine-menu__section--active');
	});

});


