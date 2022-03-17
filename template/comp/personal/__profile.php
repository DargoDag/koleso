<div class="profile">
    <div class="back-button-wrapper">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
        <h1 class="content__title">Личные данные</h1>
    </div>
    <div class="profile__wrap flex --just-space">
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
                    <a href="#" class="personal-nav__link flex --align-center">
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
                    <a href="#" class="personal-nav__link flex --align-center is-active">
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
            <form class="personal-fields person">
                <div class="personal-fields__wrap grid --temp-col-2 --gap-16">
                    <div class="personal-field">
                        <div class="big-input --no-radius is-has">
                            <input type="text" class="big-input__input" value="Виталий Кличко">
                            <div class="big-input__title">ФИО</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius is-has">
                            <input type="text" class="big-input__input" value="email@gmail.com">
                            <div class="big-input__title">E-mail*:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius is-has">
                            <input type="text" class="big-input__input js-mask__tell --tell" value="8005553535">
                            <div class="big-input__title">Телефон*:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --password">
                            <input type="password" class="big-input__input">
                            <div class="big-input__title">Новый пароль</div>
                            <i class="show-password js-show-password --svg__eye"></i>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --password">
                            <input type="password" class="big-input__input">
                            <div class="big-input__title">Повторите пароль</div>
                            <i class="show-password js-show-password --svg__eye"></i>
                        </div>
                    </div>
                </div>
                <div class="personal-fields__wrap mt-24">
                    <div class="personal-field grid --temp-col-2 --gap-16 --align-center">
                        <div class="auth__form-bottom">
                            <div class="auth__policy">
                                <label class="checkbox --color-dark">
                                    <input type="checkbox" checked="checked">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger"></div>
                                        <div class="checkbox__label p --m ml-14">Даю согласие на <a href="#" class="link --color-dark"><b>обработку персональных данных</b></a></div>
                                    </div>
                                </label>
                            </div>
                            <div class="auth__policy mt-16">
                                <label class="checkbox --color-dark">
                                    <input type="checkbox" checked="checked">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger"></div>
                                        <div class="checkbox__label p --m ml-14">Подписаться на рассылку <a href="#" class="link --color-dark"><b>выгодных предложений</b></a></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <button class="personal-field__btn btn --xl">
                            <span class="p --xl">Сохранить изменения</span>
                        </button>
                    </div>
                </div>
            </form>
            <form class="personal-fields company is-active">
                <div class="personal-fields__wrap grid --temp-col-2 --gap-16">
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">Название компании:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">ИНН:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">КПП::</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">БИК:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">Корреспондентский счет:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">Расчетный счет:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">Юридический адрес</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --tell --no-radius --no-border">
                            <input type="text" class="big-input__input js-mask__tell --tell">
                            <div class="big-input__title">Телефон:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">Email*:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --no-border">
                            <input type="text" class="big-input__input">
                            <div class="big-input__title">Контактное лицо:</div>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --no-border --password">
                            <input type="password" class="big-input__input">
                            <div class="big-input__title">Новый пароль</div>
                            <i class="show-password js-show-password --svg__eye"></i>
                        </div>
                    </div>
                    <div class="personal-field">
                        <div class="big-input --no-radius --no-border --password">
                            <input type="password" class="big-input__input">
                            <div class="big-input__title">Повторите пароль</div>
                            <i class="show-password js-show-password --svg__eye"></i>
                        </div>
                    </div>
                </div>
                <div class="personal-fields__wrap mt-24">
                    <div class="personal-field grid --temp-col-2 --gap-16 --align-center">
                        <div class="auth__form-bottom">
                            <div class="auth__policy">
                                <label class="checkbox --color-dark">
                                    <input type="checkbox" checked="checked">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger"></div>
                                        <div class="checkbox__label p --m ml-14">Даю согласие на <a href="#" class="link --color-dark"><b>обработку персональных данных</b></a></div>
                                    </div>
                                </label>
                            </div>
                            <div class="auth__policy mt-16">
                                <label class="checkbox --color-dark">
                                    <input type="checkbox" checked="checked">
                                    <div class="flex --align-center">
                                        <div class="checkbox__trigger"></div>
                                        <div class="checkbox__label p --m ml-14">Подписаться на рассылку <a href="#" class="link --color-dark"><b>выгодных предложений</b></a></div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <button class="personal-field__btn btn --xl">
                            <span class="p --xl">Сохранить изменения</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
