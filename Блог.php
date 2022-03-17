<?php
    $meta__title = "Блог компании Massager Market";
    $meta__desc = "Полезная информация о массажных креслах и комплектующих к ним: инсайды, аналитика, обзоры";
    $modifier = "--blog";
    require($_SERVER['DOCUMENT_ROOT'] . '/template/header.php');
?>
<div class="content page-content">
    <div class="content__breadcrumbs content__mobile-hidden px-48">
        <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/breadcrumbs/__breadcrumbs.php'); ?>
    </div>
    <div class="center-wrap">
        <div class="content__head --blog flex --align-center --just-space">
            <div class="back-button-wrapper">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/back-button/__back-button.php'); ?>
                <h1 class="content__title h1 <?= $modifier ?>">Новости</h1>
            </div>
            <div class="content__blog-tags flex --align-center">
                <!-- blog-tag -->
                <div class="blog-tag flex --align-center --just-center --p is-active">Все</div>
                <!-- blog-tag -->
                <div class="blog-tag flex --align-center --just-center --p">#акции</div>
                <!-- blog-tag -->
                <div class="blog-tag flex --align-center --just-center --p">#новинки</div>
                <!-- blog-tag -->
                <div class="blog-tag flex --align-center --just-center --p">#обзор</div>
                <!-- blog-tag -->
            </div>
            <div class="content__blog-filter flex --align-center">
                <div class="filter-item --blog flex --align-center">
                    <div class="filter-item__label p --l mr-12">Сортировать:</div>
                    <div class="filter-item__name-wrap flex --align-center">
                        <div class="filter-item__name p --l mr-12">Новые</div>
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
                </div>
            </div>
        </div>
        <div class="content__wrap">
            <div class="content__blog-wrap col --12 mt-24">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/blog/__blog.php'); ?>
            </div>
        </div>
        <div class="content__wrap mt-48 pb-128">
            <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/pagination/__pagination_new.php'); ?>
        </div>
    </div>
    <?php require($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
