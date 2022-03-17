<div class="filter-mobile-popup popup" id="filter-mobile-popup">
    <div class="popup__wrap">
        <div class="popup__content --base">
            <div class="popup__header">
                <h3 class="js-title--text">Фильтр</h3>
                <button class="popup__close js-popup__close" type="button"></button>
            </div>

            <div class="filter-mobile js-filter-mobile">
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/template/comp/filter/__filter-catalog.php'); ?>
            </div>
        </div>
        <div class="popup__shade js-popup__close"></div>
    </div>
</div>
