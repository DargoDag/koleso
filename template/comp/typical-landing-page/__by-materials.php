<div class="product-items mount">
    <div class="center-wrap">
        <div class="filter__wrap">
            <div class="filter__mob-link --js__open-filter-link flex --align-center --just-space" style="display: none">
                <div class="filter__mob-link-label">Фильтр</div>
                <div class="filter__mob-link-icon"></div>
            </div>
            <div class="filter__subwrap">
                <div class="filter-items flex --align-stretch --just-space">
                    <!-- filter-item -->
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Диаметр, мм</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Контактный слой</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__name p --l mr-16">
                            </div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Тип кронштейна</div>
                        <div class="filter-item__name-wrap flex --align-center mt-4">
                            <div class="filter-item__name"><span class="filter-item__name-value">Выбрать</span><span class="filter-item__name-helper">Выбрать</span></div>
                            <div class="filter-item__name p --l mr-16">
                            </div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Способ крепления</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Диаметр оси ступицы, мм</div>
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
                        <div class="filter-items__rangeslide-title filter-item__label --p">Нагрузка, кг</div>
                        <div class="filter-items__rangeslide-sub-wrap">
                            <input type="text" class="filter-items__rangeslider js-range-slider --catalog" name="catalog" value="" />
                        </div>
                    </div>
                </div>
                <div class="filter-items flex --align-stretch --just-space mt-24 is-hidden" style="display: none">
                    <!-- filter-item -->
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Материал обшивки:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Стиль:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Тип кресла:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Производство:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Производство:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Производство:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Материал обшивки:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Стиль:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Тип кресла:</div>
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
                    <div class="filter-item col --2">
                        <div class="filter-item__label --p">Артикул</div>
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
            <div class="filter__more-link-wrap flex --align-center --just-center mt-56">
                <div class="filter__more-link link --js__more-filters-link flex --align-center">
                    <span class="filter__more-link-icon --svg__select-arrow mr-14"></span>
                    <span class="filter__more-link-label --p">Все параметры</span>
                </div>
            </div>
        </div>
        <div class="sorting__wrap mb-48">
            <div class="sorting__sub-wrap flex --align-center --just-space mt-32">
                <div class="sorting__series-wrap col --8">
                    <div class="series-items">
                        <div class="type-carusel js-swiper__series">
                            <div class="type-carusel__swiper flex --align-center">
                                <div class="type-carusel__btn --left swiper-button-prev"></div>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="series-item flex --direction-column --align-center --just-center">
                                                <span class="series-item__value">23</span>
                                                Серия
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="type-carusel__btn --right swiper-button-next"></div>
                            </div>
                            <div class="type-carusel__pagination" style="display: none">
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include($_SERVER['DOCUMENT_ROOT'].'/template/comp/sorting/__sorting-order.php'); ?>
            </div>
        </div>
        <div class="product-items-wrap grid --temp-col-4">
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-23.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-23.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-24.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-24.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #E6F0F1"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-25.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-25.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-26.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-26.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-23.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-23.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-23.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-23.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-23.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-23.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-24.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-24.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #E6F0F1"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-25.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-25.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-26.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-26.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-23.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-23.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-item">
                <div class="product-item__discount p --m">-10%</div>
                <div class="product-item__favor-btn btn">
                    <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                </div>
                <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                    <picture class="product-item__cover flex lazy">
                        <source srcset="/template/dist/img/product-23.webp" type="image/webp">
                        <source srcset="/template/dist/img/product-23.png" type="image/png">
                    </picture>
                    <div class="product-item__cover-mask" style="background-color: #F5F7F9"></div>
                </div>
                <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                    <div class="product-item__head flex --align-center">
                        <div class="product-item__details-wrap flex --just-center">
                            <div class="product-item__articul p --s mr-12">669206</div>
                            <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                            <div class="product-item__availability flex --align-center p --s">В наличии</div>
                        </div>
                        <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан TR - полиамид 6</div>
                        <div class="parameters-items grid --temp-col-4 --gap-16 mt-24">
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__diameter-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">200</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__width-icon">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50 <span>мм</span></div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--1">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">80<span>x</span>60</div>
                                </div>
                            </div>
                            <div class="parameter-item flex --direction-column --align-center">
                                <div class="parameter-item__icon --svg__parameter-icon--2">
                                    <div class="parameter-item__icon-tooltip p --s">Допустимая нагрузка, кг</div>
                                </div>
                                <div class="parameter-item__desc-wrap mt-4">
                                    <div class="parameter-item__value --p">50</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-item__bottom flex --align-center --just-space mt-20">
                        <div class="product-item__compare-btn btn --svg__compare-icon--2"></div>
                        <div class="product-item__price-wrap">
                            <div class="product-item__old-price p --m">5 885 ₽</div>
                            <div class="product-item__price">4 708 р.</div>
                        </div>
                        <div class="product-item__cart-add-btn btn --fill-1 --p">
                            <span class="product-item__cart-add-btn-icon --svg__cart-icon--2"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="product-related mt-112 col --12">
            <div class="product-related__wrap">
                <div class="type-carusel js-swiper__materials">
                    <div class="type-carusel__head flex --align-center --just-space mb-32">
                        <div class="type-carusel__title h3">Смотрите также</div>
                        <div class="type-carusel__nav flex --align-center">
                            <div class="type-carusel__btn --left swiper-button-prev --products">
                                <div class="type-carusel__btn-icon"></div>
                            </div>
                            <div class="type-carusel__pagination mx-16">
                                <div class="swiper-pagination --products"></div>
                            </div>
                            <div class="type-carusel__btn --right swiper-button-next --products mr-16">
                                <div class="type-carusel__btn-icon"></div>
                            </div>
                        </div>
                    </div>
                    <div class="type-carusel__swiper">
                        <div class="swiper-container --products">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide related-materials mr-24" style="background-color: #E6F0F1">
                                    <div class="related-materials__wrap link flex --align-center --just-space">
                                        <div class="related-materials__item">
                                            <div class="related-materials__title">Полиуретановые колеса для тележек</div>
                                        </div>
                                        <picture class="related-materials__cover flex lazy">
                                            <source srcset="/template/dist/img/banner-content2.webp" type="image/webp">
                                            <source srcset="/template/dist/img/banner-content2.png" type="image/png">
                                        </picture>
                                        <div class="related-materials__btn btn --svg__arrow-white"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide related-materials" style="background-color: #E6F0F1">
                                    <div class="related-materials__wrap link flex --align-center --just-space">
                                        <div class="related-materials__item">
                                            <div class="related-materials__title">Полиуретановые колеса для тележек</div>
                                        </div>
                                        <picture class="related-materials__cover flex lazy">
                                            <source srcset="/template/dist/img/banner-content2.webp" type="image/webp">
                                            <source srcset="/template/dist/img/banner-content2.png" type="image/png">
                                        </picture>
                                        <div class="related-materials__btn btn --svg__arrow-white"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide related-materials mr-24" style="background-color: #E6F0F1">
                                    <div class="related-materials__wrap link flex --align-center --just-space">
                                        <div class="related-materials__item">
                                            <div class="related-materials__title">Полиуретановые колеса для тележек</div>
                                        </div>
                                        <picture class="related-materials__cover flex lazy">
                                            <source srcset="/template/dist/img/banner-content2.webp" type="image/webp">
                                            <source srcset="/template/dist/img/banner-content2.png" type="image/png">
                                        </picture>
                                        <div class="related-materials__btn btn --svg__arrow-white"></div>
                                    </div>
                                </div>
                                <div class="swiper-slide related-materials" style="background-color: #E6F0F1">
                                    <div class="related-materials__wrap link flex --align-center --just-space">
                                        <div class="related-materials__item">
                                            <div class="related-materials__title">Полиуретановые колеса для тележек</div>
                                        </div>
                                        <picture class="related-materials__cover flex lazy">
                                            <source srcset="/template/dist/img/banner-content2.webp" type="image/webp">
                                            <source srcset="/template/dist/img/banner-content2.png" type="image/png">
                                        </picture>
                                        <div class="related-materials__btn btn --svg__arrow-white"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
