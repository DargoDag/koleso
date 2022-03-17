<div class="history">
    <div class="page-header-personal__top-wrap flex --align-center">
        <div class="page-header-personal__back --svg__arrow-small-left link">
        </div>
        <h1 class="page-header__title h1"><b>Заказы</b></h1>
    </div>
    <div class="history__wrap flex --just-space  mt-40">
        <div class="personal-nav col --3 pr-56">
            <div class="personal-nav__stiky-wrap js-stiky">
                <div class="personal-nav__links">
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/cart.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Заказы <b>(3)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center is-active">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/clock.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>История заказов <b>(3)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/favor.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Избранное <b>(16)</b></span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/auth-2.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Личные данные</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/compare.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Сравнения</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                    <a href="#" class="personal-nav__link flex --align-center">
                        <div class="personal-nav__link-icon mr-16">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/logout.svg'); ?>
                        </div>
                        <div class="personal-nav__link-label col --auto p --l">
                            <span>Выйти</span>
                            <div class="personal-nav__link-border"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="personal-page__content col --9">
            <div class="order-history">
                <div class="tabs">
                    <div class="order-history__tabs tabs__btns flex --align-center">
                        <div class="order-history__tab mr-24 h5 tabs__btn --js" data-tab="1">Все</div>
                        <div class="order-history__tab mr-24 h5 tabs__btn --js is-active" data-tab="2">Новые</div>
                        <div class="order-history__tab mr-24 h5 tabs__btn --js" data-tab="3">Закрытые</div>
                    </div>
                    <div class="order-history__tabs tabs__blocks mt-40">
                        <div class="tabs__block --js --1 is-show">
                            <div class="order-history__sort-head pb-24 mt-48 flex --just-space">
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Заказ</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Сумма</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Статус</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Дата и время заказа</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-history__items">
                                <? for ($d=0; $d < 3; $d++) { ?>
                                    <div class="order-history-item">
                                        <div class="order-history-item__head flex --just-space --align-center py-32">
                                            <div class="order-history-item__name p --xl col --2">Заказ #2012/11</div>
                                            <div class="order-history-item__price p --xl col --2">5 560 р.</div>
                                            <div class="order-history-item__status col --2"><i class="order-history-item__status-circle"></i><span>Закрыт</span></div>
                                            <div class="order-history-item__date col --2">29.08.2019 13:11</div>
                                            <div class="order-history-item__toggle-btn">
                                                <div class="order-history-item__toggle-btn-v-line"></div>
                                                <div class="order-history-item__toggle-btn-h-line"></div>
                                            </div>
                                        </div>
                                        <div class="order-history-item__detail-info">
                                            <div class="order-history-item__items">
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-bl.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-bl.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#F5F7F9"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-gr.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-gr.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#E6F0F1"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-wh.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-wh.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#F5F7F9"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="tabs__block --js --2">
                            <div class="order-history__sort-head pb-24 mt-48 flex --just-space">
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Заказ</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Сумма</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Статус</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Дата и время заказа</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-history__items">
                                <? for ($d=0; $d < 3; $d++) { ?>
                                    <div class="order-history-item">
                                        <div class="order-history-item__head flex --just-space --align-center py-32">
                                            <div class="order-history-item__name p --xl col --2">Заказ #2012/11</div>
                                            <div class="order-history-item__price p --xl col --2">5 560 р.</div>
                                            <div class="order-history-item__status col --2"><i class="order-history-item__status-circle"></i><span>Закрыт</span></div>
                                            <div class="order-history-item__date col --2">29.08.2019 13:11</div>
                                            <div class="order-history-item__toggle-btn">
                                                <div class="order-history-item__toggle-btn-v-line"></div>
                                                <div class="order-history-item__toggle-btn-h-line"></div>
                                            </div>
                                        </div>
                                        <div class="order-history-item__detail-info">
                                            <div class="order-history-item__items">
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-bl.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-bl.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#F5F7F9"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-gr.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-gr.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#E6F0F1"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-wh.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-wh.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#F5F7F9"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="tabs__block --js --3">
                            <div class="order-history__sort-head pb-24 mt-48 flex --just-space">
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Заказ</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Сумма</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Статус</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                                <div class="order-history__sort-item col --2">
                                    <div class="catalog-filter__sort-value-wrap flex --align-center">
                                        <div class="catalog-filter__sort-value p --m mr-8">Дата и время заказа</div>
                                        <div class="catalog-filter__sort-icon --asc --svg__filter-sort"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-history__items">
                                <? for ($d=0; $d < 3; $d++) { ?>
                                    <div class="order-history-item">
                                        <div class="order-history-item__head flex --just-space --align-center py-32">
                                            <div class="order-history-item__name p --xl col --2">Заказ #2012/11</div>
                                            <div class="order-history-item__price p --xl col --2">5 560 р.</div>
                                            <div class="order-history-item__status col --2"><i class="order-history-item__status-circle"></i><span>Закрыт</span></div>
                                            <div class="order-history-item__date col --2">29.08.2019 13:11</div>
                                            <div class="order-history-item__toggle-btn">
                                                <div class="order-history-item__toggle-btn-v-line"></div>
                                                <div class="order-history-item__toggle-btn-h-line"></div>
                                            </div>
                                        </div>
                                        <div class="order-history-item__detail-info">
                                            <div class="order-history-item__items">
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-bl.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-bl.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#F5F7F9"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-wh.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-wh.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#F5F7F9"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="order-history-item__item">
                                                    <div class="cart-item py-40 flex">
                                                        <a href="#" class="cart-item__tumb flex --just-center mr-32">
                                                            <picture class="lazy">
                                                                <source srcset="/template/dist/img/wheel-wh.webp" type="image/webp">    
                                                                <img src="/template/img/wheel-wh.png" alt="Техника для склада">
                                                            </picture>
                                                            <div class="cart-item__tumb-bg" style="background-color:#F5F7F9"></div>
                                                        </a>
                                                        <div class="cart-item__info col --auto">
                                                            <div class="cart-item__head">
                                                                <a href="#" class="cart-item__name p --xl link --color-dark">Колесо под ось 533121, диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota (533121)</a>
                                                                <div class="cart-item__props mt-8 flex">
                                                                    <div class="cart-item__prop mr-16 p --m">Цвет: <b>Серый</b></div>
                                                                    <div class="cart-item__prop p --m">Артикул: <b>УТ000001378</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cart-item__bottom mt-16 flex --just-space --align-center">
                                                            <div class="cart-item__info-items grid --gap-56 --temp-col-5">
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Цена:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Коло-во:</div>
                                                                    <div class="cart-item__info-value p --l"><b>1</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col">
                                                                    <div class="cart-item__info-label p --m mb-8">Всего:</div>
                                                                    <div class="cart-item__info-value p --l"><b>4 708 р.</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Доставлен</div>
                                                                    <div class="cart-item__info-value p --l"><b>04.09.2019</b></div>
                                                                </div>
                                                                <div class="cart-item__info-col --mob">
                                                                    <div class="cart-item__info-label p --m mb-8">Оплата</div>
                                                                    <div class="cart-item__info-value p --l"><b>Наличными</b></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>