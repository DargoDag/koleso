<div class="center-wrap">
    <div class="back-button-wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
        <h1 class="content__title">Контакты</h1>
    </div>
</div>

<div class="contacts">
    <div class="contacts__grid center-wrap">
        <div class="contacts__block --address">
            <div class="contacts-info flex --direction-column">
                <div class="contacts-info__title h4 mt-40 mb-18"><b>Контакты и реквизиты</b></div>
                <div class="contacts-info__item">
                    <a href="#" class="contacts-info__icon btn --svg__mark-icon"></a>
                    <a href="#" class="contacts-info__link link --color-dark">Москва, Дорожная ул., д.1, стр. 3
                        «Б»</a>
                </div>
                <div class="contacts-info__item flex --direction-column">
                    <a href="tel:+78007771717" class="contacts-info__icon btn --svg__phone-icon"
                       title="8 800 777-17-17"></a>
                    <a href="tel:+78007771717" class="contacts-info__link link --color-dark"><b>8 800 777-17-17</b></a>
                    <a href="tel:+74959794660"
                       class="contacts-info__link contacts-info__link--secondary link --color-dark">+7 (495)
                        979-46-60</a>
                </div>
                <div class="contacts-info__item">
                    <a href="mailto:info@promkoleso.ru" class="contacts-info__icon btn --svg__mail-icon"></a>
                    <a href="mailto:info@promkoleso.ru"
                       class="contacts-info__link link --color-dark">info@promkoleso.ru</a>
                </div>
                <div class="contacts-info__item">
                    <span class="contacts-info__icon --svg__clock-icon"></span>
                    пн-пт: 9:30-17:30; сб, вс — выходные
                </div>
            </div>
            <button class="contacts-info__btn btn --l mt-48"><span
                        class="contacts-info__btn-icon --svg__plus-icon mr-12"></span><span>Реквизиты компании </span>
            </button>
        </div>
        <div class="contacts__block --callback">
            <form class="contacts-send flex --just-space" action="#" method="post" name="contacts-send">
                <div class="contacts-send__title h4 mt-40"><b>Обратная связь</b></div>
                <div class="contacts-send__title --2 h4 mt-40"><b>Отправить заявку</b></div>
                <div class="contacts-send__input big-input mt-24 input --l">
                    <input type="text" name="name" class="big-input__input input --l" required>
                    <div class="big-input__title">Имя</div>
                    <div class="big-input__error-wrap">
                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                    </div>
                </div>
                <div class="contacts-send__input big-input mt-12 input --l input__wrap --2-coll">
                    <input type="text" name="tel" class="big-input__input input --l" required>
                    <div class="big-input__title">Телефон</div>
                    <div class="big-input__error-wrap">
                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                    </div>
                </div>
                <div class="contacts-send__input big-input mt-12 input__wrap --l --2-coll">
                    <input type="text" name="email" class="big-input__input input --l" required>
                    <div class="big-input__title">e-mail</div>
                    <div class="big-input__error-wrap">
                        <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                        <div class="big-input__error-desc  p --m">Описание ошибки</div>
                    </div>
                </div>
                <textarea class="contacts-send__input contacts-send__input--textarea --fill mt-12 input --l" type="text"
                          placeholder="Сообщение"></textarea>
                <label class="contacts-send__checkbox checkbox mt-40">
                    <input type="checkbox" name="send-checkbox" checked="checked" required>
                    <div class="flex">
                        <div class="checkbox__trigger"></div>
                        <div class="checkbox__label --p ml-16">Согласен/а на <b>обработку персональных данных</b></div>
                    </div>
                </label>
                <button class="contacts-send__btn btn mt-24 --fill-1" type="submit"><span>Отправить</span></button>
            </form>
        </div>

        <div class="contacts__block --map">
            <?php require($_SERVER['DOCUMENT_ROOT'] . '/template/comp/map/__map.php'); ?>
        </div>
    </div>
</div>
