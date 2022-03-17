<div class="bottom-nav">
    <div class="bottom-nav__bar flex --just-space">
        <a href="/" class="bottom-nav__bar-link --home link flex --direction-column --just-space --align-center">
            <div class="bottom-nav__bar-icon --svg__main-house-icon"></div>
            <div class="bottom-nav__bar-label">Главная</div>
        </a>
        <div class="bottom-nav__bar-link --catalog link flex --direction-column --just-space --align-center js-mob-catalog-menu">
            <div class="bottom-nav__bar-icon --svg__catalog-search-icon"></div>
            <div class="bottom-nav__bar-label">Каталог</div>
        </div>
        <a href="/fave/" class="bottom-nav__bar-link --favor link flex --direction-column --just-space --align-center">
            <div class="bottom-nav__bar-icon --svg__favor-icon"></div>
            <div class="bottom-nav__bar-label">Избранное</div>
            <? if ($fave_total != null || $fave_total['count'] != 0) { ?>
                <div class="header__personal-count js-fave-total-count --fave <? if ($fave_total == null || $fave_total['count'] == 0) { ?> --hidden<? } ?>"><?= $fave_total['count'] ?></div>
            <? } else { ?>
                <div class="header__personal-count js-cart-fave-count --fave <? if ($fave_total == null || $fave_total['count'] == 0) { ?> --hidden<? } ?>"></div>
            <? } ?>
        </a>
        <a href="/cart/"
           class="bottom-nav__bar-link --cart link flex --direction-column --just-space --align-center js-toggle-full-menu">
            <div class="bottom-nav__bar-icon --svg__cart"></div>
            <div class="bottom-nav__bar-label">Корзина</div>
            <? if ($cart_total != null && count($cart_total) > 0 && $cart_total['count'] != 0) { ?>
                <div class="header__personal-count js-cart-total-count --cart <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>"><?= $cart_total['count'] ?></div>
            <? } else { ?>
                <div class="header__personal-count js-cart-total-count --cart <? if ($cart_total == null || $cart_total['count'] == 0) { ?> --hidden<? } ?>"></div>
            <? } ?>
        </a>
    </div>
    <div class="bottom-nav__catalog-menu">
        <div class="mob-catalog-menu">
            <div class="mob-catalog-menu__head">
                <div class="mob-catalog-menu__label --main h3">
                    <b>Каталог</b>
                </div>
                <button class="mob-catalog-menu__close-btn mob-nav__close-menu js-mob-catalog-menu"
                        type="button"></button>
                <div class="menu" style="display: none">
                    <div class="menu-items">
                        <a href="#" data-id="1" class="menu-item --mob link is-active">
                            <span class="menu-item__icon">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/dist/img/series-icon.svg'); ?>
                            </span>
                            <div class="menu-item__content">
                                <span class="menu-item__title">Серии колес</span>
                                <span class="personal-nav__link-arrow-icon">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                </span>
                            </div>
                        </a>
                        <a href="#" data-id="2" class="menu-item --mob link">
                            <span class="menu-item__icon">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/dist/img/material-icon.svg'); ?>
                            </span>
                            <div class="menu-item__content">
                                <span class="menu-item__title">По материалу</span>
                                <span class="personal-nav__link-arrow-icon">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                </span>
                            </div>
                        </a>
                        <a href="#" data-id="3" class="menu-item --mob link">
                            <span class="menu-item__icon">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/dist/img/weight-icon.svg'); ?>
                            </span>
                            <div class="menu-item__content">
                                <span class="menu-item__title">По нагрузке</span>
                                <span class="personal-nav__link-arrow-icon">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                </span>
                            </div>
                        </a>
                        <a href="#" data-id="4" class="menu-item --mob link">
                            <span class="menu-item__icon">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/dist/img/cart-icon.svg'); ?>
                            </span>
                            <div class="menu-item__content">
                                <span class="menu-item__title">По сфере применения</span>
                                <span class="personal-nav__link-arrow-icon">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                </span>
                            </div>
                        </a>
                        <a href="#" data-id="5" class="menu-item --mob link">
                            <span class="menu-item__icon">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/dist/img/flame-icon--mob.svg'); ?>
                            </span>
                            <div class="menu-item__content">
                                <span class="menu-item__title">По типу колеса</span>
                                <span class="personal-nav__link-arrow-icon">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                </span>
                            </div>
                        </a>
                        <a href="#" data-id="6" class="menu-item --mob link">
                            <span class="menu-item__icon">
                                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/dist/img/wheel-icon.svg'); ?>
                            </span>
                            <div class="menu-item__content">
                                <span class="menu-item__title">По типу крепления</span>
                                <span class="personal-nav__link-arrow-icon">
                                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                </span>
                            </div>
                        </a>
                    </div>
                    <div class="sub-menu-wrap">
                        <div class="sub-menu --1">
                            <div class="sub-menu__title h3">
                                <div class="--svg__menu-back"></div>
                                <b>По серии</b>
                            </div>
                            <div class="sub-menu-items">
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Алюминий</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Нейлон</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Нержавеющая сталь</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Не оставляющее следов</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Полиуретан</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Полиамид</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Пластик</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Стойкие к агрессивным средам</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Антистатические колеса</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Черная резина</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Эластичная резина</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Цельнолитые</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Фенольные</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Чугун</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="sub-menu --2">
                            <div class="sub-menu__title h3">
                                <div class="--svg__menu-back"></div>
                                <b>По материалам</b>
                            </div>
                            <div class="sub-menu-items">
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Алюминий</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Нейлон</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Нержавеющая сталь</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Не оставляющее следов</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Полиуретан</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Полиамид</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Пластик</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Стойкие к агрессивным средам</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Антистатические колеса</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Черная резина</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Эластичная резина</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Цельнолитые</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Фенольные</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                                <a href="#" class="sub-menu-item --mob link">
                                    <span class="sub-menu-item__title">Чугун</span>
                                    <span class="personal-nav__link-arrow-icon">
                                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mob-nav">
    <div class="mob-nav__bar">
        <div class="mob-nav__wrap flex --just-space --align-center">
            <div class="mob-nav__menu-btn js-toggle-full-menu flex --just-center --align-center --direction-column">
                <div class="left-side">
                    <div class="mob-nav__menu-btn-line"></div>
                    <div class="mob-nav__menu-btn-line"></div>
                    <div class="mob-nav__menu-btn-line"></div>
                </div>
                <div class="right-side">
                    <div class="mob-nav__menu-btn-line --first"></div>
                    <div class="mob-nav__menu-btn-line"></div>
                    <div class="mob-nav__menu-btn-line --last"></div>
                </div>
            </div>
            <a href="/" class="mob-nav__logo">
                <picture class="lazy">
                    <source srcset="/template/dist/img/logo-mobile.webp" type="image/webp">
                    <source srcset="/template/dist/img/logo-mobile.png" type="image/png">
                </picture>
            </a>
            <a class="mob-nav__menu-btn mob-nav__search" href="#">
                <span class="mob-nav__search-icon --svg__search-icon"></span>
            </a>
        </div>
    </div>
    <div class="mob-nav__full-menu">
        <div class="mob-nav__menu-shade animated fadeIn js-toggle-full-menu"></div>
        <button class="mob-nav__close-menu js-toggle-full-menu" type="button"></button>
        <div class="mob-nav__menu animated fadeInLeft">
            <ul class="mob-nav__menu-items">
                <li class="mob-nav__menu-item">
                    <a href="/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Главная</div>
                        <div class="personal-nav__link-arrow-icon">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                        </div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/catalog/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Каталог</div>
                        <div class="personal-nav__link-arrow-icon">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                        </div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/shops/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">О компании</div>
                        <div class="personal-nav__link-arrow-icon">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                        </div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/delivery/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Доставка и оплата</div>
                        <div class="personal-nav__link-arrow-icon">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                        </div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/service/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Фото продукции</div>
                        <div class="personal-nav__link-arrow-icon">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                        </div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/contacts/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Как стать дилером</div>
                        <div class="personal-nav__link-arrow-icon">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                        </div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
                <li class="mob-nav__menu-item">
                    <a href="/contacts/" class="mob-nav__menu-link link --p flex --align-center">
                        <div class="mob-nav__menu-name col --auto">Контакты</div>
                        <div class="personal-nav__link-arrow-icon">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-small.svg'); ?>
                        </div>
                    </a>
                    <div class="mob-nav__menu-arrow --svg__mob-nav--arrow"></div>
                </li>
            </ul>
            <div class="mob-nav__menu-links">
                <div class="menu-links__icon --svg__mob-nav-whastapp">
                    <!-- <div class="--svg__mob-nav-whastapp"></div> -->
                </div>
                <div class="menu-links__contacts">
                    <a href="tel:+78005514694" class="menu-links__contact link --b"><b>8 800 551 46 94</b></a>
                    <a href="tel:+74959794660" class="menu-links__contact link">+7 (495) 979-46-60</a>
                </div>
            </div>
        </div>
    </div>
</div>
