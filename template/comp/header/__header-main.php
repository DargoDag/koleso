<div class="js-header-sticky header-main flex --align-center --just-space <?php echo (!empty($headerMainModClass) ? $headerMainModClass : '') ?>">
    <div class="header-main__catalog-wrap flex --align-center">
        <div class="catalog mr-24">
            <div class="catalog__btn btn --fill-1 --js__catalog-btn flex --align-center">
                <div class="catalog__btn-icon --svg__menu-icon mr-12"></div>
                <div class="catalog__btn-label p --l">Каталог</div>
            </div>
            <div class="js-header-catalog-menu menu flex --align-stretch" style="display: none">
                <div class="menu-items">
                    <a href="#" data-id="1" class="menu-item link flex --align-center p --xl is-active">
                        <span class="menu-item__icon mr-32">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/series-icon.svg'); ?>
                        </span>
                        Серии колес
                    </a>
                    <a href="#" data-id="2" class="menu-item link --material flex --align-center p --xl">
                        <span class="menu-item__icon mr-32">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/material-icon.svg'); ?>
                        </span>
                        По материалу
                    </a>
                    <a href="#" data-id="3" class="menu-item link flex --align-center p --xl">
                        <span class="menu-item__icon mr-32">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/weight-icon.svg'); ?>
                        </span>
                        По нагрузке
                    </a>
                    <a href="#" data-id="4" class="menu-item link flex --align-center p --xl">
                        <span class="menu-item__icon mr-32">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/cart-icon.svg'); ?>
                        </span>
                        По сфере применения
                    </a>
                    <a href="#" data-id="5" class="menu-item link flex --align-center p --xl">
                        <span class="menu-item__icon mr-32">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/flame-icon.svg'); ?>
                        </span>
                        По типу колеса
                    </a>
                    <a href="#" data-id="6" class="menu-item link flex --align-center p --xl">
                        <span class="menu-item__icon mr-32">
                            <?php include($_SERVER['DOCUMENT_ROOT'].'/template/dist/img/wheel-icon.svg'); ?>
                        </span>
                        По типу крепления
                    </a>
                </div>
                <div class="sub-menu-wrap py-64 px-112">
                    <div class="sub-menu --1">
                        <div class="sub-menu__title h3">
                            <b>По серии</b>
                            <span class="sub-menu__title-count p --l ml-18">123 ед.</span>
                        </div>
                        <div class="sub-menu-items grid --temp-col-2 --gap-20 mt-40">
                            <a href="#" class="sub-menu-item link p --xl">Алюминий</a>
                            <a href="#" class="sub-menu-item link p --xl">Нейлон</a>
                            <a href="#" class="sub-menu-item link p --xl">Нержавеющая сталь</a>
                            <a href="#" class="sub-menu-item link p --xl">Полиуретан</a>
                            <a href="#" class="sub-menu-item link p --xl">Полиамид</a>
                            <a href="#" class="sub-menu-item link p --xl">Пластик</a>
                            <a href="#" class="sub-menu-item link p --xl">Стойкие к агрессивным средам</a>
                            <a href="#" class="sub-menu-item link p --xl">Антистатические колеса (серая резина)</a>
                            <a href="#" class="sub-menu-item link p --xl">Черная резина</a>
                            <a href="#" class="sub-menu-item link p --xl">Эластичная резина</a>
                            <a href="#" class="sub-menu-item link p --xl">Цельнолитые</a>
                            <a href="#" class="sub-menu-item link p --xl">Фенольные</a>
                            <a href="#" class="sub-menu-item link p --xl">Чугун</a>
                        </div>
                    </div>
                    <div class="sub-menu --2" style="display: none">
                        <div class="sub-menu__title h3">
                            <b>По материалу</b>
                            <span class="sub-menu__title-count p --l ml-18">123 ед.</span>
                        </div>
                        <div class="sub-menu-items grid --temp-col-2 --gap-20 mt-40">
                            <a href="#" class="sub-menu-item link p --xl">Алюминий</a>
                            <a href="#" class="sub-menu-item link p --xl">Нейлон</a>
                            <a href="#" class="sub-menu-item link p --xl">Нержавеющая сталь</a>
                            <a href="#" class="sub-menu-item link p --xl">Полиуретан</a>
                            <a href="#" class="sub-menu-item link p --xl">Полиамид</a>
                            <a href="#" class="sub-menu-item link p --xl">Пластик</a>
                            <a href="#" class="sub-menu-item link p --xl">Стойкие к агрессивным средам</a>
                            <a href="#" class="sub-menu-item link p --xl">Антистатические колеса (серая резина)</a>
                            <a href="#" class="sub-menu-item link p --xl">Черная резина</a>
                            <a href="#" class="sub-menu-item link p --xl">Эластичная резина</a>
                            <a href="#" class="sub-menu-item link p --xl">Цельнолитые</a>
                            <a href="#" class="sub-menu-item link p --xl">Фенольные</a>
                            <a href="#" class="sub-menu-item link p --xl">Чугун</a>
                        </div>
                    </div>
                    <div class="sub-menu-wrap__pattern --svg__pattern--wheel"></div>
                </div>
            </div>
        </div>
        <div class="header-main__sub-menu">
            <div class="sub-menu-items">
                <a href="#" class="sub-menu-item link --p">Подбор колес</a>
                <a href="#" class="sub-menu-item --sale link flex --align-center --p mt-4">
                    Акции
                    <span class="sub-menu-item__count p --m ml-8">15</span>
                </a>
            </div>
        </div>
    </div>
    <div class="header-main__search-wrap flex --align-center col --7">
        <a href="/" class="header-main__logo link --align-center col --2 mr-24">
            <picture class="header-main__logo-thumb lazy">
                <source srcset="/template/dist/img/logo.webp" type="image/webp">
                <source srcset="/template/dist/img/logo.png" type="image/png">
            </picture>
        </a>
        <form action="#" method="post" name="" class="header-main__search col --5">
            <input class="input --fill" name="search" type="text" placeholder="Поиск">
            <button type="send" class="header-main__search-btn btn feedback btn-success --svg__search-icon"></button>
        </form>
    </div>
    <div class="header-main__wrap flex --align-center">
        <div class="header-main__tel-wrap mr-16">
            <a href="tel:+74953163000" class="header-main__tel link p --m">+7 (495) 316-30-00</a>
            <a href="tel:88005514694" class="header-main__tel link mt-4">8 800 551 46 94</a>
        </div>
        <a href="#" data-popup="#" class="header-main__feedback-btn btn mr-32">Заказать <br>звонок</a>
        <div class="sub-menu-items flex --align-center">
            <a href="#" class="sub-menu-item btn --svg__compare-icon"></a>
            <a href="#" class="sub-menu-item btn --svg__favor-icon"></a>
            <a href="#" class="sub-menu-item btn --svg__cart-icon">
                <span class="sub-menu-item__count p --m">15</span>
            </a>
        </div>
    </div>
</div>
