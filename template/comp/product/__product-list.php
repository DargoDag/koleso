<?php
    $productList = [
        [
            'img' => '/template/dist/img/product-23.png',
            'webp' => '/template/dist/img/product-23.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-24.png',
            'webp' => '/template/dist/img/product-24.webp',
            'bg' => '#E6F0F1'
        ],
        [
            'img' => '/template/dist/img/product-25.png',
            'webp' => '/template/dist/img/product-25.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-26.png',
            'webp' => '/template/dist/img/product-26.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-36.png',
            'webp' => '/template/dist/img/product-36.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-34.png',
            'webp' => '/template/dist/img/product-34.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-38.png',
            'webp' => '/template/dist/img/product-38.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-23.png',
            'webp' => '/template/dist/img/product-23.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-23.png',
            'webp' => '/template/dist/img/product-23.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-24.png',
            'webp' => '/template/dist/img/product-24.webp',
            'bg' => '#E6F0F1'
        ],
        [
            'img' => '/template/dist/img/product-25.png',
            'webp' => '/template/dist/img/product-25.webp',
            'bg' => '#F5F7F9'
        ],
        [
            'img' => '/template/dist/img/product-26.png',
            'webp' => '/template/dist/img/product-26.webp',
            'bg' => '#F5F7F9'
        ],
    ];
?>

<div class="product-items">
    <div class="center-wrap">
        <div class="product-items-wrap --grid">
            <?php foreach ($productList as $product) { ?>
                <div class="product-item">
                    <div class="product-item__discount p --m">-10%</div>
                    <div class="product-item__favor-btn btn">
                        <span class="product-item__favor-btn-icon --svg__favor-icon"></span>
                    </div>
                    <div class="product-item__cover-thumb flex --align-center --just-center mr-32">
                        <picture class="product-item__cover flex lazy">
                            <source srcset="<?php echo $product['webp'] ?>" type="image/webp">
                            <source srcset="<?php echo $product['img'] ?>" type="image/png">
                        </picture>
                        <div class="product-item__cover-mask" style="background-color: <?php echo $product['bg'] ?>"></div>
                    </div>
                    <div class="product-item__wrap flex --direction-column --align-center --just-space mt-8">
                        <div class="product-item__head flex --align-center">
                            <div class="product-item__details-wrap flex --just-center">
                                <div class="product-item__articul p --s mr-12">669206</div>
                                <div class="product-item__country p --s mr-16">Tellure Rota (Италия)</div>
                                <div class="product-item__availability flex --align-center p --s">В наличии</div>
                            </div>
                            <div class="product-item__name --p mt-8">Большегрузное поворотное с тормозом 669206, полиуретан
                                TR - полиамид 6
                            </div>
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
            <?php } ?>
        </div>
    </div>
</div>
