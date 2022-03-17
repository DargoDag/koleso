<div class="sorting">
    <div class="center-wrap">
        <div class="sorting__wrap">
            <?php if (empty($isNotShowSortingType)) { ?>
                <div class="sorting__type-wrap">
                    <div class="type-items flex --just-center">
                        <div class="type-item p --xl is-active">Серии колес</div>
                        <div class="type-item p --xl">По материалу</div>
                        <div class="type-item p --xl">По нагрузке</div>
                        <div class="type-item p --xl">По сфере применения</div>
                        <div class="type-item p --xl">По типу колеса</div>
                        <div class="type-item p --xl">По типу крепления</div>
                    </div>
                </div>
            <?php } ?>
            <div class="sorting__sub-wrap flex --align-center --just-space mt-32">
                <div class="sorting__series-wrap col --8">
                    <div class="series-items">
                        <div class="type-carusel js-swiper__series">
                            <div class="type-carusel__swiper flex --align-center">
                                <div class="type-carusel__btn --left swiper-button-prev"></div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="type-carusel__btn --right swiper-button-next"></div>
                            </div>
                            <div class="type-carusel__pagination" style="display: none">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/sorting/__sorting-order.php'); ?>
            </div>
        </div>
    </div>
</div>
