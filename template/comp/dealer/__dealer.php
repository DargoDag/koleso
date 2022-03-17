<div class="dealer flex --direction-column">
    <div class="back-button-wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
        <div class="content__title">Информация для дилеров</div>
    </div>
    <div class="dealer__wrap flex --just-space">
        <div class="dealer-info flex --direction-column">
            <div class="dealer-info__title h4 mt-40"><b>Как стать дилером</b></div>
            <p class="dealer-info__text mt-24">Мы всегда рады новым партнерам, которые хотят продавать качественные
                промышленные колеса в своем городе. Желательно, чтобы потенциальная организация-партнер распологалась в
                городе, которого пока нет на страничке <a href="#"
                                                          class="dealer-info__text--link link --color-dark">«Контакты»</a>.
                Но это не обязательный критерий, главное — желание и возможность продавать наш продукт.</p>
            <p class="dealer-info__text --small mt-32">Для получения информации о дилерах компании ООО
                «Пром-Колесо»:</p>
            <a href="tel:+74959794660" class="dealer-info__link link --color-dark mt-16"><b>+7 (495) 979-46-60
                    <span>(многоканальный)</span></b></a>
            <a href="tel:+74956606066" class="dealer-info__link link --color-dark mt-16"><b>+7 (495) 660-60-66</b></a>
            <div class="dealer-info__leftovers leftovers flex --direction-column --align-center pt-48 pl-72 pr-72 pb-56 mt-48">
                <p class="leftovers__text">Для информации о текущих остатках на данный момент авторизируйтесь в
                    системе:</p>
                <div class="leftovers__btn-wrapper mt-24">
                    <button class="leftovers__btn btn --l"><span>Авторизироваться</span></button>
                    <button class="leftovers__btn btn leftovers__btn--no-fill --l"><span>Текущие остатки</span></button>
                </div>
            </div>
        </div>
        <form class="dealer-send flex --just-space" action="#" method="post" name="dealer-send">
            <div class="dealer-send__title h4 mt-40"><b>Отправить заявку</b></div>
            <div class="dealer-send__input big-input mt-24 input --l">
                <input type="text" name="company" class="big-input__input input --l" required>
                <div class="big-input__title">Название компании</div>
                <div class="big-input__error-wrap">
                    <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                    <div class="big-input__error-desc  p --m">Описание ошибки</div>
                </div>
            </div>
            <div class="dealer-send__input big-input mt-12 input --l">
                <input type="text" name="site" class="big-input__input input --l" required>
                <div class="big-input__title">Сайт компании</div>
                <div class="big-input__error-wrap">
                    <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                    <div class="big-input__error-desc  p --m">Описание ошибки</div>
                </div>
            </div>

            <div class="dealer-send__input big-input mt-12 input --l input__wrap --2-coll">
                <input type="text" name="name" class="big-input__input input --l" required>
                <div class="big-input__title">Имя</div>
                <div class="big-input__error-wrap">
                    <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                    <div class="big-input__error-desc  p --m">Описание ошибки</div>
                </div>
            </div>
            <div class="dealer-send__input big-input mt-12 input --l input__wrap --2-coll">
                <input type="text" name="city" class="big-input__input input --l" required>
                <div class="big-input__title">Город</div>
                <div class="big-input__error-wrap">
                    <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                    <div class="big-input__error-desc  p --m">Описание ошибки</div>
                </div>
            </div>
            <div class="dealer-send__input big-input mt-12 input --l">
                <input type="text" name="contacts" class="big-input__input input --l" required>
                <div class="big-input__title">Телефон или e-mail</div>
                <div class="big-input__error-wrap">
                    <div class="big-input__error-title p --l"><b>Заголовок ошибки</b></div>
                    <div class="big-input__error-desc  p --m">Описание ошибки</div>
                </div>
            </div>
            <textarea class="dealer-send__input dealer-send__input--textarea --fill mt-12 input --l" type="text"
                      placeholder="Сообщение"></textarea>
            <label class="dealer-send__checkbox checkbox mt-40">
                <input type="checkbox" name="send-checkbox" checked="checked" required>
                <div class="flex">
                    <div class="checkbox__trigger"></div>
                    <div class="checkbox__label --p ml-16">Согласен/а на <b>обработку персональных данных</b></div>
                </div>
            </label>
            <button class="dealer-send__btn btn mt-24 --fill-1" type="submit"><span>Отправить</span></button>
        </form>
    </div>
</div>
