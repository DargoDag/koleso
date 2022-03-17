$(function () {
    const otherSliderWrapper = document.querySelector('.js-other-slider-wrapper');

    if (!otherSliderWrapper) {
        return false;
    }

    const otherSlider = otherSliderWrapper.querySelector('.js-other-slider');
    const prevBtn = otherSliderWrapper.querySelector('.js-other-slider-btn-prev');
    const nextBtn = otherSliderWrapper.querySelector('.js-other-slider-btn-next');
    const pagination = otherSliderWrapper.querySelector('.js-other-slider-pagination');

    if (!otherSlider) {
        return false;
    }

    const otherSliderSwiper = new Swiper(otherSlider, {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 8,
        pagination: {
            el: pagination,
            clickable: true,
            type: 'bullets'
        },
        navigation: {
            nextEl: nextBtn,
            prevEl: prevBtn
        },
        breakpoints: {
            // when window width is >= 320px
            320: {
              slidesPerView: 1.2,
              slidesPerGroup: 1,
              spaceBetween: 16
            },
            // when window width is >= 480px
            480: {
              slidesPerView: 1.5,
              slidesPerGroup: 1,
              spaceBetween: 20
            },
            // when window width is >= 640px
            640: {
              slidesPerView: 2,
              slidesPerGroup: 2,
              spaceBetween: 40
            },
            900: {
              slidesPerView: 3,
              slidesPerGroup: 2,
              spaceBetween: 20,
              pagination: {
                  type: 'fraction'
              },
            }
          }
    });

    otherSliderSwiper.on('slideChange', function () {
        const observer = lozad('.lazy');
        observer.observe()
    });
});
