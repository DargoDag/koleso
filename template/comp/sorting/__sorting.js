$(document).ready(function() {

    $('.--js__order-toggle').on('click', function() {
        $(this).toggleClass('is-active')
    })

});

$(window).load(function () {

    var series_carousel = new Swiper('.js-swiper__series .swiper-container', {
		slidesPerView: 'auto',
		slidesPerColumn: 1,
		spaceBetween: 4,
		loop:false,
		autoHeight:true,
		slidesPerGroup: 1,
		pagination: {
			el: '.js-swiper__series .swiper-pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.js-swiper__series .swiper-button-next',
			prevEl: '.js-swiper__series .swiper-button-prev',
		},
		breakpoints: {
			990: {
                slidesPerView: 12,
                spaceBetween: 4
            }
		}
	})

});
