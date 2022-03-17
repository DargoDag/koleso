$(document).ready(function(){
	$('.scope__type a').on('click', function() {
        $('.scope__type a').removeClass('is-active');
        $(this).addClass('is-active');
	});	
});