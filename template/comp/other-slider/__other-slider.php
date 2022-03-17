<div class="wheel --other-slider js-other-slider-wrapper">
    <div class="center-wrap">
        <div class="type-carusel js--other-slider">
            <div class="type-carusel__head flex --align-center --just-space mb-32">
                <div class="type-carusel__title h3">Другие типы креплений</div>
                <div class="type-carusel__nav flex --align-center">
                    <div class="js-other-slider-btn-prev type-carusel__btn --left swiper-button-prev"></div>
                    <div class="type-carusel__pagination mx-16">
                        <div class="js-other-slider-pagination swiper-pagination"></div>
                    </div>
                    <div class="js-other-slider-btn-next type-carusel__btn --right swiper-button-next"></div>
                </div>
                <div class="type-carusel__button-all-wrapper">
                    <a class="type-carusel__button-all btn --dark" href="#">Все</a>
                </div>
            </div>
        </div>
        <div class="swiper-container js-other-slider">
            <div class="wheel-cards wheel-slider swiper-wrapper">
                <?php for ($i = 0; $i < 12; $i++) { ?>
                    <div class="wheel-slider__item swiper-slide">
                        <div class="wheel-cards__item --mount-type flex">
                            <a href="#" class="wheel-cards__title --mount-type link --color-dark">
                                <div>Колеса под стандартную нагрузку до 200 кг</div>
                            </a>
                            <picture class="lazy" data-iesrc="/template/img/mount-type.png" data-alt="Тип крепления">
                                <source srcset="/template/dist/img/mount-type.webp" type="image/webp">
                                <img class="wheel-cards__img --mount-type" src="/template/img/mount-type.png"
                                     alt="Тип крепления">
                            </picture>
                            <div class="wheel-cards__back">
                                <a href="#"><span class="--svg__arrow-circle"></span></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
