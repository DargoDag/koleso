<div class="filter --catalog">
    <div class="center-wrap">
        <div class="filter__wrap">
            <div class="filter__mob-link --js__open-filter-link flex --align-center --just-space" style="display: none">
                <div class="filter__mob-link-label">Фильтр</div>
                <div class="filter__mob-link-icon"></div>
            </div>
            <div class="filter__subwrap">
                <div class="filter-items flex --align-stretch --just-space">
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Диаметр, мм</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Диаметр, мм</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>0</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16"></div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Контактный слой</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Контактный слой</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>0</span>
                                                </div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16"></div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Тип кронштейна</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Тип кронштейна</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>0</span>
                                                </div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" <? if ($is_selected == true) {?> checked="checked" <? } ?> name="product_type" value="<?=$el?>">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16"><?=$el?></div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Способ крепления</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Способ крепления</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>0</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="radio" name="product_type" value="">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16"></div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Диаметр оси ступицы, мм</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Диаметр оси ступицы, мм</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Выбрано:</div>
                            <div class="filter-item__count">
                                <b>
                                    2
                                    <span>ед.</span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <div class="filter-items__rangeslide-wrap col --2">
                        <div class="filter-items__rangeslide-title filter-item__label js-filter-item-btn --p">Нагрузка, кг</div>
                        <div class="filter-items__rangeslide-sub-wrap">
                            <input type="text" class="filter-items__rangeslider js-range-slider --catalog" name="catalog" value="" />
                        </div>
                    </div>
                </div>
                <div class="filter-items flex --align-stretch --just-space mt-24 is-hidden" style="display: none">
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Материал обшивки:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Выбрано:</div>
                            <div class="filter-item__count">
                                <b>
                                    2
                                    <span>ед.</span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Стиль:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Тип кресла:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8 disable">
                                                <input type="checkbox" name="product_type" disabled value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8 disable">
                                                <input type="checkbox" name="product_type" disabled value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Производство:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8 disable">
                                                <input type="checkbox" name="product_type" disabled value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-items flex --align-stretch --just-space mt-24 is-hidden" style="display: none">
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Материал обшивки:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Выбрано:</div>
                            <div class="filter-item__count">
                                <b>
                                    2
                                    <span>ед.</span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Стиль:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Тип кресла:</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__icon-wrap">
                                <div class="filter-item__icon --svg__arrow"></div>
                                <div class="filter-item__tooltip">
                                    <div class="tooltip">
                                        <div class="tooltip__head flex --align-center --just-space">
                                            <div class="tooltip__title-wrap">
                                                <div class="tooltip__title --p">Производство:</div>
                                                <div class="tooltip__desc p --s">Выбранно: <span>2</span></div>
                                            </div>
                                            <div class="tooltip__clear-btn btn">
                                                <span>Сбросить</span>
                                            </div>
                                        </div>
                                        <div class="tooltip__list grid --temp-col-2 mt-48">
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" checked="checked" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                            <label class="checkbox --color-dark mt-8">
                                                <input type="checkbox" name="product_type" value="Тип 1">
                                                <div class="flex --align-center">
                                                    <div class="checkbox__trigger"></div>
                                                    <div class="checkbox__label --p ml-16">Тип 1</div>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="tooltip__accept-btn btn --fill-1"><span>Применить фильтр</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter-item__count-wrap flex p --m mt-4">
                            <div class="filter-item__count-label mr-4">Не выбрано</div>
                            <div class="filter-item__count">
                                <b>
                                    <span></span>
                                </b>
                            </div>
                        </div>
                    </div>
                    <!-- filter-item -->
                    <div class="filter-item --search js-filter-item col --2">
                        <div class="filter-item__label js-filter-item-btn --p">Артикул</div>
                        <div class="filter-item__input-wrap">
                            <input class="filter-item__input input --border-bottom" type="text" placeholder="Введите артикул">
                        </div>
                    </div>
                    <div class="filter-items__btns-wrap flex --just-end col --auto">
                        <div class="filter-items__cancel-btn btn --fill-4 col --2">Сбросить</div>
                        <div class="filter-items__confirm-btn btn --fill-1 col --2">Подобрать</div>
                    </div>
                </div>
            </div>
            <div class="filter-sticky-more">
                <button class="js-filter-sticky-more-btn filter-sticky-more__button" type="button"
                        data-open-text="Развернуть" data-close-text="Свернуть">
                    <span class="js-filter-sticky-more-btn-title filter-sticky-more__title">Развернуть</span>
                    <span class="filter-sticky-more__icon"></span>
                </button>
            </div>
            <div class="js-filter-sticky-more-hidden filter__more-link-wrap flex --align-center --just-center mt-56">
                <div class="filter__more-link link --js__more-filters-link flex --align-center">
                    <span class="filter__more-link-icon">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-down-filter.svg'); ?>
                    </span>
                    <span class="filter__more-link-label --p">Все параметры</span>
                </div>
            </div>
        </div>
    </div>
</div>
