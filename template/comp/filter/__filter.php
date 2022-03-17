<div class="filter --main-page mt-40">
    <div class="center-wrap">
        <div class="filter__wrap">
            <div class="filter__title">Фильтр поиска колес</div>
            <div class="filter__sub-wrap flex --align-stretch --just-space mt-56">
                <div class="filter-tuning col --auto">
                    <div class="filter-tuning__rangeslider-wrap">
                        <div class="filter-tuning__label p --m">Диаметр колеса</div>
                        <div class="filter-tuning__rangeslide-wrap mt-12">
                            <input type="text" class="filter-tuning__rangeslider js-range-slider --diameter"
                                   name="diameter" value=""/>
                            <div class="filter-tuning__input-wrap --from">
                                <input type="text" class="filter-tuning__input --from"/>
                            </div>
                            <div class="filter-tuning__input-wrap --to">
                                <input type="text" class="filter-tuning__input --to"/>
                            </div>
                        </div>
                    </div>
                    <div class="js-filter-tuning-spoiler filter-tuning__rangeslider-wrap --spoiler">
                        <div class="mt-40">
                            <div class="filter-tuning__label p --m">Ширина ступицы мм</div>
                            <div class="filter-tuning__rangeslide-wrap mt-12">
                                <input type="text" class="filter-tuning__rangeslider js-range-slider --width"
                                       name="width" value=""/>
                                <div class="filter-tuning__input-wrap --from">
                                    <input type="text" class="filter-tuning__input --from"/>
                                </div>
                                <div class="filter-tuning__input-wrap --to">
                                    <input type="text" class="filter-tuning__input --to"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-tuning__selects-wrap flex mt-48">
                        <div class="filter-tuning__select-wrap">
                            <div class="filter-tuning__label p --m">Тип подшипника колеса</div>
                            <select class="filter-tuning__select select --border mt-12">
                                <option>Все</option>
                                <option>Выпадающий</option>
                                <option>Выпадающий</option>
                            </select>
                        </div>
                        <div class="filter-tuning__select-wrap">
                            <div class="filter-tuning__label p --m">Контактный слой колеса</div>
                            <select class="filter-tuning__select select --border mt-12">
                                <option>Все</option>
                                <option>Выпадающий</option>
                                <option>Выпадающий</option>
                            </select>
                        </div>
                    </div>
                    <div class="js-filter-tuning-spoiler filter-tuning__selects-wrap --spoiler">
                        <div class="flex mt-24">
                            <div class="filter-tuning__select-wrap">
                                <div class="filter-tuning__label p --m">Тип подшипника колеса</div>
                                <select class="filter-tuning__select select --border mt-12">
                                    <option>Все</option>
                                    <option>Выпадающий</option>
                                    <option>Выпадающий</option>
                                </select>
                            </div>
                            <div class="filter-tuning__select-wrap">
                                <div class="filter-tuning__label p --m">Способ крепления к телеге</div>
                                <select class="filter-tuning__select select --border mt-12">
                                    <option>Все</option>
                                    <option>Выпадающий</option>
                                    <option>Выпадающий</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="filter-preview flex --direction-column --just-space col --2">
                    <div class="filter-preview__head">
                        <div class="filter-preview__input-wrap">
                            <input class="filter-preview__input input --border-bottom" type="text"
                                   placeholder="Введите артикул">
                            <span class="filter-preview__input-icon --svg__search-icon"></span>
                        </div>
                        <div class="filter-preview__wheel-design flex mt-20">
                            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/dist/img/wheel-design--filter.svg'); ?>
                        </div>
                    </div>
                    <div class="filter-tuning__select-wrap mt-24 is-hidden" style="display: none">
                        <div class="filter-tuning__label p --m">Точки крепления мм</div>
                        <select class="filter-tuning__select select --border mt-12">
                            <option>Все</option>
                            <option>Выпадающий</option>
                            <option>Выпадающий</option>
                        </select>
                    </div>
                </div>
                <div class="filter-tuning col --auto">
                    <div class="filter-tuning__rangeslider-wrap">
                        <div class="filter-tuning__label p --m">Грузоподъемность</div>
                        <div class="filter-tuning__rangeslide-wrap mt-12">
                            <input type="text" class="filter-tuning__rangeslider js-range-slider --weight" name="weight"
                                   value=""/>
                            <div class="filter-tuning__input-wrap --from">
                                <input type="text" class="filter-tuning__input --from"/>
                            </div>
                            <div class="filter-tuning__input-wrap --to">
                                <input type="text" class="filter-tuning__input --to"/>
                            </div>
                        </div>
                    </div>
                    <div class="js-filter-tuning-spoiler filter-tuning__rangeslider-wrap --spoiler">
                        <div class="mt-40">
                            <div class="filter-tuning__label p --m">Строительная высота колеса с опорой</div>
                            <div class="filter-tuning__rangeslide-wrap mt-12">
                                <input type="text" class="filter-tuning__rangeslider js-range-slider --height"
                                       name="height"
                                       value=""/>
                                <div class="filter-tuning__input-wrap --from">
                                    <input type="text" class="filter-tuning__input --from"/>
                                </div>
                                <div class="filter-tuning__input-wrap --to">
                                    <input type="text" class="filter-tuning__input --to"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="filter-tuning__selects-wrap flex mt-48">
                        <div class="filter-tuning__select-wrap">
                            <div class="filter-tuning__label p --m">Тип кронштейна</div>
                            <select class="filter-tuning__select select --border mt-12">
                                <option>Все</option>
                                <option>Выпадающий</option>
                                <option>Выпадающий</option>
                            </select>
                        </div>
                        <div class="filter-tuning__select-wrap">
                            <div class="filter-tuning__label p --m">Материал сердечника диска</div>
                            <select class="filter-tuning__select select --border mt-12">
                                <option>Все</option>
                                <option>Выпадающий</option>
                                <option>Выпадающий</option>
                            </select>
                        </div>
                    </div>
                    <div class="js-filter-tuning-spoiler filter-tuning__selects-wrap --spoiler">
                        <div class="flex mt-24">
                            <div class="filter-tuning__select-wrap">
                                <div class="filter-tuning__label p --m">Сроки поставки</div>
                                <select class="filter-tuning__select select --border mt-12">
                                    <option>Все</option>
                                    <option>Выпадающий</option>
                                    <option>Выпадающий</option>
                                </select>
                            </div>
                            <div class="filter-tuning__select-wrap">
                                <div class="filter-tuning__label p --m">Материал кронштейна</div>
                                <select class="filter-tuning__select select --border mt-12">
                                    <option>Все</option>
                                    <option>Выпадающий</option>
                                    <option>Выпадающий</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter__more-link-wrap flex --just-center mt-20">
                <div class="filter__more-link link --js__more-filters-link flex --align-center">
                    <span class="filter__more-link-icon">
                        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/img/--svg__arrow-down-filter.svg'); ?>
                    </span>
                    <span class="filter__more-link-label --p">Все параметры</span>
                </div>
            </div>
            <div class="filter__confirm-btn-wrap flex --align-center --just-center mt-20">
                <div class="filter__confirm-btn btn">Подобрать</div>
            </div>
        </div>
    </div>
</div>
