<?php
    $cartItems = [
        [
            'img' => '/template/dist/img/wheel-black.png',
            'webp' => '/template/dist/img/wheel-black.webp',
            'bg' => '--color__fill-4'
        ],
        [
            'img' => '/template/dist/img/wheel-green.png',
            'webp' => '/template/dist/img/wheel-green.webp',
            'bg' => '--color__gray-3'
        ],
        [
            'img' => '/template/dist/img/wheel-orange.png',
            'webp' => '/template/dist/img/wheel-orange.webp',
            'bg' => '--color__fill-4'
        ],
    ];
?>

<div class="cart">
    <div class="cart-grid flex --just-space">
        <div class="cart-grid__item col --9">
            <div class="flex --just-space --align-center mb-32">
                <div class="flex --align-center">
                    <div class="back-button-wrapper">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
                        <h1 class="mr-24">Корзина</h1>
                    </div>

                    <div class="cart__number flex --direction-column">
                        <span class="cart__order-number p --l">№ 1234566</span>
                        <span class="cart__order-date p --m">от 24.05.2020</span>
                    </div>
                </div>
                <div>
                    <ul class="cart-actions flex">
                        <li class="cart-actions__item --link">
                            <a class="cart-actions__link link p --m" href="#">
                                <span class="cart-actions__icon --link --svg__link-icon"></span>
                                <span class="cart-actions__title">Cсылка на корзину</span>
                            </a>
                        </li>
                        <li class="cart-actions__item --trash">
                            <a class="cart-actions__link link p --m" href="#">
                                <span class="cart-actions__icon --trash --svg__trash-icon"></span>
                                <span class="cart-actions__title">Очистить</span>
                            </a>
                        </li>
                        <li class="cart-actions__item --print">
                            <a class="cart-actions__link link p --m" href="#">
                                <span class="cart-actions__icon --print --svg__print-icon"></span>
                                <span class="cart-actions__title">Распечатать заказ</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <form class="search-form --cart" action="">
                <input class="search-form__input" type="text" placeholder="Добавление товаров в корзину">
                <button class="search-form__button btn --dark" type="submit">
                    <span class="search-form__button-icon --svg__plus-white-icon"></span>
                    <span class="search-form__button-text">Добавить товар</span>
                </button>
            </form>
            <?php $calcModClass = '--top' ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/calc/__calc.php'); ?>
            <div>
                <ul>
                    <?php foreach ($cartItems as $cartItem) { ?>
                        <li class="cart-product flex --just-space">
                            <div class="cart-product__block --desktop col --2">
                                <a class="cart-product__img-wrapper --desktop" href="#">
                                    <div class="cart-product__img-bg"
                                         style="background-color: var(<?php echo $cartItem['bg'] ?>)"></div>
                                    <picture class="lazy" style="display: block; min-height: 1rem;">
                                        <source type="image/webp" srcset="<?php echo $cartItem['webp'] ?>">
                                        <source type="image/jpeg" srcset="<?php echo $cartItem['img'] ?>">
                                    </picture>
                                </a>
                            </div>
                            <div class="cart-product__block col --7">
                                <div class="card-product-mobile-grid">
                                    <div class="card-product-mobile-grid__item --img">
                                        <a class="cart-product__img-wrapper --mobile" href="#">
                                            <div class="cart-product__img-bg"
                                                 style="background-color: var(<?php echo $cartItem['bg'] ?>)"></div>
                                            <picture class="lazy" style="display: block; min-height: 1rem;">
                                                <source type="image/webp" srcset="<?php echo $cartItem['webp'] ?>">
                                                <source type="image/jpeg" srcset="<?php echo $cartItem['img'] ?>">
                                            </picture>
                                        </a>
                                    </div>
                                    <div class="card-product-mobile-grid__item --title">
                                        <a class="cart-product__title link --color-dark p --l" href="#">Колесо под ось
                                            533121,
                                            диам= 80 мм, груз-ть=65кг, черная резина / сталь, Италия, Tellure Rota
                                            (533121)</a>
                                        <div class="cart-product__description-wrapper mt-8">
                                            <ul class="flex mb-24">
                                                <li class="cart-product__description p --m">
                                                    <span>Серия:</span>
                                                    <span class="cart-product__value">714203</span>
                                                </li>
                                                <li class="cart-product__description p --m">
                                                    <span>Вес:</span>
                                                    <span class="cart-product__value">25 гр.</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-product__feature flex --just-space">
                                    <ul class="cart-product__list --price flex">
                                        <li class="cart-product__item --price">
                                            <span class="cart-product__description --mobile p --m">Цена:</span>
                                            <span class="cart-product__price">4 708 р.</span>
                                            <div class="flex">
                                                <span class="cart-product__discount">-16%</span>
                                                <span class="cart-product__price-old p --m ml-8">5 885 р.</span>
                                            </div>
                                        </li>
                                        <li class="cart-product__item --count mr-24">
                                            <span class="cart-product__description --mobile p --m mb-8">Кол-во:</span>
                                            <div class="cart-product__counter px-14 py-14">
                                                <div class="counter-calc" data-min="1" data-max="10">
                                                    <div class="counter-calc__wrap flex --align-center">
                                                        <div class="counter-calc__btn disable-btn btn js-minus is-disable">
                                                            <span class="counter-calc__icon --minus --svg__counter--minus-black"></span>
                                                        </div>
                                                        <input type="text" class="counter-calc__input p --xl" value="1">
                                                        <div class="counter-calc__btn btn js-plus">
                                                            <span class="counter-calc__icon --plus --svg__counter--plus-black"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="cart-product__description --mobile p --m">Всего:</span>
                                            <span class="cart-product__price">4 708 р.</span>
                                            <div class="flex">
                                                <span class="cart-product__discount">-16%</span>
                                                <span class="cart-product__price-old p --m ml-8">5 885 р.</span>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class="cart-product__list cart-product__actions flex --align-center">
                                        <li class="cart-product__item--icon --compare">
                                            <button class="cart-product__button" type="button">
                                                <span class="cart-product__icon --compare --svg__add-compare-icon"></span>
                                                <span class="cart-product__button-text"></span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="cart-product__button" type="button">
                                                <span class="cart-product__icon --favor --svg__favor-icon"></span>
                                                <span class="cart-product__button-text">Отложить</span>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="cart-product__button" type="button">
                                                <span class="cart-product__icon --trash --svg__trash-red-icon"></span>
                                                <span class="cart-product__button-text">Удалить</span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="cart-grid__item --calc col --3">
            <?php $calcModClass = '--bottom' ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/calc/__calc.php'); ?>
        </div>
    </div>
    <div class="content__wrap mt-64 pb-112">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-recomend.php'); ?>
    </div>
</div>
