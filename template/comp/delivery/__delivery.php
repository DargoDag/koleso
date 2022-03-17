<?php
    $deliveryPaymentItems = [
        [
            'icon' => '--svg__delivery-payment-pos-terminal-icon',
            'icon_mod' => '--post-terminal',
            'title' => 'Безналичная <br>оплата по счету'
        ],
        [
            'icon' => '--svg__delivery-payment-wallet-icon',
            'icon_mod' => '--wallet',
            'title' => 'Наличными <br>курьеру'
        ],
        [
            'icon' => '--svg__delivery-payment-bank-card-icon',
            'icon_mod' => '--bank-card',
            'title' => 'Банковской <br>картой курьеру'
        ],
        [
            'icon' => '--svg__delivery-payment-bank-card-icon',
            'icon_mod' => '--bank-card',
            'title' => 'Банковской <br>картой курьеру'
        ]
    ];
?>

<div class="delivery">
    <div class="back-button-wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
        <h1>Получение товара и оплата</h1>
    </div>
    <div class="tabs">
        <div class="tabs__btns-wrapper">
            <div class="tabs__btns flex">
                <div class="tabs__btn --js" data-tab="1">Самовывоз</div>
                <div class="tabs__btn --js" data-tab="2">Доставка по Москве</div>
                <div class="tabs__btn --js is-active" data-tab="3">Доставка за МКАД</div>
                <div class="tabs__btn --js" data-tab="4">Доставка по России</div>
            </div>
        </div>
        <div class="tabs__blocks mb-64">
            <div class="tabs__block --js --1">
                <div></div>
            </div>
            <div class="tabs__block --js --2">
                <div></div>
            </div>
            <div class="tabs__block --js --3 is-show">
                <div>
                    <ul class="tabs__block-list flex --just-space">
                        <li class="tabs__block-item col --4">
                            <span class="tabs__block-icon --svg__check-icon"></span>
                            <span class="tabs__block-title">Курьерская доставка за пределы МКАД <br>осуществляется из расчета 30 руб. за 1
                            км. <br>Например: доставка до г. Ногинск (30 км <br>от МКАД) = 900 руб.</span>
                        </li>
                        <li class="tabs__block-item col --4">
                            <span class="tabs__block-icon --svg__check-icon"></span>
                            <span class="tabs__block-title">Стоимость доставки, грузов весом свыше <br>1500 кг, сборных заказов,
                            негабаритных <br>грузов и грузов длиной более 3 м <br>рассчитывается индивидуально.</span>
                        </li>
                        <li class="tabs__block-item col --4">
                            <span class="tabs__block-icon --svg__check-icon"></span>
                            <span class="tabs__block-title">Сроки курьерской доставки: <br>Москва/МО: 1-2 рабочих дня. <br>На выходных доставка
                            не <br>осуществляется.</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tabs__block --js --4">
                <div></div>
            </div>
        </div>
    </div>
    <div class="delivery__payment">
        <div class="delivery__payment-title-wrapper">
            <h4 class="delivery__payment-title">
                <span>Доступные способы оплаты</span>
            </h4>
        </div>

        <div class="js-delivery-payment-slider delivery-payment swiper-container">
            <div class="delivery-payment__list swiper-wrapper">
                <?php foreach ($deliveryPaymentItems as $deliveryPaymentItem) { ?>
                    <div class="delivery-payment__item swiper-slide">
                        <div class="delivery-payment__card">
                            <div class="delivery-payment__icon-wrapper">
                                <span class="delivery-payment__icon <?php echo $deliveryPaymentItem['icon_mod'] ?> <?php echo $deliveryPaymentItem['icon'] ?>"></span>
                            </div>
                            <div class="delivery-payment__title"><?php echo $deliveryPaymentItem['title'] ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

    </div>
    <div class="delivery__button-wrapper mt-40">
        <button class="delivery__button btn --border-5" type="button">
            <span class="delivery__button-icon --svg__plus-icon mr-8"></span>
            <span>Реквизиты компании</span>
        </button>
    </div>
</div>
