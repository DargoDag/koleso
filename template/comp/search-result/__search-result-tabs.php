<div class="search-result-tabs">
    <div class="tabs">
        <div class="tabs__btns-wrapper">
            <div class="tabs__btns flex">
                <div class="tabs__btn --js mr-32 pb-24 is-active" data-tab="1">Все</div>
                <div class="tabs__btn --js mr-32 pb-24" data-tab="2">Серая резина</div>
                <div class="tabs__btn --js mr-32 pb-24" data-tab="3">Термо</div>
                <div class="tabs__btn --js mr-32 pb-24" data-tab="4">Чугун</div>
                <div class="tabs__btn --js mr-32 pb-24" data-tab="5">Черная резина</div>
            </div>
        </div>
        <div class="tabs__blocks">
            <div class="tabs__block --js --1 is-show">
                <div class="content__wrap mt-32">
                    <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/product/__product-list.php'); ?>
                </div>
            </div>
            <div class="tabs__block --js --2">
                block - 2
            </div>
            <div class="tabs__block --js --3">
                block - 3
            </div>
            <div class="tabs__block --js --4">
                block - 4
            </div>
            <div class="tabs__block --js --5">
                block - 5
            </div>
        </div>
    </div>
</div>
