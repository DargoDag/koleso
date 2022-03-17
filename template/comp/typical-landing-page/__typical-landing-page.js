$(window).load(function () {

    $('.js-swiper__materials').each(function () {
        var productsCarousel = new Swiper('.js-swiper__materials .swiper-container.--products', {
            slidesPerView: 1,
            slidesPerColumn: 1,
            spaceBetween: 8,
            loop: false,
            autoHeight: true,
            slidesPerGroup: 1,
            pagination: {
                el: '.js-swiper__materials .swiper-pagination.--products',
                clickable: true,
                type: "bullets",
            },
            navigation: {
                nextEl: '.js-swiper__materials .swiper-button-next.--products',
                prevEl: '.js-swiper__materials .swiper-button-prev.--products',
            },
            breakpoints: {
                990: {
                    slidesPerView: 2,
                    spaceBetween: 16,
                    pagination: {
                        type: 'fraction'
                    },
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 16,
                },
                375: {
                    slidesPerView: 1.3,
                    spaceBetween: 16,
                },
            }
        });
    });
});
