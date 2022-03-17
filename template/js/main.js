function initMainSlider() {
    const wrapper = document.querySelector('.js-main-page-slider-wrapper');

    if (!wrapper) {
        return;
    }

    const slider = wrapper.querySelector('.js-main-page-slider');
    const scrollbar = wrapper.querySelector('.js-main-page-slider-scrollbar');
    const scrollbarNumber = wrapper.querySelector('.js-main-page-slider-scrollbar-number');
    const pagination = wrapper.querySelector('.js-main-page-slider-pagination');
    const paginationFraction = wrapper.querySelector('.js-main-page-slider-pagination-fraction');
    const prev = wrapper.querySelector('.js-main-page-slider-prev');
    const next = wrapper.querySelector('.js-main-page-slider-next');

    const swiper = new Swiper(slider, {
        slidesPerView: 1,
        slidesPerColumn: 1,
        spaceBetween: 8,
        loop: false,
        slidesPerGroup: 1,
        pagination: {
            el: pagination,
            type: 'bullets',
            renderCustom: (sw, current, total) => {
                const number = (current < 10 ? `0${current}` : current);

                if (scrollbarNumber) {
                    scrollbarNumber.textContent = number;
                }

                return `<span class="swiper-pagination-current">${current}</span>` +
                        ' / ' +
                        `<span class="swiper-pagination-total">${total}</span>`;
            }
        },
        autoplay: {
            delay: 3000
        },
        navigation: {
            nextEl: next,
            prevEl: prev
        },
        scrollbar: {
            el: scrollbar,
            draggable: true,
            hide: false
        },
        breakpoints: {
            990: {
                slidesPerView: 1,
                spaceBetween: 24,
            },
            640: {
                slidesPerView: 1,
                spaceBetween: 16
            }
        }
    });

    function customPagination() {
        const total = swiper.slides.length;
        const current = swiper.activeIndex + 1;
        const number = (current < 10 ? `0${current}` : current);

        const fractionHtml =
            `<span>${current}</span>` +
            ' / ' +
            `<span>${total}</span>`

        if (paginationFraction) {
            paginationFraction.innerHTML = fractionHtml;
        }

        if (scrollbarNumber) {
            scrollbarNumber.textContent = number;
        }
    }

    customPagination();

    swiper.on('slideChange', customPagination);
}

$(document).ready(function () {

    const observer = lozad('.lazy');
    observer.observe();

    // $('.').on('click', function(){
    // });

    // $('.js-stiky').hcSticky({
    // 	top: 170,
    // 	bottom: 20,
    // });

    $('.js-mask__tel').inputmask('+7(999) 999-99-99');
    $('.js-mask__email').inputmask("email")

});

$(window).load(function () {
    initMainSlider();
});

window.onload = function () {
    setTimeout(function () {
        const map = document.getElementById('map');

        if (map) {
            map.src = 'https://yandex.ru/map-widget/v1/?um=constructor%3Aeb02101d4885b4190d2e96856b143bd48ae1a60374f1bbb232576b9ec1e1dd70&amp;source=constructor';
        }
    }, 3000);
};
