<div class="order">
    <div class="back-button-wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
        <h1 class="content__title">Оформление заказа</h1>
    </div>
    <form class="order-info flex --just-space" action="#" method="post" name="order-send">
        <div class="order-info__send">
            <div class="flex --align-center --just-space mb-24">
                <label class="order-tumbler tumbler person">
                    <input type="radio" checked="checked" name="person">
                    <div class="order-tumbler__radio flex --align-center">
                        <div class="tumbler__trigger"></div>
                        <div class="tumbler__label --p ml-16">Для физических лиц</div>
                    </div>
                </label>
                <label class="order-tumbler tumbler person">
                    <input type="radio" name="person">
                    <div class="order-tumbler__radio flex --align-center">
                        <div class="tumbler__trigger"></div>
                        <div class="tumbler__label --p ml-16">Для юридических лиц </div>
                    </div>
                </label>
            </div>
            <div class="order-send flex --just-space">
                <div class="order-send__input big-input mt-12 input --l input__wrap mb-24">
                    <input type="text" name="name" class="big-input__input input --l" required>
                    <div class="big-input__title">ФИО получателя*:</div>
                    <div class="big-input__error-wrap">
                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                    </div>
                </div>
                <div class="order-send__input big-input mt-12 input__wrap mb-24">
                    <input type="text" name="email" class="big-input__input input --l" required>
                    <div class="big-input__title">e-mail*:</div>
                    <div class="big-input__error-wrap">
                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                    </div>
                </div>
                <div class="order-send__input big-input mt-12 input__wrap mb-24">
                    <input type="text" name="tel" class="big-input__input input --l" required>
                    <div class="big-input__title">Телефон*:</div>
                    <div class="big-input__error-wrap">
                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                    </div>
                </div>
                <textarea class="order-send__input order-send__input--textarea --fill mt-12 input --l" type="text" placeholder="Ваш комментарий:"></textarea>
            </div>
            <div class="order__title h4 b mt-48"><b>Как доставить заказ?</b></div>
            <div class="order-info__delivery">
                <div class="order-info__descr flex --align-center --just-space">
                    <label class="order-tumbler tumbler tumbler--delivery">
                        <input type="radio" checked="checked" name="delivery">
                        <div class="order-tumbler__radio flex --align-center">
                            <div class="tumbler__trigger"></div>
                            <div class="tumbler__label --p ml-16">Самовывоз</div>
                        </div>
                    </label>
                    <label class="order-tumbler tumbler tumbler--delivery">
                        <input type="radio" checked="checked" name="delivery">
                        <div class="order-tumbler__radio flex --align-center">
                            <div class="tumbler__trigger"></div>
                            <div class="tumbler__label --p ml-16">Курьерская доставка</div>
                        </div>
                    </label>
                    <label class="order-tumbler tumbler tumbler--delivery">
                        <input type="radio" checked="checked" name="delivery">
                        <div class="order-tumbler__radio flex --align-center">
                            <div class="tumbler__trigger"></div>
                            <div class="tumbler__label --p ml-16">Доставка по России</div>
                        </div>
                    </label>
                    <div class="order-info__descr">
                        <p class="order-info__text  mt-8">Самовывоз осуществляется  со склада "Стелла-техник"  по адресу: <b>г. Москва, ул. Дорожная, д. 1, стр. 3 «Б»</b></p>
                        <p class="mt-8">пн-пт с 9:00 до 17:30, суббота, воскресенье - выходные</p>
                        <p class="mt-8">Обратите внимание, отгрузки осуществляются с 9:30 до 17:00, с понедельника по пятницу.</p>
                    </div>
                </div>
            </div>
            <div class="order-info__policy mt-80">
                <label class="order-send__checkbox checkbox mt-40">
                    <input type="checkbox" name="send-checkbox" checked="checked" required>
                    <div class="flex">
                        <div class="checkbox__trigger"></div>
                        <div class="checkbox__label --p ml-16">Я согласен на обработку моих <b>персональных данных для оформления заказа</b></div>
                    </div>
                </label>
                <label class="order-send__checkbox checkbox mt-40">
                    <input type="checkbox" name="send-checkbox" checked="checked" required>
                    <div class="flex mt-8">
                        <div class="checkbox__trigger"></div>
                        <div class="checkbox__label --p ml-16">Подписаться на рассылку <b>выгодных предложений</b></div>
                    </div>
                </label>
            </div>
        </div>
        <div class="order-info__calc">
            <?php $calcModClass = '--bottom --order' ?>
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/calc/__calc.php'); ?>
        </div>
    </form>
</div>
