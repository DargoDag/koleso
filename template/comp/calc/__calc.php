<?php
    if (empty($calcModClass)) {
        $calcModClass = '';
    }
?>

<div class="calc <?php echo $calcModClass ?>">
    <div class="calc__content">
        <?php if (!empty($isShowCalcReturnLink)) { ?>
            <a href="#" class="calc__back link --color-dark --svg__back-icon mb-24">Вернуться назад в корзину</a>
        <?php } ?>
        <div class="calc__wrap">
            <div class="calc__wrap-top">
                <div class="calc__title h4">
                    До скидки в <b> 5%</b>
                    <span class="js-calc-tooltip calc__title-question --svg__question-icon"></span>
                    <div class="js-calc-tooltip-content calc__tooltip-content">
                        <ul>
                            <li>5% — при заказе от 30 тыс руб.</li>
                            <li>10% — при заказе от 60 тыс руб.</li>
                            <li>15% — при заказе от 100 тыс руб.</li>
                            <li>20% — при заказе от 200 тыс руб.</li>
                            <li>Спец. скидка – при заказе от 300 тыс руб.</li>
                            <li>На акционные товары скидка не распространяется</li>
                        </ul>
                    </div>
                </div>
                <div class="calc__discount flex --just-space mt-18">
                    <span class="calc__discount-name">Осталось набрать</span>
                    <div class="calc__discount-value"><b>25 000 р.</b></div>
                    <div class="calc__discount-progress progress">
                        <div class="progress__bar" style="width: 50%"></div>
                    </div>
                </div>
                <ul class="calc__calculations-list flex --direction-column mt-24">
                    <li class="calc__calculations-item flex  --just-space">
                        <span class="calc__calculation-name">Товаров:</span>
                        <div class="calc__calculation-value"><b>21 (ед.)</b></div>
                    </li>
                    <li class="calc__calculations-item flex  --just-space">
                        <span class="calc__calculation-name">Общая скидка:</span>
                        <div class="calc__calculation-value"><b>1 200 р.</b></div>
                    </li>
                    <li class="calc__calculations-item flex  --just-space">
                        <span class="calc__calculation-name">На сумму:</span>
                        <div class="calc__calculation-value"><b>25 000 р.</b></div>
                    </li>
                </ul>
            </div>
            <div class="calc__wrap-bottom">
                <div class="calc__weight-title mt-24">Общий вес заказа без упаковки:</div>
                <div class="calc__weight-value"><b>8.66 кг</b></div>
                <hr class="my-24">
                <div class="calc__total-title">Итого к оплате:</div>
                <div class="calc__total-value"><b>1 844 р.</b></div>
                <button class="order-send__btn btn mt-24 --fill-1" type="submit"><span>Оформить заказ</span></button>
            </div>
        </div>
    </div>
    <div class="calc__footer">
        <?php if (!empty($isShowCalcDeliveryBlock)) { ?>
            <ul class="calc-delivery">
                <li class="calc-delivery__item">
                    <a class="calc-delivery__link flex --align-center --just-space" href="#">
                        Доставка по Москве <span class="calc-delivery__icon --svg__delivery-arrow-icon"></span>
                    </a>
                </li>
                <li class="calc-delivery__item">
                    <a class="calc-delivery__link flex --align-center --just-space" href="#">
                        Доставка за пределами МКАД <span class="calc-delivery__icon --svg__delivery-arrow-icon"></span>
                    </a>
                </li>
            </ul>
        <?php } ?>
        <div class="calc__callback">
            <div class="calc__doubt">Сомневаетесь или есть вопросы?</div>
            <div class="calc__call mt-12">Просто позвоните:</div>
            <a href="tel:+78005514694" class="calc__phone link --color-dark"><b>8 800 551-46-94</b></a>
            <div class="calc__feedback mt-4">Заказать обратный звонок</div>
        </div>
    </div>
</div>

